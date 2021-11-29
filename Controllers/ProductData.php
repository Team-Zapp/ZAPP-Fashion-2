<?php

require "../DBconnect.php";
$db = new DBconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("SELECT * FROM stock_mgmt WHERE del_flag=0 AND stock>0 ");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);