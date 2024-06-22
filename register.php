<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 13:08:38 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Vetra | E-Commerce HTML Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png"/>

    <!-- Themify icons -->
    <link rel="stylesheet" href="dist/icons/themify-icons/themify-icons.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="auth">



    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="ltf-block-logo d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
                                </div>
                                  <?php 
                                  if(isset($_SESSION["error"])){
                                  ?>
                                  <div class="alert alert-danger" role="alert">
                                     <?php echo $_SESSION["error"];?>
                                   </div
                                  <?php }?>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Create Account</h1>
                                    <p class="text-muted">You can create a free account now</p>
                                </div>
                                <form action="register-info.php" method="post" class="mb-5">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Enter fullname" autofocus
                                               required name = "name">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Enter email"
                                               required name = email>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Enter password"
                                               required name = "pass">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Re-enter password"
                                               required name = "repass">
                                    </div>
                                    <div class="text-center text-lg-start">
                                        <input type="submit" value="Sign Up" class="btn btn-primary" name = "register">
                                    </div>
                                </form>
                                <div class="social-links justify-content-center">
                                    <a href="#">
                                        <i class="ti-google bg-google"></i> Sign in with Google
                                    </a>
                                    <a href="#">
                                        <i class="ti-facebook bg-facebook"></i> Sign in with Facebook
                                    </a>
                                </div>
                                <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                    Don't have an account? <a href="#">Sign In</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">
                            <img width="120" src="assets/images/logo.png" alt="logo">
                        </div>
                        <div>
                            <h3 class="fw-bold">Welcome to eprmie!</h3>
                            <p class="lead my-5">Do you already have an account?</p>
                            <a href="login.php" class="btn btn-primary">Sign In</a>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Bundle scripts -->
<script src="../../libs/bundle.js"></script>

<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 13:08:38 GMT -->
</html>
