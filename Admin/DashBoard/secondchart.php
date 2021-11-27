<?php
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT
ordercategory,ordergender,
SUM((saleprice - orgprice)*quantity) AS revenue
FROM
m_orderdetail
INNER JOIN m_order  ON m_orderdetail.orderid = m_order.orderid
INNER JOIN stock_mgmt ON stock_mgmt.id = m_orderdetail.itemid
GROUP BY
ordergender,
ordercategory"); //Get Userinfo from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
