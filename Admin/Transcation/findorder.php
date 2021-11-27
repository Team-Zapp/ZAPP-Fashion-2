<?php


$orderid = $_POST['orderid'];

require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT
    *
FROM
    m_orderdetail
INNER JOIN stock_mgmt ON m_orderdetail.itemid = stock_mgmt.id
");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
