<?php

session_start();
// header('location:signup.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'srionus');

$uname = $_POST['uname'];

$password = $_POST['password'];

$s = " select * from user where uname = '$uname' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    $_SESSION['uname'] = $uname;
    header('location: ../dashboard.php');
}else{
    header('location: ../index.php');
}

?>