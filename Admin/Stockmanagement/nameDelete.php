<?php
//This is registration form for new customers whish keep customer info in DataBase
$data = json_decode($_POST['send'], true);
$id = $data['id'];
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare(
    "UPDATE stock_mgmt SET 
                stock =0,
                del_flag =1
                WHERE id=:id;
            "
);

$sql->bindValue(":id", $id);


$sql->execute();

echo "Deleted Successfully";
