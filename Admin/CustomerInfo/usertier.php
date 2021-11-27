<?php

require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT username,email,phonenumber,SUM(totalbudget) AS totalbudget,address FROM m_order LEFT JOIN m_user on m_order.userid = m_user.id GROUP BY userid ORDER BY totalbudget DESC");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($result);
//username,userid,SUM(totalbudget) AS totalbudget FROM m_order ORDER BY userid