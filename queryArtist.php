<?php
    // PHP Data Objects(PDO) Sample Code:
    try {
        $conn = new PDO("sqlsrv:server = tcp:website-db-server.database.windows.net,1433; Database = Website-DB", "localadmin", "P@ssword!");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "localadmin", "pwd" => "P@ssword!", "Database" => "Website-DB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:website-db-server.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Music Talent Result</title>

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
            <a href="index.php">Georgia Music Directory</a>
        </div>
        <!-- Nav -->
        <div class="sonarNav wow" data-wow-delay="1s">
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
                            <!-- <a href="index.php">Georgia Music Directory</a> -->
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

<p> </p>

<div class="container">
    <br>
    <br>
    <h1>ARTIST INFORMATION</h1>
    <br>
    <div class="backend-content">
        <table class="table table-hover ">
            <thead class="thead-dark">
                <th>ARTIST NAME</th>
                <th>EMAIL</th>
                <th>INSTAGRAM</th>
                <th>FACEBOOK</th>
                <th>TWITTER</th>
                <th>WEBSITE</th>
            </thead>
                <tbody>
                    <tr>
                            <?php
                            $music_category = $_POST['music_genre'];
                            $sql = "SELECT * FROM [Artist] WHERE [MUSIC_GENRE] = '$music_category'";
                            $stmt = sqlsrv_query( $conn, $sql);
                            if( $stmt === false ) {
                                die( print_r( sqlsrv_errors(), true));
                            }
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                echo "<tr><td>{$row['ARTIST_NAME']}</td><td>{$row['EMAIL']}</td><td>{$row['INTAGRAM']}</td><td>{$row['FACEBOOK']}</td><td>{$row['TWITTER']}</td><td>{$row['WEBSITE']}</td></tr>";
                            }
                            sqlsrv_free_stmt( $stmt);
                            ?>
                    </tr>
                </tbody>
        </table>
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