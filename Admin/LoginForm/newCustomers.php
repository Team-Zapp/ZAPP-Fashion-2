<?php
//This is registration form for new customers whish keep customer info in DataBase
echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
require "../../DBconnect.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phnumber = $_POST['phnumber'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $db = new Dbconnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare("SELECT * FROM m_user WHERE name='$name' "); //Get Userinfo from DataBase
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {

        echo "<body><script>Swal.fire({
            icon: 'error',
            title: 'Username already taken'
          })</script></body>";
    } else {
        $db = new Dbconnect();
        $dbconnect = $db->connect();

        $sql = $dbconnect->prepare(
            "INSERT INTO m_user
            (
                name,
                email,
                phonenumber,
                password,
                address,
                del_flg,
                create_date
            )
            VALUES
            (
                :name,
                :email,
                :phonenumber,
                :password,
                :address,
                :del_flg,
                :create_date
            )"
        );
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phonenumber", $phnumber);
        $sql->bindValue(":password", $password);
        $sql->bindValue(":address", $address);
        $sql->bindValue(":del_flg", 0);
        $sql->bindValue(":create_date", date("Y/m/d"));

        $sql->execute();
        echo "<body><script>Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your account has been created',
            showConfirmButton: false,
            timer: 1500
          })</script></body>";
    }

    echo "<script>
    setTimeout(function( )
    {window.location='login.php';  },
    2000);
    </script>";
}
