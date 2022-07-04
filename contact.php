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
                    <img src="assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color padding">
                    <h1 class="page-title white-color">Contact Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		<div class="row rs-contact-box mb-90 md-mb-50">
        				<div class="col-lg-4 col-md-12-4 lg-pl-0 sm-mb-30 md-mb-30">
        					<div class="address-item">
        						<div class="icon-part">
        							<img src="assets/images/contact/icon/1.png" alt="">
        						</div>
        						<div class="address-text">
                                    <span class="label">Address</span>
                                    <span class="des">228-5 Main Street, Georgia, USA</span>
                                </div>
        					</div>
        				</div>
                        <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                            <div class="address-item">
                                <div class="icon-part">
                                    <img src="assets/images/contact/icon/2.png" alt="">
                                </div>
                                <div class="address-text">
                                    <span class="label">Email Address</span>
                                    <span class="des"><a href="mailto:info@rstheme.com">info@rstheme.com</a></span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30">
                            <div class="address-item">
                                <div class="icon-part">
                                    <img src="assets/images/contact/icon/3.png" alt="">
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone Number</span>
                                    <span class="des"><a href="tel%2b0885898745.html">(+088)589-8745</a></span>
                                </div>
                            </div>
                        </div>
            		</div>
            		<div class="row align-items-center">
            			<div class="col-lg-6 md-mb-30">
            				<!-- Map Section Start --> 
                            <div class="contact-map3">
                                <iframe src="https://maps.google.com/maps?q=Fort%20Miley&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                            </div>
            			</div>
            			<div class="col-lg-6 pl-60 md-pl-15">
			        		<div class="contact-comment-box">
			        			<div class="inner-part">
                                    <h2 class="title mb-mb-15">Get In Touch</h2>
                                    <p>Have some suggestions or just want to say hi? Our  support team are ready to help you 24/7.</p>
                                </div>
			                    <div id="form-messages"></div>
								<form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/educavo/mailer.php">
									<fieldset>
										<div class="row">
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                            </div>
                                         
                                            <div class="col-lg-12 mb-50">
                                                <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                            </div>
										</div>
										<div class="form-group mb-0">
											<input class="btn-send" type="submit" value="Submit Now">
										</div>										   
									</fieldset>
								</form>
			        		</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- Contact Section End -->

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