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
    <title>Artist Directory</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
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
            <a href="index.php">Artist Directory</a>
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
            </nav>
        </div>
        <!-- Copwrite Text -->
        <div class="copywrite-text">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
        </div>
</div>
    <!-- ***** Main Menu Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="menu-area d-flex justify-content-between">
                        <!-- Logo Area  -->
                        <div class="logo-area">
                            <a href="search-music-talent.html">Artist Genres</a>
                            <!-- <p> Please select a Genre to view list of Artist </p> -->
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

    <!-- ***** Hero Area Start ***** -->
    <div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        
        <!-- Hero Content -->
        <div class="equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 justify-content-center">
                    <div class="col">
                        <div class="line"></div>
                        <h2> . </h2>
                        <p> . </p>
                        <!-- <a href="#" class="btn sonar-btn white-btn">contact me</a> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Elements Area Start ***** -->
    <section class="elements-area section-padding-100-0">
        <div class="container">

            <!-- ***** Buttons ***** -->
            <div class="row mb-100">
                <div class="col-12">
                    <div class="elements-title">
                        <!-- <h2>Music Genre</h2> -->
                    </div>
                    <!-- Button -->
                    <form method="post" action="queryArtist.php">
                        <!-- display validation errors collected from the server.php script -->
                        <?php include('artistresult.php'); ?>

                        <div class="sonar-buttons-area">
                            <button name="music_genre" type="submit" value="BLUES" class="btn sonar-btn m-2">BLUES</button>
                            <button name="music_genre" type="submit" value="CLASSICAL" class="btn sonar-btn m-2">CLASSICAL</button>
                            <button name="music_genre" type="submit" value="COUNTRY" class="btn sonar-btn m-2">COUNTRY</button>
                            <button name="music_genre" type="submit" value="HIP-HOP" class="btn sonar-btn m-2">HIP-HOP</button>
                        </div>
                    </form>

                </div>
            </div>


    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <!-- back end content -->
        <div class="backEnd-content">
            <!-- <img class="dots" src="img/core-img/dots.png" alt=""> -->
            <h2></h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <img class="dots float-left" src="img/core-img/dots.png" alt="">
                        <img class="dots float-right" src="img/core-img/dots.png" alt="">
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

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