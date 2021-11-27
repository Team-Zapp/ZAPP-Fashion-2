<?php
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM m_userfeedback LEFT JOIN m_user ON m_user.id=m_userfeedback.customerid"); //Get Userinfo from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($result);

echo $data;
