<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'srionus') or die(mysqli_error($mysqli));

$id = 0;
$fullname = '';
$age = '';
$gender = '';
$birthday = '';
$email = '';
$address = '';
$province = '';
$district = '';
$nic = '';
$contact = '';

if (isset($_POST['UPDATE'])){
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $nic = $_POST['nic'];
    $contact = $_POST['contact'];

    $mysqli->query("UPDATE guides SET fullname ='$fullname', age='$age', gender='$gender', birthday='$birthday', email='$email', address='$address', province='$province', district='$district', nic='$nic', contact='$contact' WHERE id='$id'") or die($mysqli->error);

    $_SESSION['message'] = "Record has been UPDATED!";
    $_SESSION['msg_type'] = "warning";

    header("location: ../guide.php");

}