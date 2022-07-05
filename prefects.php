<?php
if (!file_exists("Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("Inc/Osotech.php");
?>
<!DOCTYPE html>
<html lang="en">
>
<head>
    <?php include_once ("Templates/MetaTag.php");?>
    <!-- meta tag -->
    <title> </title>
    <?php include ("Templates/HeaderScript.php");?>
	<style>
		.image-border{
			border-radius: 20px;
			border:5px solid #F4731C;
		}
	</style>
</head>
<body class="defult-home">

<!--Preloader area start here-->
<?php include_once ("Templates/Preloader.php");?>
<!--Preloader area End here-->

<!-- Main content Start -->
<div class="main-content">
    <!--Full width header Start-->
    <div class="full-width-header home8-style4 main-home">
        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <?php include_once ("Templates/Header.php");?>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">THE SCHOOL PREFECTS</h1>
                <ul>
                    <li>
                        <a class="active" href="./">HOME</a>
                    </li>
                    <li>PREFECTS</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="team-item">
                            <img class="image-border" src="assets/images/team/1.jpg" alt="">
                            <div class="content-part">
                                <h4 class="name"><a href="team-single.php">JOHN DOE</a></h4>
                                <span class="designation">HEAD PREFECT BOY</span>
	                            <h5 class="text-center text-white-50">2021-2022 Session</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="team-item">
                            <img class="image-border" src="assets/images/team/2.jpg" alt="">
                            <div class="content-part">
	                            <h4 class="name"><a href="team-single.php">HANNAH DOE</a></h4>
	                            <span class="designation">HEAD PREFECT GIRL</span>
	                            <h5 class="text-center text-white-50">2021-2022 Session</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="team-item">
                            <img class="image-border" src="assets/images/team/3.jpg" alt="">
                            <div class="content-part">
	                            <h4 class="name"><a href="team-single.php">COW DOE</a></h4>
	                            <span class="designation">HEAD SOCIAL BOY</span>
	                            <h5 class="text-center text-white-50">2021-2022 Session</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 md-mb-30">
                        <div class="team-item">
                            <img class="image-border" src="assets/images/team/1.jpg" alt="">
                            <div class="content-part">
	                            <h4 class="name"><a href="team-single.php">TAMI DOE</a></h4>
	                            <span class="designation">HEAD SOCIAL GIRL</span>
	                            <h5 class="text-center text-white-50">2021-2022 Session</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 xs-mb-30">
                        <div class="team-item">
                            <img class="image-border" src="assets/images/team/2.jpg" alt="">
                            <div class="content-part">
	                            <h4 class="name"><a href="team-single.php">JOSH DOE</a></h4>
	                            <span class="designation">HEAD CHAPEL BOY</span>
	                            <h5 class="text-center text-white-50">2021-2022 Session</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="team-item">
                            <img class="image-border" src="assets/images/team/3.jpg" alt="">
                            <div class="content-part">
	                            <h4 class="name"><a href="team-single.php">SMITH YAN</a></h4>
	                            <span class="designation">HEAD CHAPEL GIRL</span>
                               <h5 class="text-center text-white-50">2021-2022 Session</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section End -->

        <!-- Newsletter section start -->
        <?php include_once ("Templates/NewsletterForm.php");?>
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->
    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer home9-style main-home">
        <?php include_once ("Templates/Footer.php");?>
    </footer>
    <!-- Footer End -->
    <!-- Search Modal Start -->
    <?php include_once ("Templates/SearchBar.php") ?>
    <!-- Search Modal End -->
    <?php include_once ("Templates/FooterScript.php") ?>
</body>
</html>