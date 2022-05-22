<?php

//session_start();



$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "srionus";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

$id = 0;
$update = false;
$name = '';
$email = '';
$subject = '';
$message = '';


if(isset($_POST['contact'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    

    // $mysqli->query("INSERT INTO employee (category, fullname, age, gender, birthday, email, address, province, district, nic, contact, experience, language, OtherSkills, emp_photo, nic_front, nic_back, status) VALUES('$category', '$fullname', '$age', '$gender', '$birthday', '$email', '$address', '$province', '$district', '$nic', '$contact', '$experience', '$language', '$OtherSkills', '$emp_photo', '$nic_front', '$nic_back', '$status')") or die($mysqli->error);

    $query = "INSERT INTO contact (name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
    $query_run = mysqli_query($connection, $query);

    if($query_run){

        $_SESSION['state'] = "Record has been saved!";
        $_SESSION['status_code'] = "success";

        header("location: ../index.php#contacts");

    }else{

        $_SESSION['state'] = "Record has ";
        $_SESSION['status_code'] = "warning";

        header("location: ../home_care.php");

    }

    
}




