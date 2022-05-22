<?php

session_start();

?>
<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "srionus");
    $sql = "SELECT * FROM vehicle ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<tr>  
                           

                          <td>' . $row["id"] . '</td>
                          <td><img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"
                          height="100px" width="100px" class="img-thumbnail" /></td>
                          <td>' . $row["class"] . '</td>
                          <td>' . $row["reg_no"] . '</td>
                          <td>' . $row["capacity"] . '</td>
                          <td>' . $row["oname"] . '</td>
                          <td>' . $row["province"] . '</td>
                          <td>' . $row["district"] . '</td>
                          <td>' . $row["Contact"] . '</td>            
                     </tr>  
                          ';
    }
    return $output;
}

if (isset($_POST["generate_pdf"])) {
    require_once('tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Vehicle Report");
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('Times', '', 12);
    $obj_pdf->AddPage();
    $content = '';
    $content .= '
      <h2 align="center">Report of vehicles</h2>
      <br /> 
      <br />
      <table border="2" cellspacing="0" cellpadding="3">  
           <tr>  
                                 
                <th width="3%">id</th>
                <th width="10%">Image</th> 
                <th width="10%">Class</th>
                <th width="3%">Registration No</th>
                <th width="6%">Capacity</th>  
                <th width="8%">Owner Name</th>  
                <th width="7%">Province</th>  
                <th width="7%">District</th>  
                <th width="7%">Contact</th>            
           </tr>  
      
      ';
    $content .= fetch_data();
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf', 'I');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vehicle</title>
    <!-- Favicons -->
    <link href="./img/favicon.png" rel="icon">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div>
                <img src="./img/header_logo.png" style="height: 60px; width: 200px">
            </div>
            <!--                <div class="sidebar-brand-text mx-3">SRI ONUS</div>-->
        </a>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user-nurse"></i>
                <span>Hotels</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="care_giver_list.php">View List</a>
                    <a class="collapse-item" href="#">Generate Report</a>
                </div>
            </div>
        </li>


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="vehicle.php" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-user"></i>
                <span>Vehicles</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="vehicle.php">View vehicles List</a>
                    <a class="collapse-item" href="vehicle_report.php">Generate Report</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocation"
               aria-expanded="true"
               aria-controls="collapseLocation">
                <i class="fas fa-street-view"></i>
                <span>Guides</span>
            </a>
            <div id="collapseLocation" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="#">View  List</a>
                    <a class="collapse-item" href="#">Generate Report</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemessagea"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-comment"></i>
                <span>Equipment Shops</span>
            </a>
            <div id="collapsemessagea" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="messages.php">View shops List</a>
                    <a class="collapse-item" href="#">Generate Report</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
               aria-expanded="true"
               aria-controls="collapseLocation">
                <i class="fas fa-user-shield"></i>
                <span>Users</span>
            </a>
            <div id="collapseUsers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="user.php">User List</a>
                    <a class="collapse-item" href="#">Generate Report</a>
                </div>
            </div>
        </li>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemessage"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-comment"></i>
                <span>Messages</span>
            </a>
            <div id="collapsemessage" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="messages.php">View Message List</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <form class="form-inline">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </form>

                <!-- Topbar Search -->
                <!-- <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form> -->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome <?php echo $_SESSION['uname']; ?></span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Vehicle List</h1>
                <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                        href="https://datatables.net">official DataTables documentation</a>.</p> -->
                <hr>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Full Detailed Vehicle List</h6>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"
                                style="float: right; margin-top: -25px">
                            <i class="fa fa-plus"></i> REGISTER
                        </button>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">

                            <?php
                            $mysqli = new mysqli('localhost', 'root', '', 'srionus') or die (mysqli_error($mysqli));
                            $result = $mysqli->query("SELECT * FROM vehicle") or die($mysqli->error);
                            //pre_r($result);
                            ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>  
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Class</th>
                                    <th>Registration No</th>
                                    <th>Capacity</th>
                                    <th>Owner Name</th>
                                    <th>Province</th>
                                    <th>District</th>
                                    <th>Contact</th>
                                    <th>Edit</th>
                                    <!-- <th>Delete</th> -->
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Class</th>
                                    <th>Registration No</th>
                                    <th>Capacity</th>
                                    <th>Owner Name</th>
                                    <th>Province</th>
                                    <th>District</th>
                                    <th>Contact</th>
                                    <th>Edit</th>
                                    <!-- <th>Delete</th> -->
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    include './API/config.php';
                                    $sql1 = "SELECT * FROM vehicle";
                                    $res = $conn->query($sql1);
                                    if ($res->num_rows > 0) {
                                        while ($table = $res->fetch_assoc()) {
                                            echo '
                                    <tr>
                                        <td>' . $table["id"] . '</td>
                                        <td><img src="data:image/jpeg;base64,' . base64_encode($table['image']) . '"
                                                height="100px" width="100px" class="img-thumbnail" /></td>
                                        <td>' . $table["class"] . '</td>
                                        <td>' . $table["reg_no"] . '</td>
                                        <td>' . $table["capacity"] . '</td>
                                        <td>' . $table["oname"] . '</td>
                                        <td>' . $table["province"] . '</td>
                                        <td>' . $table["district"] . '</td>
                                        <td>' . $table["Contact"] . '</td>
                                        <td><a href="#" class="btn btn-warning btn-circle editbtn">
                                        <i class="fas fa-edit"></i>
                                    </a></td>

                                <td><a href="#" class="btn btn-info btn-circle viewbtn">
                                        <i class="fas fa-eye"></i>
                                    </a></td>
                                <td><a href="#" class="btn btn-danger btn-circle deletebtn">
                                        <i class="fas fa-trash"></i>
                                    </a></td>
                                    </tr>';
                                        }
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                        <?php
                        function pre_r($array)
                        {
                            echo '<pre>';
                            print_r($array);
                            echo '</pre>';
                        }

                        ?>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- End of Main Content -->


        <!-- Model Form of the add vehicles -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title text-center">Register Vehicle</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="register-empr-form" action="./API/vehicle_registration_api.php" method="POST" enctype="multipart/form-data">


                            <input type="hidden" name="id" value="<?php echo $id; ?>">


                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="image" style="color: #000000; font-weight: bolder">Image</label>
                                    <input type="file" class="form-control" id="image" style="color: #000000;"
                                           
                                           placeholder="Imahe" name="image"
                                           style="font-weight: lighter" required>
                                </div>
                            </div>
                            </br>

                            <div class="form-group row">

                                <div class="col-sm-6">
                                    <label for="class" style="color: #000000; font-weight: bolder">Class</label>
                                    <input type="text" class="form-control" id="class" 
                                           placeholder="Type Vehicle Class" name="class" style="font-weight: lighter" required>
                                </div>

                                <div class="col-sm-6">
                                    <label for="reg_no" style="color: #000000; font-weight: bolder">Registration Number</label>
                                    <input type="text" class="form-control" id="reg_no" 
                                           placeholder="Type Vehicle Registation Number" name="reg_no" style="font-weight: lighter" required>
                                </div>

                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="capacity" style="color: #000000; font-weight: bolder">Capacity</label>
                                    <input type="text" class="form-control " id="capacity"
                                          
                                           placeholder="Enter Vehicle Capacity" name="capacity"
                                           style="font-weight: lighter" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="oname" style="color: #000000; font-weight: bolder">Owner Name</label>
                                    <input type="text" class="form-control" id="oname" 
                                           placeholder="Type Your Owner Name" name="oname" style="font-weight: lighter"
                                           required>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                            <div class="col-sm-6">
                                    <label for="province" style="color: #000000; font-weight: bolder">Province</label>
                                    <input type="text" class="form-control " id="province"
                                          
                                           placeholder="Type Your Province" name="province" style="font-weight: lighter"
                                           required>
                                </div>

                                <div class="col-sm-6">
                                    <label for="district" style="color: #000000; font-weight: bolder">District</label>

                                    <input type="text" class="form-control " id="district"
                                          
                                           placeholder="Type Your District" name="district" style="font-weight: lighter"
                                           required>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="contact" style="color: #000000; font-weight: bolder">Contact
                                        Number</label>
                                    <input type="text" class="form-control" id="contact" 
                                           placeholder="Type Your Contact Number" name="contact"
                                           style="font-weight: lighter" required>
                                </div>
                            </div>
                        
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                </div>
                            </div>
                            </br>
                            

                            <button type="submit" onclick="registerEmp()" class="btn btn-primary" value="Upload" name="REGISTER"
                                    style="display: flex; text-align: center; margin: auto">Register Vehicle
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Edit Update Model -->

        <div id="editmodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Edit Vehicle Data</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <?php
                       include './API/config.php';
                                                    if (isset($_POST["add"])) {
                                                        $id = $_POST["id"];
                                                        $sql1 = "SELECT * FROM vehicle WHERE id='$id'";
                                                        $res = $conn->query($sql1);
                                                        if ($res->num_rows > 0) {
                                                            if ($table = $res->fetch_assoc()) {
                                                                echo '<form action="../API/vehicle" method="POST" enctype="multipart/form-data">
                                             
                                                                             <div class="form-group row ">

                                <div class="col-sm-10" id="divIndexNumber">
                                    <input type="hidden" value="' .$id. '" id="index_number" name="id">
                                </div>

                                <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                  <img src="data:image/jpeg;base64,' . base64_encode($table["image"]) . '"
                                                height="100px" width="100px" class="col-sm-4  img-thumbnail" />
                                <div class="col-sm-6" id="divImage">
                                    <input type="file"  class="form-control-file" id="image" name="image">
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="class" class="col-sm-2 col-form-label">Vehicle class</label>
                                <div class="col-sm-10" id="divName">
                                    <input type="text" class="form-control" required
                                   value="' . $table["class"] . '"     placeholder="Enter Vehicle class" id="class" name="class">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="reg_no" class="col-sm-2 col-form-label">Registration number</label>
                                <div class="col-sm-10" id="divName">
                                    <input type="text" class="form-control" required placeholder="Registration number"
                                       value="' . $table["reg_no"] . '"  id="reg_no" name="reg_no">

                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="capacity" class="col-sm-2 col-form-label">Capacity</label>
                            <div class="col-sm-10" id="divName">
                                <input type="text" class="form-control" required placeholder="Enter Capacity"
                                   value="' . $table["capacity"] . '"  id="capacity" name="capacity">

                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="oname" class="col-sm-2 col-form-label">Owner name</label>
                                <div class="col-sm-10" id="divAddress">
                                    <input type="text" required class="form-control" placeholder="Enter Owner name"
                                        id="oname" value="' . $table["oname"] . '" name="oname">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="province" class="col-sm-2 col-form-label">Province</label>
                                <div class="col-sm-7" id="divPhone">
                                    <input maxlength="10" type="text" required class="form-control " placeholder="Enter Province"
                                        id="province" value="' . $table["province"] . '" name="province">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="district" class="col-sm-2 col-form-label">District</label>
                                <div class="col-sm-7" id="divEmail">
                                    <input type="text" class="form-control" required placeholder="Enter District"
                                        id="district"  value="' . $table["district"] . '" name="district">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact" class="col-sm-2 col-form-label">Contact number</label>
                                <div class="col-sm-7" id="divContact">
                                    <input type="text" class="form-control" required placeholder="Enter Contact number"
                                        id="contact" value="' . $table["Contact"] . '" name="contact">
                                </div>
                            </div>

                                                                                                                      
                                                                ';
                                                            }
                                                        }
                                                    } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- View vehicle Model -->

        <div id="viewemodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title text-center">View Vehicle Details</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                                                    <?php
                                                    include './API/config.php';
                                                    if (isset($_POST["add"])) {
                                                        $id = $_POST["id"];
                                                        $sql1 = "SELECT * FROM vehicle WHERE id='$id'";
                                                        $res = $conn->query($sql1);
                                                        if ($res->num_rows > 0) {
                                                            if ($table = $res->fetch_assoc()) {
                                                                echo '<form action="./API/vehicle" method="POST" enctype="multipart/form-data">
                                             
                                                                             <div class="form-group row ">

                                <div class="col-sm-10" id="divIndexNumber">
                                    <input type="hidden" value="' .$id. '" id="index_number" name="id">
                                </div>

                                <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                  <img src="data:image/jpeg;base64,' . base64_encode($table["image"]) . '"
                                                height="100px" width="100px" class="col-sm-4  img-thumbnail" />
                                <div class="col-sm-6" id="divImage">
                                    <input type="file"  class="form-control-file" id="image" name="image">
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="class" class="col-sm-2 col-form-label">Vehicle class</label>
                                <div class="col-sm-10" id="divName">
                                    <input type="text" class="form-control" required
                                   value="' . $table["class"] . '"     placeholder="Enter Vehicle class" id="class" name="class">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="reg_no" class="col-sm-2 col-form-label">Registration number</label>
                                <div class="col-sm-10" id="divName">
                                    <input type="text" class="form-control" required placeholder="Registration number"
                                       value="' . $table["reg_no"] . '"  id="reg_no" name="reg_no">

                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="capacity" class="col-sm-2 col-form-label">Capacity</label>
                            <div class="col-sm-10" id="divName">
                                <input type="text" class="form-control" required placeholder="Enter Capacity"
                                   value="' . $table["capacity"] . '"  id="capacity" name="capacity">

                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="oname" class="col-sm-2 col-form-label">Owner name</label>
                                <div class="col-sm-10" id="divAddress">
                                    <input type="text" required class="form-control" placeholder="Enter Owner name"
                                        id="oname" value="' . $table["oname"] . '" name="oname">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="province" class="col-sm-2 col-form-label">Province</label>
                                <div class="col-sm-7" id="divPhone">
                                    <input maxlength="10" type="text" required class="form-control " placeholder="Enter Province"
                                        id="province" value="' . $table["province"] . '" name="province">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="district" class="col-sm-2 col-form-label">District</label>
                                <div class="col-sm-7" id="divEmail">
                                    <input type="text" class="form-control" required placeholder="Enter District"
                                        id="district"  value="' . $table["district"] . '" name="district">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact" class="col-sm-2 col-form-label">Contact number</label>
                                <div class="col-sm-7" id="divContact">
                                    <input type="text" class="form-control" required placeholder="Enter Contact number"
                                        id="contact" value="' . $table["contact"] . '" name="contact">
                                </div>
                            </div>

                                                                                                                      
                                                                ';
                                                            }
                                                        }
                                                    } ?>

                                                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Delete vehicle Model -->

        <div id="deletemodal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Delete Vehicle Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="./API/vehicle_delete_api.php" method="POST" enctype="multipart/form-data">

                        <div class="modal-body">
                            <input type="hidden" name="delete_id" id="delete_id">
                            <h4>Do You Want to Delete This Data</h4>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger" name="delete">Confirm & Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>


        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="index.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<script src="js/employee_register.js"></script>


<!-- Delete JS -->

<script>
    $(document).ready(function () {
        $('.deletebtn').on('click', function () {

            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);


        });
    });
</script>


<!-- Update JS -->

<script>
    $(document).ready(function () {
        $('.editbtn').on('click', function () {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#id1').val(data[0]);
            $('#fullName1').val(data[1]);
            $('#age1').val(data[2]);
            $('#gender1').val(data[3]);
            $('#birthday1').val(data[4]);
            $('#email1').val(data[5]);
            $('#address1').val(data[6]);
            $('#province1').val(data[7]);
            $('#district1').val(data[8]);
            $('#nic1').val(data[9]);
            $('#contact1').val(data[10]);
        });
    });
</script>

<!-- View JS -->

<script>
    $(document).ready(function () {
        $('.viewbtn').on('click', function () {

            $('#viewemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#id2').val(data[0]);
            $('#fullName2').val(data[1]);
            $('#age2').val(data[2]);
            $('#gender2').val(data[3]);
            $('#birthday2').val(data[4]);
            $('#email2').val(data[5]);
            $('#address2').val(data[6]);
            $('#province2').val(data[7]);
            $('#district2').val(data[8]);
            $('#nic2').val(data[9]);
            $('#contact2').val(data[10]);

        });
    });
</script>

</body>

</html>
