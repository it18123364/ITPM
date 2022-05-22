<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Login</title>
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

<body class="bg-gradient-primary" style="background-image: url('b3.jpg');">

<div class="container">

    <!-- Outer Row -->
    



            
                <div>
                    <!-- Nested Row within Card Body -->
                    <div>
                        
                            <div class="p-5" style="margin-top: 1rem; margin-left: 60rem; width: 35%">
                                <div class="text-center">
                                    <h1 style= "color:white; font-family: cursive">Welcome to SRI ONUS Admin Portal</h1>
                                </div>
                                <br>
                                <form class="user" action="./API/login_api.php" method="POST" id="login-form">
                                    <div class="form-group">
                                        <input type="text" name="uname" class="form-control form-control-user"
                                               id="your_name"
                                               placeholder="Your Username" style="font-weight:900" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="your_pass" placeholder="Password" style="font-weight:900" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" style="font-weight:900; color:white" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-button">
                                        <input type="submit" name="signin" id="signin"
                                               class="btn btn-primary btn-user btn-block" value="Log in"/>
                                    </div>
                                    <!-- <a href="./dashboard.php" type="submit" class="btn btn-primary btn-user btn-block" name="REGISTER">LOGIN </a> -->
                                    <hr>
                                </form>

                                <div class="text-center">
                                    <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                                </div>

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

</body>

</html>