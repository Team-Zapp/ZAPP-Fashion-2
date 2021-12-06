<?php
require "../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM m_orderdetail INNER JOIN m_order  ON m_orderdetail.orderid = m_order.orderid
INNER JOIN stock_mgmt ON stock_mgmt.id = m_orderdetail.itemid WHERE ordergender=2 AND del_flag=0 AND stock_mgmt.stock>0  ORDER BY quantity DESC LIMIT 5");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($result);
