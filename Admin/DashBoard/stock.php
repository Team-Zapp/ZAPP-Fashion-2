<?php
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT category,gender,SUM(stock) AS stock FROM stock_mgmt GROUP BY gender , category "); //Get Userinfo from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($result);

echo $data;
