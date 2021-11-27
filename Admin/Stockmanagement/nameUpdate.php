<?php
//This is registration form for new customers whish keep customer info in DataBase
$data = json_decode($_POST['send'], true);
$name = $data['name'];
$gender = $data['gender'];
$category = $data['category'];
$made = $data['made'];
$orgprice = $data['orgprice'];
$saleprice = $data['saleprice'];
$stock = $data['stock'];
$id = $data['id'];
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare(
    "UPDATE stock_mgmt SET 

                name = :name,
                gender = :gender,
                category = :category,
                madeof = :made,
                orgprice = :orgprice,
                saleprice = :saleprice,
                stock = :stock,
                update_date=:update_date
                WHERE id=:id;
            "
);
$sql->bindValue(":name", $name);
$sql->bindValue(":gender", $gender);
$sql->bindValue(":category", $category);
$sql->bindValue(":made", $made);
$sql->bindValue(":orgprice", $orgprice);
$sql->bindValue(":saleprice", $saleprice);
$sql->bindValue(":stock", $stock);
$sql->bindValue(":id", $id);
$sql->bindValue(":update_date", date("Y/m/d"));

$sql->execute();
