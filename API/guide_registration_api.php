<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'srionus') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
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

if(isset($_POST['REGISTER'])){

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
    $emp_photo = $_FILES["emp_photo"]["name"];
    

    $targetDir = "../../uploads";
    if(is_array($_FILES)) {
        if(is_uploaded_file($_FILES['emp_photo']['tmp_name'])) {
            if(move_uploaded_file($_FILES['emp_photo']['tmp_name'],"$targetDir/".$_FILES['emp_photo']['name'])) {
                echo "File uploaded successfully";
            }
        }
    }


    $mysqli->query("INSERT INTO guides (fullname, age, gender, birthday, email, address, province, district, nic, contact, emp_photo) VALUES('$fullname', '$age', '$gender', '$birthday', '$email', '$address', '$province', '$district', '$nic', '$contact', '$emp_photo')") or die($mysqli->error);

    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: ../guide.php");
}




