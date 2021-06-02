<?php

session_start();
include('component/db.php');
include('component/login_out.php')

?>


<!doctype html>
<html lang="en">

<head>
    <!--=================== Required meta tags ==================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--=================== Fonts =============================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,500,600,700" rel="stylesheet">

    <!--=================== CSS =================================-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style.css">

    <!--=================== jQuery file ==========================-->
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <title>Хом|Як</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <div class="header-area absoulate-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="">
                          <!--<i class="fa fa-home"></i>-->
                           <img src="assets/img/favicon-logo.png" alt="">
                            <h4>Хом <span>Як</span></h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    
                </div>

            </div>
        </div>
        <div class="main-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu">
                            <?php 
						include ("component/menu.php");
						?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-area">
        <?php include('admin/slider.php');?>
    </div>
    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include('component/controller.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                
                </div>

                <p class="copy-right">Сделано в 2021</p>
            </div>
        </div>
    </footer>




    <!--=================== Optional JavaScript =========================-->
    <!--========= jQuery first, then Popper.js, then Bootstrap JS =======-->

    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
