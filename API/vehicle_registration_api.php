<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'srionus') or die(mysqli_error($mysqli));
// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
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

if(isset($_POST['REGISTER'])){
    $class = $_POST['class'];
    $reg_no = $_POST['reg_no'];
    $capacity = $_POST['capacity'];
    $oname = $_POST['oname'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $contact = $_POST['contact'];
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    

    // $targetDir = "/uploads";
    // if(is_array($_FILES)) {
    //     if(is_uploaded_file($_FILES['image']['tmp_name'])) {
    //         if(move_uploaded_file($_FILES['image']['tmp_name'],"$targetDir/".$_FILES['image']['name'])) {
    //             echo "File uploaded successfully";
    //         }
    //     }
    // }


    $mysqli->query("INSERT INTO `vehicle`(`image`,`class`,`reg_no`,`capacity`,`oname`,`province`,`district`,`Contact`) VALUES('$image', '$class', '$reg_no', '$capacity', '$oname', '$province', '$district',  '$contact')") or die($mysqli->error);

    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: ../vehicle.php");
}




