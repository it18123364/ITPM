<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'srionus');


$id = 0;
$update = false;
$uname = '';
$email = '';
$password = '';
if (isset($_POST['delete']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM contact WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted Successfully"); </script>';
        header("location: ../messages.php");
    }
    else
    {
        echo '<script> alert("Data not Deleted"); </script>';
    }


}


?>