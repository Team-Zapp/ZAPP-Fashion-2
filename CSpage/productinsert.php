<?php

// echo  "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

//GB
$insert = false;
$Userid;
$Username = "";
$loopCount = 0;
$totalBg = 0;
$stockdeduct=0;
$overstock=true;

//connect database
require "../DBconnect.php";

//connect database connection
$db = new Dbconnect();
$dbconnect = $db->connect();

//extract for each item from sender ajax
$data = json_decode($_POST['send'], true);


// stock and quantity check
foreach ($data as $key => $value){

            $itemid = $value['cartid'];
            $quantity = $value['quantity'];

            $sql = $dbconnect->prepare("SELECT stock,name FROM stock_mgmt WHERE id=:id");
            $sql->bindValue(":id", $itemid);
            // sql execute
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            $checkorginalstock = $result[0]["stock"];
            $outofstockname =$result[0]["name"];

            if ( $quantity > $checkorginalstock){

                $overstock=false;
                $returnmsg =[
                    "success" => false,
                    "message" => "$outofstockname is out of Stock only $checkorginalstock left"
                ];
                    echo json_encode($returnmsg);
                // echo "<body><script>
                //          Swal.fire({
                //          icon: 'error',
                //          title: 'Oops... $outofstockname is out of Stock !',
                //          text: '$outofstockname only left $checkorginalstock items '});
                //         </script></body>";
                break;
            }
}

if ($overstock){
// loop for each item
foreach ($data as $key => $value) {
    // get all item from array
    $itemprice = $value['itemprice'];
    $quantity = $value['quantity'];
    if ($loopCount == 0) {
        //set userid
        $Userid = $value['userid'];
        $sql = $dbconnect->prepare("SELECT name FROM m_user WHERE id =:id");
        $sql->bindValue(":id", $Userid);
        // sql execute
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $Username = $result[0]["name"];
        $loopCount++;
    }
    //set total budget
    $totalBg += (int)$itemprice * (int) $quantity;
}

//insert Order table
insertOrder($dbconnect);
insertOrderDetail($dbconnect, $data);
stockdeduct($dbconnect,$data);
//check
checkInsert();
}


/**
 * this function is used for insert order table
 */
function insertOrder($dbconnect)
{
    global $Username;
    global $Userid;
    global $totalBg;
    global $insert;

    try {
        // prepare for insert data
        $sql = $dbconnect->prepare(
            "INSERT INTO m_order
                (
                    userid,
                    username,
                    totalbudget,
                    buy_date
                )
                VALUES
                (
                    :id,
                    :name,
                    :totalbudget,
                    :buy_date
                )"
        );
        $sql->bindValue(":id", $Userid);
        $sql->bindValue(":name", $Username);
        $sql->bindValue(":totalbudget", $totalBg);
        $sql->bindValue(":buy_date", date("Y/m/d"));
        // sql execute
        $sql->execute();
        // if insert success
        $insert = true;
    } catch (Exception $e) {
        // if insert fail
        $insert = false;
    }
}

/**
 * this is used for order detail table insert
 */
function insertOrderDetail($dbconnect, $data)
{
    global $insert;
    if ($insert) {
        // loop for each item
        foreach ($data as $key => $value) {
            $itemid = $value['cartid'];
            $ordercategory = "";
            $ordergender = "";
            $quantity = $value['quantity'];

            //search for ordercategory,ordergender according to itemid
            $sql = $dbconnect->prepare("SELECT category,gender FROM stock_mgmt WHERE id=:id");
            $sql->bindValue(":id", $itemid);
            // sql execute
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            $ordercategory = $result[0]["category"];
            $ordergender = $result[0]["gender"];

            //insert order detail table
            try {
                // prepare for insert data
                $sql = $dbconnect->prepare(
                    "INSERT INTO m_orderdetail
                (
                    orderid,
                    ordercategory,
                    quantity,
                    ordergender,
                    itemid
                )
                VALUES
                (
                    (SELECT MAX(orderid) FROM m_order),
                    :ordercategory,
                    :quantity,
                    :ordergender,
                    :itemid
                    
                )"
                );

                $sql->bindValue(":ordercategory", $ordercategory);
                $sql->bindValue(":quantity", $quantity);
                $sql->bindValue(":ordergender", $ordergender);
                $sql->bindValue(":itemid", $itemid);
                // sql execute
                $sql->execute();
                // if insert success
                $insert = true;
            } catch (Exception $e) {
                // if insert fail
                print_r($e);
                $insert = false;
            }
        }
    }
}


function stockdeduct($dbconnect,$data){
 foreach ($data as $key => $value) {
            $itemid = $value['cartid'];
            $quantity = $value['quantity'];
            //search for ordercategory,ordergender according to itemid
            $sql = $dbconnect->prepare("SELECT stock FROM stock_mgmt WHERE id=:id");
            $sql->bindValue(":id", $itemid);
            // sql execute
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            $originalstock = $result[0]["stock"];
            $stockdeduct=(int)$originalstock-(int)$quantity;
            //deduct stock from stock mgmt table
            try {
                // prepare for deduct data
                $sql = $dbconnect->prepare(
                "UPDATE stock_mgmt SET 

                stock = :stock
                WHERE id=:id;
            "
                );
                $sql->bindValue(":stock", $stockdeduct );
                $sql->bindValue(":id", $itemid);
                // sql execute
                $sql->execute();
                // if insert success
            } catch (Exception $e) {
                // if insert fail
                print_r($e);
                $insert = false;
            }
        }
    }



function checkInsert()
{
    global $insert;
    // check insert is success or fail and return to frontend
    if ($insert) {
        $returnmsg =[
                    "success" => true,
                    "message" => "Stock"
                ];
                    echo json_encode($returnmsg);
    } else {
        $returnmsg =[
                    "success" => false,
                    "message" => "Your Buy Fail"
                ];
                    echo json_encode($returnmsg);
    }
}
