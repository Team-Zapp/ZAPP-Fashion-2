<?php
echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

$username = $_GET["name"];



require "../../DBconnect.php";

if (isset($_POST["submit"])) {
    $Userphnumber = $_POST["phnumber"]; //phonernumber
    $UserInputemail = $_POST["email"];
}

$db = new Dbconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("SELECT * FROM m_user WHERE name='$username' "); //Get Username and Password from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (
    $Userphnumber == $result[0]["phonenumber"] &&
    $UserInputemail == $result[0]["email"]
) {
    require "AfterChangePassword.php";
} else {
    echo "<body><script>Swal.fire({
        icon: 'error',
        title: 'Username and Password are not match'
    })
    setTimeout(() => {
        window.location='../LoginForm/FindPassword.php?name=$username';
        }, 1500);
    </script></body>";
    
}
$name = $_GET['name'];
