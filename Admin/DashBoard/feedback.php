<?php
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT COUNT(id) FROM m_userfeedback "); //Get Userinfo from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo $result[0]["COUNT(id)"];
