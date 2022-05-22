<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'srionus') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
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

if(isset($_POST['REGISTER'])){

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
    $hotel_photo = $_FILES["hotel_photo"]["name"];
    

    $targetDir = "../../uploads";
    if(is_array($_FILES)) {
        if(is_uploaded_file($_FILES['hotel_photo']['tmp_name'])) {
            if(move_uploaded_file($_FILES['hotel_photo']['tmp_name'],"$targetDir/".$_FILES['hotel_photo']['name'])) {
                echo "File uploaded successfully";
            }
        }
    }


    $mysqli->query("INSERT INTO hotels (hotel_name, rooms, hotel_type, register_date, email, address, province, district, loyalty_number, contact, hotel_photo) VALUES('$hotel_name', '$rooms', '$hotel_type', '$register_date', '$email', '$address', '$province', '$district', '$loyalty_number', '$contact', '$hotel_photo')") or die($mysqli->error);

    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: ../hotel.php");
}




