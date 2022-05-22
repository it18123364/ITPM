<?php

session_start();

?>
<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "srionus");
    $sql = "SELECT * FROM hotels ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '';
    }
    return $output;
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

    <title>Hotels</title>
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
                    <a class="collapse-item" href="hotel.php">View Hotels List</a>
                    <a class="collapse-item" href="hotel_report.php">Generate Report</a>
                </div>
            </div>
        </li>


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-user"></i>
                <span>Vehicles</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="./seeker_list.php">View List</a>
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
                    <a class="collapse-item" href="#">View Guides List</a>
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
                <h1 class="h3 mb-2 text-gray-800">Hotels List</h1>
                <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                        href="https://datatables.net">official DataTables documentation</a>.</p> -->
                <hr>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Full Detailed Hotels List</h6>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"
                                style="float: right; margin-top: -25px">
                            <i class="fa fa-plus"></i> REGISTER
                        </button>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">

                            <?php
                            $mysqli = new mysqli('localhost', 'root', '', 'srionus') or die (mysqli_error($mysqli));
                            $result = $mysqli->query("SELECT * FROM hotels") or die($mysqli->error);
                            //pre_r($result);
                            ?>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hotel Name</th>
                                    <th>No. of Rooms</th>
                                    <th>Hotel Type</th>
                                    <th>Register Date</th>
                                    <th>E-mail</th>
                                    <th>Address</th>
                                    <th>Province</th>
                                    <th>District</th>
                                    <th>Loyalty Number</th>
                                    <th>Contact</th>
                                    <th>Edit</th>
                                    <!-- <th>Delete</th> -->
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tfoot>

                                <tr> 
                                </tr> 
                                </tfoot>
                                <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()):?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['hotel_name']; ?></td>
                                        <td><?php echo $row['rooms']; ?></td>
                                        <td><?php echo $row['hotel_type']; ?></td>
                                        <td><?php echo $row['register_date']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['province']; ?></td>
                                        <td><?php echo $row['district']; ?></td>
                                        <td><?php echo $row['loyalty_number']; ?></td>
                                        <td><?php echo $row['contact']; ?></td>

                                        <td><a href="#" class="btn btn-warning btn-circle editbtn">
                                                <i class="fas fa-edit"></i>
                                            </a></td>

                                        <td><a href="#" class="btn btn-info btn-circle viewbtn">
                                                <i class="fas fa-eye"></i>
                                            </a></td>
                                        <td><a href="#" class="btn btn-danger btn-circle deletebtn">
                                                <i class="fas fa-trash"></i>
                                            </a></td>


                                    </tr>
                                <?php endwhile; ?>

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


        <!-- Model Form of the add Hotels -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title text-center">Register Hotel</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="./API/hotel_registration_api.php" method="POST" enctype="multipart/form-data">


                            <input type="hidden" name="id" value="<?php echo $id; ?>">


                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="hotel_name" style="color: #000000; font-weight: bolder">Hotel Name</label>
                                    <input type="text" class="form-control" id="hotel_name" style="color: #000000;"
                                           
                                           placeholder="Type Hotel Name" name="hotel_name"
                                           style="font-weight: lighter" required>
                                </div>
                            </div>
                            </br>

                            <div class="form-group row">

                                <div class="col-sm-6">
                                    <label for="rooms" style="color: #000000; font-weight: bolder"  >No. of Rooms</label>
                                    <input type="number" class="form-control" id="rooms" 
                                           placeholder="Type No. of Rooms" name="rooms" style="font-weight: lighter" required min=0>
                                </div>
                                <div class="col-sm-6">
                                    <label for="hotel_type" style="color: #000000; font-weight: bolder">Hotel Type</label>

                                    <select class="form-control " id="hotel_type"
                                            placeholder="hotel_type" name="hotel_type" style="font-weight: lighter" required>
                                        <option value="Select Type">Select Type</option>
                                        <option value="Full-Service Hotel">Full-Service Hotel</option>
                                        <option value="Limited-Service Hotel">Limited-Service Hotel</option>
                                    </select>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="register_date" style="color: #000000; font-weight: bolder">Register Date</label>
                                    <input type="date" class="form-control " id="register_date"
                                          
                                           placeholder="Select Your Full Name" name="register_date"
                                           style="font-weight: lighter" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" style="color: #000000; font-weight: bolder">E-mail ID</label>
                                    <input type="email" class="form-control" id="email"  
                                           placeholder="Type E-mail Address" name="email" style="font-weight: lighter"
                                           required>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="address" style="color: #000000; font-weight: bolder">Address</label>
                                    <input type="text" class="form-control " id="address"
                                          
                                           placeholder="Type Address" name="address" style="font-weight: lighter"
                                           required>
                                </div>

                                <div class="col-sm-4">
                                    <label for="province" style="color: #000000; font-weight: bolder">Province</label>

                                    <select class="form-control " id="province" 
                                            placeholder="Select Your Province" name="province"
                                            style="font-weight: lighter" required>
                                        <option value="Province">Select Province</option>
                                        <option value="Nothern">Nothern</option>
                                        <option value="North Western">North Western</option>
                                        <option value="Western">Western</option>
                                        <option value="North Central">North Central</option>
                                        <option value="Central">Central</option>
                                        <option value="Sabaragamuwa">Sabaragamuwa</option>
                                        <option value="Eastern">Eastern</option>
                                        <option value="Uva">Uva</option>
                                        <option value="Southern">Southern</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="district" style="color: #000000; font-weight: bolder">District</label>

                                    <select class="form-control " id="district" 
                                            placeholder="Select Your District" name="district"
                                            style="font-weight: lighter" required>
                                        <option value="District">Select District</option>
                                        <option value="Jaffna">Jaffna</option>
                                        <option value="Kilinochchi">Kilinochchi</option>
                                        <option value="Mannar">Mannar</option>
                                        <option value="Mullaitivu">Mullaitivu</option>
                                        <option value="Vavuniya">Vavuniya</option>
                                        <option value="Puttalam">Puttalam</option>
                                        <option value="Kurunegala">Kurunegala</option>
                                        <option value="Gampaha">Gampaha</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Kalutara">Kalutara</option>
                                        <option value="Anuradhapura">Anuradhapura</option>
                                        <option value="Polonnaruwa">Polonnaruwa</option>
                                        <option value="Matale">Matale</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                                        <option value="Kegalle">Kegalle</option>
                                        <option value="Ratnapura">Ratnapura</option>
                                        <option value="Trincomalee">Trincomalee</option>
                                        <option value="Batticaloa">Batticaloa</option>
                                        <option value="Ampara">Ampara</option>
                                        <option value="Badulla">Badulla</option>
                                        <option value="Monaragala">Monaragala</option>
                                        <option value="Hambantota">Hambantota</option>
                                        <option value="Matara">Matara</option>
                                        <option value="Galle">Galle</option>
                                    </select>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="loyalty_number" style="color: #000000; font-weight: bolder">Loyalty Number</label>
                                    <input type="text" class="form-control " id="loyalty_number" 
                                           placeholder="Type Loyalty Number" name="loyalty_number" style="font-weight: lighter" 
                                           required min=0 >
                                </div>
                                <div class="col-sm-6">
                                    <label for="contact" style="color: #000000; font-weight: bolder">Contact
                                        Number </label>
                                    <input type="tel" class="form-control" id="contact" 
                                           placeholder="Type Contact Number" name="contact"
                                           style="font-weight: lighter"  pattern="+94[7-9]{2}-[0-9]{3}-[0-9]{4}" value="+94" required>
                                           
                                </div>
                            </div>
                        
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="hotel_photo" style="color: #000000; font-weight: bolder">Hotel
                                        Photo</label>
                                    <input type="file" class="form-control " id="hotel_photo"
                                           
                                           name="hotel_photo" style="font-weight: lighter" required>
                                </div>
                            </div>
                            </br>
                            

                            <button type="submit" class="btn btn-primary" value="Upload" name="REGISTER"
                                    style="display: flex; text-align: center; margin: auto">Register Hotel
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Update Hotel Model -->

        <div id="editmodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Edit Hotel Data</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="./API/hotel_update_api.php" method="POST" enctype="multipart/form-data">


                            <input type="hidden" name="id" id="id1" value="<?php echo $id; ?>">

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="hotel_name" style="color: #000000; font-weight: bolder">Hotel Name</label>
                                    <input type="text" class="form-control " id="hotel_name1"
                                           value="<?php echo $hotel_name; ?>
                                           placeholder="Type Hotel Name" name="hotel_name" required
                                           style="font-weight: lighter">
                                </div>
                            </div>
                            </br>

                            <div class="form-group row">

                                <div class="col-sm-6">
                                    <label for="rooms" style="color: #000000; font-weight: bolder">No. of Rooms</label>
                                    <input type="number" class="form-control" id="rooms1" value="<?php echo $rooms; ?>"
                                           placeholder="Type No. of Rooms" name="rooms" style="font-weight: lighter" min=0 required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="hotel_type" style="color: #000000; font-weight: bolder">Hotel Type</label>

                                    <select class="form-control " id="hotel_type1" value="<?php echo $hotel_type; ?>"
                                            placeholder="hotel_type" name="hotel_type" style="font-weight: lighter" required>
                                        <option value="Select Type">Select Type</option>
                                        <option value="Full-Service Hotel">Full-Service Hotel</option>
                                        <option value="Limited-Service Hotel">Limited-Service Hotel</option>
                                    </select>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="register_date" style="color: #000000; font-weight: bolder">Register Date</label>
                                    <input type="date" class="form-control " id="register_date1"
                                           value="<?php echo $register_date; ?>"
                                           placeholder="Select Your Full Name" name="register_date"
                                           style="font-weight: lighter" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" style="color: #000000; font-weight: bolder">E-mail ID</label>
                                    <input type="email" class="form-control" id="email1" value="<?php echo $email; ?>"
                                           placeholder="Type E-mail Address" name="email" style="font-weight: lighter" 
                                           required>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="address" style="color: #000000; font-weight: bolder">Address</label>
                                    <input type="text" class="form-control " id="address1"
                                           value="<?php echo $address; ?>"
                                           placeholder="Type Address" name="address" style="font-weight: lighter"
                                           required>
                                </div>

                                <div class="col-sm-4">
                                    <label for="province" style="color: #000000; font-weight: bolder">Province</label>

                                    <select class="form-control " id="province1" value="<?php echo $province; ?>"
                                            placeholder="Select Your Province" name="province"
                                            style="font-weight: lighter" required>
                                        <option value="Province">Select Province</option>
                                        <option value="Nothern">Nothern</option>
                                        <option value="North Western">North Western</option>
                                        <option value="Western">Western</option>
                                        <option value="North Central">North Central</option>
                                        <option value="Central">Central</option>
                                        <option value="Sabaragamuwa">Sabaragamuwa</option>
                                        <option value="Eastern">Eastern</option>
                                        <option value="Uva">Uva</option>
                                        <option value="Southern">Southern</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="district" style="color: #000000; font-weight: bolder">District</label>

                                    <select class="form-control " id="district1" value="<?php echo $district; ?>"
                                            placeholder="Select Your District" name="district"
                                            style="font-weight: lighter" required>
                                        <option value="District">Select District</option>
                                        <option value="Jaffna">Jaffna</option>
                                        <option value="Kilinochchi">Kilinochchi</option>
                                        <option value="Mannar">Mannar</option>
                                        <option value="Mullaitivu">Mullaitivu</option>
                                        <option value="Vavuniya">Vavuniya</option>
                                        <option value="Puttalam">Puttalam</option>
                                        <option value="Kurunegala">Kurunegala</option>
                                        <option value="Gampaha">Gampaha</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Kalutara">Kalutara</option>
                                        <option value="Anuradhapura">Anuradhapura</option>
                                        <option value="Polonnaruwa">Polonnaruwa</option>
                                        <option value="Matale">Matale</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                                        <option value="Kegalle">Kegalle</option>
                                        <option value="Ratnapura">Ratnapura</option>
                                        <option value="Trincomalee">Trincomalee</option>
                                        <option value="Batticaloa">Batticaloa</option>
                                        <option value="Ampara">Ampara</option>
                                        <option value="Badulla">Badulla</option>
                                        <option value="Monaragala">Monaragala</option>
                                        <option value="Hambantota">Hambantota</option>
                                        <option value="Matara">Matara</option>
                                        <option value="Galle">Galle</option>
                                    </select>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="loyalty_number" style="color: #000000; font-weight: bolder">Loyalty Number</label>
                                    <input type="text" class="form-control " id="loyalty_number1" value="<?php echo $loyalty_number; ?>"
                                           placeholder="Type Loyalty Number" name="loyalty_number" style="font-weight: lighter" min=0
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="contact" style="color: #000000; font-weight: bolder">Contact
                                        Number</label>
                                    <input type="text" class="form-control" id="contact1"
                                           value="<?php echo $contact; ?>"
                                           placeholder="Type Contact Number" name="contact"
                                           style="font-weight: lighter" pattern="+94[7-9]{2}-[0-9]{3}-[0-9]{4}" value="+94" required>
                                </div>
                            </div>
                            </br>

                            <button type="submit" class="btn btn-primary" value="Upload" name="UPDATE"
                                    style="display: flex; text-align: center; margin: auto">Update Hotel
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- View Hotel Model -->

        <div id="viewemodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title text-center">View Hotel Details</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="./API/guide_approved.php" method="POST" enctype="multipart/form-data">


                            <input type="hidden" name="id" id="id2">
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="hotel_name" style="color: #000000; font-weight: bolder">Hotel Name</label>
                                    <input type="text" class="form-control " id="hotel_name2"
                                           value="<?php echo $hotel_name; ?>"
                                           placeholder="Type Your Full Name" name="hotel_name"
                                           style="font-weight: lighter">
                                </div>
                                <div class="col-sm-4">
                                    <label for="rooms" style="color: #000000; font-weight: bolder">No. of Rooms</label>
                                    <input type="number" class="form-control" id="rooms2" value="<?php echo $rooms; ?>"
                                           placeholder="Type Your Age" name="rooms" style="font-weight: lighter">
                                </div>
                                <div class="col-sm-4">
                                    <label for="hotel_type" style="color: #000000; font-weight: bolder">Hotel Type</label>

                                    <select class="form-control " id="hotel_type2" value="<?php echo $hotel_type; ?>"
                                            placeholder="hotel_type" name="hotel_type" style="font-weight: lighter">
                                        <option value="Select Type">Select Type</option>
                                        <option value="Full-Service Hotel">Full-Service Hotel</option>
                                        <option value="Limited-Service Hotel">Limited-Service Hotel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="register_date" style="color: #000000; font-weight: bolder">Register Date</label>
                                    <input type="date" class="form-control " id="register_date2"
                                           value="<?php echo $register_date; ?>"
                                           placeholder="Select Your Full Name" name="register_date"
                                           style="font-weight: lighter">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" style="color: #000000; font-weight: bolder">E-mail</label>
                                    <input type="email" class="form-control" id="email2" value="<?php echo $email; ?>"
                                           placeholder="Type Your Email" name="email" style="font-weight: lighter">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="address" style="color: #000000; font-weight: bolder">Address</label>
                                    <input type="text" class="form-control " id="address2"
                                           value="<?php echo $address; ?>"
                                           placeholder="Type Your Address" name="address" style="font-weight: lighter">
                                </div>
                                <div class="col-sm-4">
                                    <label for="province" style="color: #000000; font-weight: bolder">Province</label>
                                    <input type="text" class="form-control" id="province2"
                                           value="<?php echo $province; ?>"
                                           placeholder="Type Your Province" name="province"
                                           style="font-weight: lighter">
                                </div>
                                <div class="col-sm-4">
                                    <label for="district" style="color: #000000; font-weight: bolder">District</label>
                                    <input type="text" class="form-control" id="district2"
                                           value="<?php echo $district; ?>"
                                           placeholder="Type Your District" name="district"
                                           style="font-weight: lighter">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="loyalty_number" style="color: #000000; font-weight: bolder">Loyalty Number</label>
                                    <input type="text" class="form-control " id="loyalty_number2" value="<?php echo $loyalty_number; ?>"
                                           placeholder="Type Your NIC Number" name="loyalty_number" style="font-weight: lighter">
                                </div>
                                <div class="col-sm-6">
                                    <label for="contact" style="color: #000000; font-weight: bolder">Contact
                                        Number</label>
                                    <input type="text" class="form-control" id="contact2"
                                           value="<?php echo $contact; ?>"
                                           placeholder="Type Your Contact Number" name="contact"
                                           style="font-weight: lighter">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Delete Hotel Model -->

        <div id="deletemodal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Delete Hotel Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="./API/hotel_delete_api.php" method="POST" enctype="multipart/form-data">

                        <div class="modal-body">
                            <input type="hidden" name="delete_id" id="delete_id">
                            <h4>Do You Want to Delete This Data?</h4>
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
            $('#hotel_name1').val(data[1]);
            $('#rooms1').val(data[2]);
            $('#hotel_type1').val(data[3]);
            $('#register_date1').val(data[4]);
            $('#email1').val(data[5]);
            $('#address1').val(data[6]);
            $('#province1').val(data[7]);
            $('#district1').val(data[8]);
            $('#loyalty_number1').val(data[9]);
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
            $('#hotel_name2').val(data[1]);
            $('#rooms2').val(data[2]);
            $('#hotel_type2').val(data[3]);
            $('#register_date2').val(data[4]);
            $('#email2').val(data[5]);
            $('#address2').val(data[6]);
            $('#province2').val(data[7]);
            $('#district2').val(data[8]);
            $('#loyalty_number2').val(data[9]);
            $('#contact2').val(data[10]);

        });
    });
</script>

</body>

</html>
