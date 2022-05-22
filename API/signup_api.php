<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'srionus') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$uname = '';
$email = '';
$password = '';

if(isset($_POST['REGISTER'])){

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mysqli->query("INSERT INTO user (uname, email, password) VALUES('$uname', '$email', '$password')") or die($mysqli->error);


    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: ../user.php");
}




