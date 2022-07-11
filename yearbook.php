<?php
if (!file_exists("Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("Inc/Osotech.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
	<title> </title>
     <?php include ("Templates/MetaTag.php");?>
    <?php include ("Templates/HeaderScript.php");?>
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
                    <img src="assets/images/breadcrumbs/4.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">YEAR BOOK</h1>
                    <ul>
                        <li>
                            <a class="active" href="./">HOME</a>
                        </li>
                        <li>YEAR BOOK</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Events Section Start -->
            <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row">
                        <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <a class="image-popup" href="assets/images/gallery/1.jpg"><img src="assets/images/gallery/1.jpg" alt=""></a>
                                </div>
                                <div class="title">
                                    2022 INTER-HOUSE COMPETITION
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <a class="image-popup" href="assets/images/gallery/2.jpg"><img src="assets/images/gallery/2.jpg" alt=""></a>
                                </div>
                                <div class="title">
                                    2022 DINNER NIGHT PARTY
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <a class="image-popup" href="assets/images/gallery/3.jpg"><img src="assets/images/gallery/3.jpg" alt=""></a>
                                </div>
                                <div class="title">
                                    2021-2022 END OF THE YEAR PARTY
                                </div>
                            </div>
                        </div>  
                      
                     
                   </div>
                </div> 
            </div>
            <!-- Events Section End -->

            
 <!-- Newsletter section start -->
            <?php include_once ("Templates/NewsletterForm.php");?>
            <!-- Newsletter section end -->
        </div> 
        <!-- Main content End -->
<!-- Modal -->

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