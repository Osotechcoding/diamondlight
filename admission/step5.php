<?php
@session_start();
error_reporting(1);
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

<?php 
if (isset($_SESSION['AUTH_SMATECH_APPLICANT_ID']) && ! empty($_SESSION['AUTH_SMATECH_APPLICANT_ID'])) {
  $auth_code_applicant_id = $_SESSION['AUTH_SMATECH_APPLICANT_ID'];
  $admission_no = $_SESSION['AUTH_CODE_ADMISSION_NO'];
  $student_data = $Osotech->get_student_details_byRegNo($admission_no);
}else{
  header("Location: ./step4");
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
             <form id="fifthStepForm">
                             <div class="billing-fields">
                                 <div class="checkout-title">
                                   
                                <h2 class="text-center"> Admission Form (STUDENT MEDICAL HISTORY)</h2>
                                 </div>
                                 <div class="form-content-box">
                                     <div class="col-md-12 text-center" id="server-response"></div>
  <input type="hidden" name="action" value="submit_fifth_step_admission">
  <input type="hidden" name="bypass" value="<?php echo md5("oiza123456789");?>">
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
                                         <div class="row">
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                <label>Personal Hospital </label>
<input type="text" class="form-control" name="hospital_name" placeholder="Lifeline Hospital">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                            <label>Owner's Name (Doctor)</label>
<input type="text" class="form-control" name="doctor_name" placeholder="Dr. Hamad Bello">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                               <label>Hospital Phone </label>
<input type="number" name="phone" class="form-control" placeholder="080********">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                            <label for="member_since">Personal Hospital Since </label>
<input type="date" class="form-control" name="member_since">
                                             </div>
                                         </div>
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                        <label>Hospital Address </label>
<textarea name="address" class="form-control" placeholder="Hospital Address"></textarea>
                                             </div>
                                         </div>
                                     </div>
                                      <h3 class="text-center">STUDENT HEALTH INFO</h3>
                                     <div class="row">
                                       
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="blood_group">Blood Group</label>
                                <select name="blood_group" class="custom-select form-control">
                                <option selected>Choose...</option>
                                <option value="A">A</option>
                                <option value="B">B </option>
                                <option value="AB">AB </option>
                                <option value="O">O+ </option>
                                </select>
                                             </div>
                                         </div>

                        <div class="col-md-6">
                         <div class="form-group">
                        <label for="genotype">Genotype</label>
                        <select name="genotype" class="custom-select form-control">
                        <option selected>Choose...</option>
                        <option value="AA">AA</option>
                        <option value="AS">AS </option>
                        <option value="AC">AC </option>
                        <option value="SS">SS </option>
                        </select>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                              <label for="illness">FREQUENT ILLNESS</label>
                        <input type="text" class="form-control" name="illness" placeholder="Cough">
                             </div>
                         </div>

                                    <div class="col-md-6">
                                    <div class="form-group">
                                <label for="hospitalized">Have you Been Hospitalized?</label>
                        <select name="hospitalized" id="hospitalized" class="form-control">
                         <option value="">Choose...</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                        </select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                               <label for="surgical_operation">Any Surgical Operation?</label>
                        <select name="surgical_operation" id="surgical_operation" class="select2 form-control">
                         <option value="">Choose...</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                         <option value="I Don Not know">I don't Know</option>
                        </select>
                                </div>
                                </div>
                                     </div>
                                      </div>
                                 </div>
                             </div><!-- .billing-fields -->

                             <div class="payment-method ">
                                 <div class="bottom-area">
                                     <p class="mt-3"><input type="checkbox" class="checkbox__input"> Your personal data will be used to process your admission</p>
                                     <div style="float: left;"><a href="step4?applicant=<?php echo $_GET['applicant'];?>&page=4" class="btn-shop green-color" onclick="return confirm('Are you Sure you want to go Back to Previous page?');">Previous Page</a></div>
                                     <button class="btn-shop orange-color float-right __loadingBtn__" type="submit">Continue</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
            </div>
           
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
    const ADMISSION_FORM5_SUBMIT = $("#fifthStepForm");
    ADMISSION_FORM5_SUBMIT.on("submit", function(event){
      event.preventDefault();
      $(".__loadingBtn__").html('<img src="../rolling_loader.svg" width="30"> Processing...').attr("disabled",true);
      $.post("../Inc/checkStudentResult",ADMISSION_FORM5_SUBMIT.serialize(), function(result){
        setTimeout(()=>{
          $(".__loadingBtn__").html('Continue').attr("disabled",false);
          $("#server-response").html(result);
        },1000);
      })
    });
setTimeout(()=>{
        $(".alert").alert('close').slideUp('slow');
      },3000);
  })
</script>
   
</body>
</html>