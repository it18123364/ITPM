<?php
session_start();
include 'config.php';
if (isset($_POST["submit"])) {
    $select="SELECT * FROM vehicle ORDER BY id DESC LIMIT 1";
    $id = $conn->query($select);
    $row = mysqli_fetch_array($id);
    $fid = $row[0]+1;
    $photo = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $class = $_POST["class"];
    $reg_no = $_POST["reg_no"];
    $capacity = $_POST["capacity"];
    $oname = $_POST["oname"];
    $province = $_POST["province"];
    $district = $_POST["district"];
    $contact = $_POST["contact"];


    

    $sql = "INSERT INTO vehicle(`id`, `image`, `class`, `reg_no`, `capacity`, `oname`, `province`, `district`, `contact`)
                        VALUES('$fid','$photo','$class','$reg_no','$capacity','$oname','$province','$district','$contact')";
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION["success"] =  "<div class='alert alert-success'>
            <strong>Success!</strong> Vehical Added!.
        </div>";
        header("Location:../views/admin/vehicle");
    } else {
        $_SESSION["err"] = "<div class='alert alert-danger'>
  <strong>Server Busy!</strong> Please Try Agian Later !
</div>";
        header("Location:../views/admin/vehicle");
    }
}

if (isset($_POST["delete"])) {
    $id = $_POST["id"];
    $sql = "DELETE FROM vehicle WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION["success"] =  "<div class='alert alert-success'>
            <strong>Success!</strong> Vehicle Deleted!.
        </div>";
        header("Location:../views/admin/vehicle");
    } else {
        $_SESSION["err"] = "<div class='alert alert-danger'>
  <strong>Server Busy!</strong> Please Try Agian Later !
</div>";
        header("Location:../views/admin/vehicle");
    }
}



if (isset($_POST["add"])) {
    $id = $_POST["id"];
    $photo = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $class = $_POST["class"];
    $reg_no = $_POST["reg_no"];
    $capacity = $_POST["capacity"];
    $oname = $_POST["oname"];
    $province = $_POST["province"];
    $district = $_POST["district"];
    $contact = $_POST["contact"];

if (!empty($photo)) {
    $photo = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $sql = "
    UPDATE `vehicle`
    SET `photo`='$photo',
    `class`='$class',
    `reg_no`='$reg_no',
    `capacity`='$capacity',
    `oname`='$oname',
    `province`='$province',
    `district`='$district',
    `contact`='$contact' WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION["success"] =  "<div class='alert alert-success'>
            <strong>Success!</strong> Vehicle Updated!.
        </div>";
        header("Location:../views/admin/vehicle");
    } else {
       // echo "Error updating record: " . $conn->error;
       $_SESSION["err"] = "<div class='alert alert-danger'>
  <strong>Server Busy!</strong> Please Try Agian Later !
</div>";
        header("Location:../views/admin/vehicle"); 
    }

    }


    if (empty($photo)) {
        $sql = "
    UPDATE `vehicle`
    SET     `class`='$class',
    `reg_no`='$reg_no',
    `capacity`='$capacity',
    `oname`='$oname',
    `province`='$province',
    `district`='$district',
    `contact`='$contact'
     WHERE id='$id'";
        $result = $conn->query($sql);
        if ($result) {
            $_SESSION["success"] =  "<div class='alert alert-success'>
            <strong>Success!</strong> Vehicle Updated!.
        </div>";
            header("Location:../views/admin/vehicle");
        } else {
            //echo "Error updating record: " . $conn->error;
           $_SESSION["err"] = "<div class='alert alert-danger'>
  <strong>Server Busy!</strong> Please Try Agian Later..!
</div>"; 
            header("Location:../views/admin/vehicle"); 
        }
    }



}
