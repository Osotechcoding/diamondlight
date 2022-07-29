<?php
@ob_start();
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
	<title>Admission :: <?php echo ($Osotech->getConfigData()->school_name);?></title>
    <?php include ("Templates/HeaderScript.php");?>
    <link rel="stylesheet" href="signature.css">
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
                            <h1 class="page-title"><span class="fa fa-graduation-cap"></span> ONLINE APPLICATION STEP ONE</h1>
                            <ul>
                                <li>
                                    <a class="active" href="../">Home</a>
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
                                         <span><i class="fa fa-window-maximize"></i> Do you want to continue your unfinished registration?</span>
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
                                         <p class="text-info">Enter your Registration email and your surname as password to continue with your admission.</p>
                                         <div class="row">
                                             <div class="col-md-4 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                
                                                <input type="text" name="coupon_code" placeholder="E-mail"  class="form-control form-control-lg">
                                                 </div>
                                             </div>
                                              
                                                 <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                     <input type="text" name="password" placeholder="Surname as Passowrd" class="form-control form-control-lg">
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
                         <form id="form">
                             <div class="billing-fields">
                                 <div class="checkout-title">
                                    <h4>OR</h4>
                                     <h3 class="text-info">Start your admission afresh using the form below</h3>
                                 </div>
                                 <div class="form-content-box">
                                    <div class="col-md-12 text-center" id="server-response"></div>
                                      <input type="hidden" name="action" value="submit_first_step_admission">
                                      <input type="hidden" name="bypass" value="<?php echo md5("oiza12345");?>">
                                     <div class="row">
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Scratch Card PIN *</label>
                                                 <input autocomplete="off" name="card_pin" class="form-control-mod" type="password" placeholder="Scratch Card Pin">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Scratch Card Serial *</label>
                                                 <input autocomplete="off" name="card_serial" class="form-control-mod" type="text" placeholder="Scratch Card Serial">
                                             </div>
                                         </div>
                                         
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Student Gmail(<small class="text-danger">Create Gmail Account <a href="https://accounts.google.com/SignUp" target="_blank"> Here</a> </small>)</label>
                                                 <input autocomplete="off" name="student_email" id="studentEmail" class="form-control-mod margin-bottom" type="text" placeholder="yourname@smapp.com" >
                                                 <span id="email-error"></span>
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Surname (username) *</label>
                                                 <input autocomplete="off" name="username" class="form-control-mod" type="text">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Active Phone *</label>
                                                 <input autocomplete="off" id="student_phone" name="student_phone" class="form-control-mod margin-bottom" type="number" placeholder="08131374443">
                                                 <span id="phone-error"></span>
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Enter Your Proposed Class *</label>
                                                 <input autocomplete="off" name="student_class" class="form-control-mod" type="text" placeholder="e.g JSS1">
                                             </div>
                                         </div>
 <div class="col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
 <label>Please prove tha you are not a robot *</label>
  <div id="captcha_load">
</div>
</div>
     </div>
                                      
                                      </div>
                                 </div>
                             </div><!-- .billing-fields -->

                             <div class="payment-method ">
                                 <div class="bottom-area">
                                     <p class="mt-3"><input type="checkbox" class="checkbox__input"> Your personal data will be used to process your admission</p>
                                     <button class="btn-shop orange-color float-right __loadingBtn__" type="submit">Submit</button>
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
    <!-- <script src="signature.js"></script> -->
    <script>
  
  $(document).ready(function(){
    const ADMISSION_FORM_SUBMIT = $("#form");
    ADMISSION_FORM_SUBMIT.on("submit", function(event){
      event.preventDefault();
      $(".__loadingBtn__").html('<img src="../rolling_loader.svg" width="30"> Processing...').attr("disabled",true);
      $.post("../Inc/checkStudentResult",ADMISSION_FORM_SUBMIT.serialize(), function(result){
        setTimeout(()=>{
          $(".__loadingBtn__").html('Continue').attr("disabled",false);
          $("#server-response").html(result);
        },1500);
      })
    });

    //check duplicate student email addres
    $("#student_phone").on("keyup", function(){
      let studentPhone = $(this).val();
      if (studentPhone!="") {
      let check_action = "check_student_phone";
      //send to server for checking
      $.post("../Inc/checkStudentResult",{action:check_action,Phone:studentPhone},function(data){
        $("#phone-error").html(data);
        console.log(data);
      })
      }else{
        $("#phone-error").html("");
      }
      
    })

    //check duplicate student email addres
    $("#studentEmail").on("keyup", function(){
      let studentEmail = $(this).val();
      if (studentEmail !="") {
      let check_action = "check_student_email";
      //send to server for checking
      $.post("../Inc/checkStudentResult",{action:check_action,Email:studentEmail},function(res){
        $("#email-error").html(res);
      })
      }else{
        $("#email-error").html("");
      }
      
    })
    setTimeout(()=>{
        $(".alert").alert('close').slideUp('slow');
      },5000);
  })
</script>
<?php
function loadCaptcha(){
   echo'<script> $("#captcha_load").load("./Templates/osotech_captcha.php");</script>';
}
loadCaptcha();
?>
</body>
</html>