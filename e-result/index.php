<?php
ob_start();
if (!file_exists("../Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("../Inc/Osotech.php");
?>
<?php if ($Osotech->checkAdmissionPortalStatus() !== true): ?>
   <?php header("Location: ../");
   exit();?>
<?php endif ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once ("Templates/MetaTag.php");?>
	<!-- meta tag -->
	<title>E-Result Portal :: <?php echo ($Osotech->getConfigData()->school_name);?></title>
    <?php include ("Templates/HeaderScript.php");?>
    <style>
  ul li.emp{
    list-style: numbering;
    font-weight: 300;
    font-size: 1.3rem;
  }

  .blinking{
    animation:blinkingText 3.5s infinite;
}
@keyframes blinkingText{
    0%{     color: #f00;    }
    49%{    color: #f00; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #2CA67A;    }
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
                            <h1 class="page-title"><?php echo strtoupper("Student E-result Portal") ?></h1>
                            <ul>
                                <li>
                                    <a class="active" href="../">Home</a>
                                </li>
                                <li>Check Your Result Online</li>
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
                                         <span style="font-size: 20px;"><i class="fa fa-window-maximize"></i> <button class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;color: red;"> Click here</button> to read the Instruction on how to check your online result?</span>
                                         
                                     </div>
                                 </div>
                                 
                                 <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                     <div class="card-body">
      <div class="col-md-12 mb-4">
   <div class="section-tittle">
<h2 class="text-danger blinking"><span class="blinking">Public Notice!</span> </h2>
<h5 class="blinking"><span>2021/2022 Academic Promotion Report Sheet is Now Out.</span>
</h5>
<h4> You can now check your result. Scratch Cards are available for purchase. <a href="javascript:void(0);" title="Call Admin on 08131374443">the School Premises</a></h4>
<h2 class="text-center">How to Check your <a href="#" style="color:red;"> Result?</a></h2>
<!-- You can now check your result online. -->
<p>To check your result, Please, follow the instructions below:</p>
<ul style="font-weight: bold;" class="text-danger">
  <em>
  <li class="emp">Carefully scratch off the covered area of your scratch card to unveil your secret PIN Number</li>
  <li class="emp">Enter Your Admission Number in the space provided</li>
  <li class="emp">Choose Examination Result Class from the list</li>
  <li class="emp">elect Result Session from the list</li>
  <li class="emp">Choose your Examination Term (1st,2nd or 3rd)</li>
  <li class="emp">Enter the PIN Number in your scratch card correctly</li>
  <li class="emp">Enter your scratch card SERIAL Number</li>
  <li class="emp">Finaly, Click check result Button and wait for your result to display.</li>
  </em>
</ul>
<div class="text-center">
      <img src="cardb.jpg" alt="scratch-card" width="500">
    </div>
</div>
  </div>
    </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="full-grid">
                         <form id="student_result_checker_form">
  <div class="col-md-12 text-center" id="response"></div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" name="student_reg_number" class="form-control" placeholder="Admission No">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<select name="result_class" id="" class="form-control">
  <option value="" selected>Choose Class</option>
  <?php echo $Osotech->get_classroom_InDropDown_list();?>
</select>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<select name="result_session" id="" class="form-control">
  <option value="" selected>Choose Session</option>
 <?php echo $Osotech->get_all_session_lists();?>
</select>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<select name="result_term" id="" class="form-control">
  <option value="" selected>Choose Term</option>
  <option value="1st Term">1st Term</option>
  <option value="2nd Term">2nd Term</option>
  <option value="3rd Term">3rd Term</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="password" autocomplete="off" id="password2" name="cardPin_" class="form-control" placeholder="Enter Scratch Pin">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" autocomplete="off" id="password3" name="cardSerial_" class="form-control" placeholder="Enter Pin Serial">
</div>
</div>
</div>
<input type="hidden" name="action" value="check_Student_Result">
<button type="submit" class="btn btn-primary btn-lg btn-block __loadingBtn__" style="border-radius: 20px; float: right;">Check Result</button>
<div class="clearfix"></div>
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
    <script src="signature.js"></script>
</body>
</html>