<?php
echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
echo "<script src='sweetalert2.min.js'></script>";
echo "<link rel=stylesheet' href='sweetalert2.min.css'>";
require "../../DBconnect.php";

if (isset($_POST["submit"])) {
    $UserInputName = $_POST["Username"]; //Username

}

$db = new Dbconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("SELECT * FROM m_user WHERE name='$UserInputName' "); //Get Username and Password from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {

    header("Location: FindPassword.php?name=" . $UserInputName);
} else {
    echo "<body><script>Swal.fire({
        icon: 'error',
        title: 'Username not found'
    })</script></body>";
    require "ForgetPassword.php";
}
