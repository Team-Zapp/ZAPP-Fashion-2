<?php
<<<<<<<< HEAD:Admin/FeedBack/getfeedback.php
require "../../DBconnect.php";
========
require "../DBconnect.php";
>>>>>>>> f08e51594c44098f784fc2de663b2830c79d0111:Controllers/FeedbackDatas.php
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM m_userfeedback LEFT JOIN m_user ON m_user.id=m_userfeedback.customerid"); //Get Userinfo from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($result);

<<<<<<<< HEAD:Admin/FeedBack/getfeedback.php
echo $data;
========
echo $data;
>>>>>>>> f08e51594c44098f784fc2de663b2830c79d0111:Controllers/FeedbackDatas.php
