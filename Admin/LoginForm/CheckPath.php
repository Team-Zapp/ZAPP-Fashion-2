<?php

echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
//On this page we are going to check Username and Password if they are both correct 
//And we are going seperate the path to the admin view or customer view depending on Username and Password

if (isset($_POST["submit"])) {
    $UserInputname = $_POST["Username"]; //Username  
    $UserInputpassword = $_POST["Password"]; //Password
    //As we have 4 developers in this project so we made ourselves Admins
    $db = new Dbconnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare("SELECT * FROM m_user WHERE name='$UserInputname' "); //Get Userinfo from DataBase
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);


    if (count($result) > 0) {
        if (
            $UserInputname == $result[0]["name"]
        ) {
            if (
                $UserInputpassword == $result[0]["password"]
            ) {
                if (
                    $result[0]["role"] == "ADMIN"
                ) {
                    //We deliever Admins to the Admin view
                    header("Location: ../DashBoard/DashBoard.php?name=" . $UserInputname);
                }
            } else {
                echo "<body><script>Swal.fire({
                    icon: 'error',
                    title: 'Wrong Password'
                })
                </script></body>";
                echo "<script>localStorage.clear();</script>";
                require "login.php";
            }
        }

        //If the name from login form is equal to the name from the DataBase
        if ($UserInputname == $result[0]["name"]) {
            //and if the Passwords are equals too
            if ($UserInputpassword == $result[0]["password"]) {

                if ($result[0]["role"] == "CUSTOMER") {
                    //we take our customer to the cspage which is a customer view 

                    $db = new Dbconnect();
                    $dbconnect = $db->connect();
                    $sql = $dbconnect->prepare(
                        "INSERT INTO m_login
                (
                    id,
                    name,
                    role,
                    del_flg,
                    login_time
                )
                VALUES
                (
                    :id,
                    :name,
                    :role,
                    :del_flg,
                    :login_time
                )"
                    );

                    $sql->bindValue(":id", $result[0]["id"]);
                    $sql->bindValue(":name", $UserInputname);
                    $sql->bindValue(":role", $result[0]["role"]);
                    $sql->bindValue(":del_flg", 0);
                    $sql->bindValue(":login_time", date("Y-m-d H:i"));
                    $sql->execute();

                    echo $result[0]['id'];
                    header("Location: ../../CSpage/cspage.php?id=" . $result[0]["id"]);
                }
                require "login.php";
            } else {
                echo "<body><script>Swal.fire({
                    icon: 'error',
                    title: 'Wrong Password'
                })
                </script></body>";
                echo "<script>localStorage.clear();</script>";
            }
        }
    } else {
        echo "<body><script>Swal.fire({
        icon: 'error',
        title: 'Username Not Found'
    })</script></body>";
        echo "<script>localStorage.clear();</script>";
        header("Location: login.php");
    }
}
