<!DOCTYPE html>
<html lang="en">
>
<head>
    <?php include_once ("Templates/MetaTag.php");?>
	<!-- meta tag -->
	<title> </title>
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
                    <h1 class="page-title">Gallery</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Educavo</a>
                        </li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Events Section Start -->
            <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row">
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/images/gallery/1.jpg"><img src="assets/images/gallery/1.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/images/gallery/2.jpg"><img src="assets/images/gallery/2.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/3.jpg"><img src="assets/images/gallery/3.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/4.jpg"><img src="assets/images/gallery/4.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/5.jpg"><img src="assets/images/gallery/5.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/6.jpg"><img src="assets/images/gallery/6.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/7.jpg"><img src="assets/images/gallery/7.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/8.jpg"><img src="assets/images/gallery/8.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/9.jpg"><img src="assets/images/gallery/9.jpg" alt="Image"></a>
                            </div>
                       </div>
                       <div class="col-lg-4 md-mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/10.jpg"><img src="assets/images/gallery/10.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 sm-mb-30 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/11.jpg"><img src="assets/images/gallery/11.jpg" alt=""></a>
                            </div>
                       </div> 
                       <div class="col-lg-4 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/images/gallery/12.jpg"><img src="assets/images/gallery/12.jpg" alt=""></a>
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