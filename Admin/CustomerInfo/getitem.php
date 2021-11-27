<?php
$data = json_decode($_POST['send'], true);
$name = $data['name'];
$orderid = $data['orderid'];
$totalbudget = $data['totalbudget'];

require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM m_orderdetail WHERE orderid=$orderid ");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
