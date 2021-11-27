<?php
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT ordercategory,ordergender,SUM(quantity) AS quantity FROM m_orderdetail GROUP BY ordercategory,ordergender ORDER BY quantity DESC");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
