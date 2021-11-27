<?php
echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
echo "<script src='sweetalert2.min.js'></script>";
echo "<link rel=stylesheet' href='sweetalert2.min.css'>";
$name = $_GET['name'];
require "../../DBconnect.php";

if (isset($_POST['submit'])) {
    $password = $_POST['password'];


    $db = new Dbconnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare("SELECT * FROM m_user WHERE name='$name' "); //Get Userinfo from DataBase
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);


    $db = new Dbconnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_user
        SET password= :password
        WHERE name=:name;"
    );
    $sql->bindValue(":name", $name);
    $sql->bindValue(":password", $password);


    $sql->execute();

    echo "<body><script>Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your password has been changed',
        showConfirmButton: false,
        timer: 1500
      })</script></body>";
    echo "<script>
    setTimeout(function( )
    {window.location='login.php';  },
    1500);
    </script>";
}
