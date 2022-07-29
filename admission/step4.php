<?php
@session_start();
error_reporting(1);
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

<?php 

if (isset($_SESSION['AUTH_SMATECH_APPLICANT_ID']) && ! empty($_SESSION['AUTH_SMATECH_APPLICANT_ID'])) {
  $auth_code_applicant_id = $_SESSION['AUTH_SMATECH_APPLICANT_ID'];
  $admission_no = $_SESSION['AUTH_CODE_ADMISSION_NO'];
  $student_data = $Osotech->get_student_details_byRegNo($admission_no);
}else{
  header("Location: ./step3");
  exit();
}

 ?>
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
                            <h1 class="page-title">Admission</h1>
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
                     

                     <div class="full-grid">
                  <form id="fourthStepForm" method="POST" enctype="multipart/form-data">
                             <div class="billing-fields">
                                 <div class="checkout-title">
                                   
                                    <h2 class="text-center">Admission Form (Previous School Info)</h2>
                                 </div>
                                 <div class="form-content-box">
                                     <div class="col-md-12 text-center" id="server-response"></div>
  <input type="hidden" name="action" value="submit_fourth_step_admission">
  <input type="hidden" name="bypass" value="<?php echo md5("oiza12345678");?>">
  <input type="hidden" name="admission_no" value="<?php echo ucwords($student_data->stdRegNo);?>">
  <input type="hidden" name="auth_code_applicant_id" value="<?php echo $auth_code_applicant_id;?>">
                                    
                                     <div class="row">
                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Registered Email</label>
                                                <input type="text" class="form-control" value="<?php echo $student_data->stdEmail;?>" readonly>
                                             </div>
                                         </div>
                                         <div class="col-md-4 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Father's Name (Surname)</label>
                                                 <input type="text" class="form-control" name="surname" value="<?php echo ucwords($student_data->stdUserName);?>" readonly>
                                             </div>
                                         </div>
                                          <div class="col-md-4 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Class Proposed</label>
                                                <input type="text" class="form-control" value="<?php echo ucwords($student_data->studentClass);?>" readonly>
                                             </div>
                                         </div>
                                         
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                <label>School Name</label>
<input type="text" class="form-control" name="prev_schoolname" placeholder="Name of your Previous school">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                            <label>Name of Director/Proprietress</label>
<input type="text" class="form-control" name="proprietress" placeholder="e.g Mr. Ayomide Hamad">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                <label>Previous School Phone </label>
<input type="text" class="form-control" name="prev_schl_phone" placeholder="Previous School Phone">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                            <label for="prev_schl_loca">SCHOOL LOCATION</label>
<select name="prev_schl_loca" class="custom-select form-control">
<option value="" selected>Choose...</option>
<option value="Urban">Urban</option>
<option value="Rural">Rural </option>
</select>
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label for="edu_offered">LEVEL OF EDUCATION OFFERED </label>
 <select name="edu_offered" id="edu_offered" class="custom-select form-control">
 <option value="" selected>Choose...</option>
 <option value="PRIMARY ONLY">PRIMARY ONLY</option>
 <option value="SECONDARY ONLY"> SECONDARY ONLY</option>
 <option value="PRIMARY &amp; SECONDARY">PRIMARY &amp; SECONDARY</option>
</select>
                                             </div>
                                         </div>

                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                            <label for="category">SCHOOL CATEGORY </label>
<select name="category" id="category" class="custom-select form-control">
 <option value="" selected>Choose...</option>
 <option value="PUBLIC">PUBLIC</option>
 <option value="PRIVATE">PRIVATE</option>
</select>
                                             </div>
                                         </div>

                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                           <label>YOUR PRESENT CLASS </label>
<input type="text" class="form-control" name="present_class" placeholder="Enter Your Present Class here">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                              <label>REASON FOR CHANGE OF SCHOOL </label>
<input type="text" name="reason_to" class="form-control" />
                                             </div>
                                         </div>

                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label for="report_sheet">LAST REPORT SHEET <span class="text-danger">(Scanned)</span> </label>
<input type="file" class="form-control-file form-control" id="report_sheet" name="report_sheet">
                                             </div>
                                         </div>
                                        
                                      </div>
                                 </div>
                             </div><!-- .billing-fields -->

                             <div class="payment-method ">
                                 <div class="bottom-area">
                                     <p class="mt-3"><input type="checkbox" class="checkbox__input"> Your personal data will be used to process your admission</p>
                                     <div style="float: left;"><a href="step3?applicant=<?php echo $_GET['applicant'];?>&page=3" class="btn-shop green-color" onclick="return confirm('Are you Sure you want to go Back to Previous page?');"> Previous Page</a></div>
                                     <button class="btn-shop orange-color float-right __loadingBtn__" type="submit">Continue</button>
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
      <?php //include_once ("Templates/Footer.php");?>
  </footer>
  <!-- Footer End -->
  <!-- Search Modal Start -->
    <?php include_once ("Templates/SearchBar.php") ?>
  <!-- Search Modal End -->
    <?php include_once ("Templates/FooterScript.php") ?>
    <!-- <script src="signature.js"></script> -->
    <script>
  
  $(document).ready(function(){
    const ADMISSION_FORM4_SUBMIT = $("#fourthStepForm");
    ADMISSION_FORM4_SUBMIT.on("submit", function(event){
      event.preventDefault();
      $.ajax({
    url:"../Inc/checkStudentResult",
    type:"POST",
    data: new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
    beforeSend(){
 $(".__loadingBtn__").html('<img src="../rolling_loader.svg" width="30"> Processing...').attr("disabled",true);
    },
    success:function(data){
      setTimeout(()=>{
         $(".__loadingBtn__").html('Continue').attr("disabled",false);
       // $("#video_form")[0].reset();
        $("#server-response").html(data);
        //alert(data);
      },1500);
    }

  });

    });

    setTimeout(()=>{
        $(".alert").alert('close').slideUp('slow');
      },3000);
  })
</script>
   
</body>
</html>