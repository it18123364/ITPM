<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SRI ONUS - Admin Portal</title>
    <!-- Favicons -->
    <link href="./img/favicon.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div>
                <img src="./img/header_logo.png" style="height: 60px; width: 200px">
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

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
                    <a class="collapse-item" href="hotel.php">View List</a>
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
                    <a class="collapse-item" href="#">View List</a>
                    <a class="collapse-item" href="#">Generate Report</a>
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
                    <a class="collapse-item" href="guide.php">View Guides List</a>
                    <a class="collapse-item" href="guide_report.php">Generate Report</a>
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
                    <a class="collapse-item" href="#">View shops List</a>
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
                    <a class="collapse-item" href="user_report.php">Generate Report</a>
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
                    <a class="collapse-item" href="message_report.php">Generate Report</a>
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
            <nav class="navbar navbar-expand navbar-light bg-gray-400 topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

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

                    <!-- Nav Item - Messages -->

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-xl-inline font-weight-bolder text-gray-900">Welcome <?php echo $_SESSION['uname']; ?></span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="./website/index.php" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-eye fa-sm text-white-50"></i> View Web</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Hotels -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <?php
                                $mysqli = new mysqli('localhost', 'root', '', 'srionus');
                                $result = $mysqli->query("SELECT COUNT(id) AS count FROM user")->fetch_array();

                                ?>

                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-secondary font-weight-bold text-primary text-uppercase mb-1">
                                            Hotels
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($result['count']) ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-nurse fa-2x text-gray-900"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Vehicals -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'srionus');
                        $result = $mysqli->query("SELECT COUNT(id) AS count FROM user")->fetch_array();

                        ?>
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-secondary font-weight-bold text-success text-uppercase mb-1">
                                            Vehicals
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($result['count']) ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-900""></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Guides -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'srionus');
                        $result = $mysqli->query("SELECT COUNT(id) AS count FROM guides")->fetch_array();

                        ?>
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-secondary font-weight-bold text-info text-uppercase mb-1">
                                            Guides
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($result['count']) ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-900"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Equipment shops -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'srionus');
                        $result = $mysqli->query("SELECT COUNT(id) AS count FROM user ")->fetch_array();

                        ?>
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-secondary font-weight-bold text-warning text-uppercase mb-1">
                                            Equipment Shops
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($result['count']) ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-envelope-open-text fa-2x text-gray-900"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Messages -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'srionus');
                        $result = $mysqli->query("SELECT COUNT(id) AS count FROM contact")->fetch_array();

                        ?>
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-secondary font-weight-bold text-dark text-uppercase mb-1">
                                            Contact Us Messages
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($result['count']) ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-900"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Admin users -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'srionus');
                        $result = $mysqli->query("SELECT COUNT(uname) AS count FROM user")->fetch_array();

                        ?>
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-secondary font-weight-bold text-danger text-uppercase mb-1">
                                            Admin Users
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($result['count']) ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-shield fa-2x text-gray-900"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; WebOps Solutions 2021</span>
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
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
