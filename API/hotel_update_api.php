<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'srionus') or die(mysqli_error($mysqli));

$id = 0;
$hotel_name = '';
$rooms = '';
$hotel_type = '';
$register_date = '';
$email = '';
$address = '';
$province = '';
$district = '';
$loyalty_number = '';
$contact = '';

if (isset($_POST['UPDATE'])){
    $id = $_POST['id'];
    $hotel_name = $_POST['hotel_name'];
    $rooms = $_POST['rooms'];
    $hotel_type = $_POST['hotel_type'];
    $register_date = $_POST['register_date'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $loyalty_number = $_POST['loyalty_number'];
    $contact = $_POST['contact'];

    $mysqli->query("UPDATE hotels SET hotel_name ='$hotel_name', rooms='$rooms', hotel_type='$hotel_type', register_date='$register_date', email='$email', address='$address', province='$province', district='$district', loyalty_number='$loyalty_number', contact='$contact' WHERE id='$id'") or die($mysqli->error);

    $_SESSION['message'] = "Record has been UPDATED!";
    $_SESSION['msg_type'] = "warning";

    header("location: ../hotel.php");

}