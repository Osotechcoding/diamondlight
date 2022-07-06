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
                    <div class="breadcrumbs-text white-color">
                            <h1 class="page-title">WORK WITH US</h1>
                            <ul>
                                <li>
                                    <a class="active" href="./">Home</a>
                                </li>
                                <li>SUBMIT YOUR CV</li>
                            </ul>
                    </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Checkout section start -->
            <div id="rs-checkout" class="rs-checkout orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                 <div class="container">
                    <div class="text-center">
                        <h3>From time to time, job openings and vacancies available will be posted here, and you are welcome to submit applications that suit your career profile.</h3>

<h2>What to do when jobs are posted here:</h2>

<p>Review advertised job descriptions and details specified for eligibility of positions listed.
Send in your CV (with applicants detailed information) and cover letter using the form provided on this page.
What happens next?
<br>
CVs would be reviewed and qualified applicants invited to write an aptitude test.
Successful candidates would be invited to begin the interview process.
The last phase of the interview process is a meeting with the Chairman of the School.
Current Vacancies</p>
<ul>
    <li>Teacher of Mathematics.</li>
    <li>Teacher of English.</li>
</ul>


                    </div>
                    
                     <div class="full-grid">
                         <form>
                             <div class="billing-fields">
                                 <div class="checkout-title">
                                  
                                     <h3 class="text-info">Fill the Form below to submit your CV</h3>
                                 </div>
                                 <div class="form-content-box">
                                     <div class="row">
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>First Name *</label>
                                                 <input id="fname" name="fname" class="form-control-mod" type="text" required="">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Last Name *</label>
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
                                                 <label>Active Phone *</label>
                                                 <input id="hnumber" name="hnumber" class="form-control-mod margin-bottom" type="text" placeholder="0813137-4443" required="">
                                             </div>
                                         </div>
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Position Applied For ( e.g Teacher of English) *</label>
                                                 <input id="city" name="student_class" class="form-control-mod" type="text" placeholder="e.g JSS1">
                                             </div>
                                         </div>

                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Your Cover Letter *</label>
                                               <textarea name="coverLetter" id="" cols="30" rows="10" placeholder="Write your Cover Letter here" class="form-control"></textarea>
                                             </div>
                                         </div>
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Submit your CV in doc, docx or pdf format and must not be more than 2MB in size. *</label>
                                              <input type="file" name="cv" id="" class="form-control-file">
                                             </div>
                                         </div>
                                      
                                      </div>
                                 </div>
                             </div><!-- .billing-fields -->

                             <div class="payment-method ">
                                 <div class="bottom-area">
                                     <p class="mt-15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                     <button class="btn-shop orange-color" type="submit">Continue to payment</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
            </div>
            <!-- Checkout section end -->
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