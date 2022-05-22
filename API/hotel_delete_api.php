<?php

//session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'srionus');
// $mysqli = new mysqli('localhost', 'root', 'root', 'srionus') or die(mysqli_error($mysqli));

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
if (isset($_POST['delete']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM hotels WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted Successfully"); </script>';
        header("location: ../hotel.php");
    }
    else
    {
        echo '<script> alert("Data not Deleted"); </script>';
    }


       
}


?>