<?php

$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $review = $_POST['review'];
}
require "../DBconnect.php";


$db = new Dbconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare(
    "INSERT INTO m_userfeedback
    (
        customerid,
        feedback,
        create_date
    )
    VALUES
    (

        :customerid,
        :feedback,
        :create_date
    )"
);
$sql->bindValue(":customerid", $id);
$sql->bindValue(":feedback", $review);
$sql->bindValue(":create_date", date("Y/m/d"));

$sql->execute();

echo "<script>
setTimeout(function( )
{window.location='cspage.php?id=$id';  },
500);
</script>";
