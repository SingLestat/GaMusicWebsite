<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Login Page</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- StyleCSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="sonar-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Main Menu Area Start ***** -->
    <div class="mainMenu d-flex align-items-center justify-content-between">
        <!-- Close Icon -->
        <div class="closeIcon">
            <i class="ti-close" aria-hidden="true"></i>
        </div>
        <!-- Logo Area -->
        <div class="logo-area">
            <a href="index.php">Login Page</a>
        </div>
        <!-- Nav -->
        <div class="sonarNav">
            <nav>
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search-music-talent.html">Music Talent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search-business.html">Music Business</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="portfolio.html">Search Venues</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Sign In</a>
                    </li>
                </ul>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </nav>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- ***** Main Menu Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="menu-area d-flex justify-content-between">
                        <!-- Logo Area  -->
                        <div class="logo-area">
                            <a href="index.php">Georgia Music Directory</a>
                        </div>

                        <div class="menu-content-area d-flex align-items-center">
                            <!-- Header Social Area -->
                            <div class="header-social-area d-flex align-items-center">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Icon -->
                            <span class="navbar-toggler-icon" id="menuIcon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- User Profile information -->
    <div class="card text-center">
        <div class="card-body text-dark">

            <div class="card-profile-image mx-auto d-block" style="max-width: 18rem;">
                <a href="#">
                    <img src="img/icons/user-profile.png" class="rounded-circle">
                </a>
            </div>
            <br>
            <h5 class="card-title">
                        <?php if(isset($_SESSION["fname"])): ?>
                            <h1>Hello <strong><?php echo $_SESSION['fname'] ?> </strong></h1>
                        <?php endif; ?>
            </h5>
            <!-- not working -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php if(isset($_SESSION['success'])): ?>
                                <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?> 
                        <?php endif; ?>
                    </h5>
                </div>

                <!-- <div class="card border-dark text-center"> -->
                    <div class="card-header">
                        <ul class="nav nav-pills nav-dark card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active btn-dark" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-dark" href="#">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                
                <div class="card-body">
                </div>
            </div>

            <a href="index.php" class="btn btn-dark">Sign out</a>
        </div>
    </div>   
    

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>