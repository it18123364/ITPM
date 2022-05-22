<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'srionus') or die(mysqli_error($mysqli));

$id = 0;
$uname = '';
$email = '';
$password = '';

if (isset($_POST['UPDATE'])){
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];;

    $mysqli->query("UPDATE user SET uname ='$uname', email='$email', password='$password' WHERE id='$id'") or die($mysqli->error);

    $_SESSION['message'] = "Record has been UPDATED!";
    $_SESSION['msg_type'] = "warning";

    header("location: ../user.php");

}