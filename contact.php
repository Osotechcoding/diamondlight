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
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color padding">
                    <h1 class="page-title white-color">Contact Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="./">Home</a>
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
                                    <span class="des"><?php echo $Osotech->getConfigData()->school_address; ?> <br>
                                        <?php echo $Osotech->getConfigData()->school_state;?>,  <?php echo $Osotech->getConfigData()->country;?>.</span>
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
                                    <span class="des"><a href="mailto:<?php echo $Osotech->getConfigData()->school_email; ?>"><?php echo $Osotech->getConfigData()->school_email; ?></a> <br><a href="mailto:<?php echo $Osotech->getConfigData()->school_gmail; ?>"><?php echo $Osotech->getConfigData()->school_gmail; ?></a></span>
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
                                    <span class="des"><a href="tel:<?php echo $Osotech->getConfigData()->school_phone; ?>"><?php echo $Osotech->getConfigData()->school_phone; ?>, <?php echo $Osotech->getConfigData()->school_fax; ?></a></span>
                                </div>
                            </div>
                        </div>
            		</div>
            		<div class="row align-items-center">
            			<div class="col-lg-6 md-mb-30">
            				<!-- Map Section Start --> 
                            <div class="contact-map3">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4898578679804!2d3.186631315316646!3d6.585866624260978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9bbcd8c905e9%3A0xd32c17ff0bdae9db!2sGolden%20estate!5e0!3m2!1sen!2sng!4v1656944266069!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
            			</div>
            			<div class="col-lg-6 pl-60 md-pl-15">
			        		<div class="contact-comment-box">
			        			<div class="inner-part">
                                    <h2 class="title mb-mb-15">Get In Touch</h2>
                                    <p>Have some suggestions or just want to say hi? Our  support team are ready to help you 24/7.</p>
                                </div>
			                    <div id="form-messages"></div>
								<form id="contact-form" method="post" action="">
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