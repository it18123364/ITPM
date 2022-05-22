<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'srionus') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$image = '';
$class = '';
$reg_no = '';
$capacity = '';
$oname = '';
$province = '';
$district = '';
$contact = '';

if (isset($_POST['UPDATE'])){
    $class = $_POST['class'];
    $reg_no = $_POST['reg_no'];
    $capacity = $_POST['capacity'];
    $oname = $_POST['oname'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $contact = $_POST['contact'];
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $mysqli->query("UPDATE vehicle SET class ='$class', reg_no='$reg_no', capacity='$capacity', birthday='$birthday', oname='$oname', province='$province', contact='$contact' WHERE id='$id'") or die($mysqli->error);

    $_SESSION['message'] = "Record has been UPDATED!";
    $_SESSION['msg_type'] = "warning";

    header("location: ../vehicle.php");

}