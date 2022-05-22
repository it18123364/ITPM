<?php

//session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'srionus');
// $mysqli = new mysqli('localhost', 'root', 'root', 'srionus') or die(mysqli_error($mysqli));

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

if (isset($_POST['delete']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM vehicle WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted Successfully"); </script>';
        header("location: ../vehicle.php");
    }
    else
    {
        echo '<script> alert("Data not Deleted"); </script>';
    }


    // $mysqli->query("DELETE from employee WHERE id=$id") or die($mysqli->error());

    // $_SESSION['message'] = "Record has been deleted!";
    // $_SESSION['msg_type'] = "danger";

    // header("location: ../care_giver_list.php");    
}


?>