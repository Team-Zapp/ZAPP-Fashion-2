<?php


$name = $_POST['name'];




require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM stock_mgmt WHERE name LIKE '%$name%' AND del_flag=0 ");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
