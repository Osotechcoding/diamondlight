<?php
if (!file_exists("../Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("../Inc/Osotech.php");
?>
<!DOCTYPE html>
<html lang="en">

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
        <?php //include_once ("Templates/Header.php");?>
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
                            <img src="../assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                    </div>
                    <div class="breadcrumbs-text white-color">
                            <h1 class="page-title">Admission</h1>
                            <ul>
                                <li>
                                    <a class="active" href="./">Home</a>
                                </li>
                                <li>Start Your Admission</li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Checkout section start -->
            <div id="rs-checkout" class="rs-checkout orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                 <div class="container">
                     <div class="coupon-toggle">
                         <div id="accordion" class="accordion">
                             <div class="card">
                                 <div class="card-header" id="headingOne">
                                     <div class="card-title">
                                         <span><i class="fa fa-window-maximize"></i> Do you want to continue your admission?</span>
                                         <button class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Click here</button>
                                     </div>
                                 </div>
                                 <!-- <div class="coupon-code-input">
                                             <input type="text" name="coupon_code" placeholder="E-mail" required="">  
                                         </div>
                                          <div class="coupon-code-input">
                                            <input type="text" name="coupon_code" placeholder="Password" required="">
                                         </div> -->
                                 <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                     <div class="card-body">
                                         <p class="text-info">Enter the email you admission email and default password to continue your admission.</p>
                                         <div class="row">
                                             <div class="col-md-4 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                
                                                      <input type="text" name="coupon_code" placeholder="E-mail" required="" class="form-control">
                                                 </div>
                                             </div>
                                              
                                                 <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                     <input type="text" name="coupon_code" placeholder="Password" required="" class="form-control">
                                                 </div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="form-group">
                                                      <button class="btn-shop blue-color" type="submit">Continue Registration</button>
                                       
                                                 </div>
                                             </div>
                                         </div>
                                        
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="full-grid">
                         <form>
                             <div class="billing-fields">
                                 <div class="checkout-title">
                                    <h4>OR</h4>
                                     <h3 class="text-info">Start your admission afresh using the form below</h3>
                                 </div>
                                 <div class="form-content-box">
                                     <div class="row">
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Scratch Card PIN *</label>
                                                 <input id="fname" name="fname" class="form-control-mod" type="text" required="">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Scratch Card Serial *</label>
                                                 <input id="lname" name="lname" class="form-control-mod" type="text" required="">
                                             </div>
                                         </div>
                                         
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Email Address *</label>
                                                 <input id="hnumber" name="hnumber" class="form-control-mod margin-bottom" type="text" placeholder="yourname@smapp.com" >
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Surname (username) *</label>
                                                 <input id="city" name="city" class="form-control-mod" type="text">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Active Phone *</label>
                                                 <input id="hnumber" name="hnumber" class="form-control-mod margin-bottom" type="text" placeholder="08131374443" required="">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Enter Your Proposed Class *</label>
                                                 <input id="city" name="student_class" class="form-control-mod" type="text" placeholder="e.g JSS1">
                                             </div>
                                         </div>
                                      
                                      </div>
                                 </div>
                             </div><!-- .billing-fields -->

                             <div class="payment-method ">
                                 <div class="bottom-area">
                                     <p class="mt-15"><input type="checkbox" class="checkbox__input"> Your personal data will be used to process your admission, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                     <button class="btn-shop orange-color" type="submit">Continue</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
            </div>
            <!-- Checkout section end -->
	        <!-- Newsletter section start -->
            <?php //include_once ("Templates/NewsletterForm.php");?>
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