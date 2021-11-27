<?php
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT
    SUM(stock)
FROM
    `stock_mgmt`
WHERE
    del_flag = 0
"); //Get Userinfo from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo $result[0]["SUM(stock)"];