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
  header("Location: ./");
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
                        <form id="secondStepForm">
                             <div class="billing-fields">
                                 <div class="checkout-title">
                                   
                                    <h2 class="text-center">Admission Form (STUDENT BIO-DATA)</h2>
                                 </div>
                                 <div class="form-content-box">
                                    <div class="col-md-12 text-center" id="server-response"></div>
  <input type="hidden" name="action" value="submit_second_step_admission">
  <input type="hidden" name="bypass" value="<?php echo md5("oiza123456");?>">
  <input type="hidden" name="admission_no" value="<?php echo strtoupper($student_data->stdRegNo);?>">
  <input type="hidden" name="auth_code_applicant_id" value="<?php echo $auth_code_applicant_id;?>">
                                    <div class="col-md-12 text-center" id="server-response"></div>
                                    
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
                                                 <label>First Name </label>
                                                <input type="text" class="form-control" name="first_name" placeholder="Chikka">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label>Middle Name </label>
                                            <input type="text" class="form-control" name="middle_name" placeholder=" Desmond">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label for="dateofbirth">Date of Birth </label>
                                                <input type="date" name="dateofbirth" class="form-control" min="2000-12-31" id="dateofbirth">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label for="gender">Gender</label>
                                                <select name="gender" class="custom-select form-control">
                                                <option value="" selected>Choose...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female </option>
                                                <option value="Other">Other </option>

                                                </select>
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label for="birth_cert">BIRTH CERTIFICATION</label>
                                                <select name="birth_cert" class="custom-select form-control">
                                                <option value="" selected>Choose...</option>
                                                <option value="Certificate">Certificate</option>
                                                <option value="Affidavit">Affidavit </option>
                                                <option value="None">None </option>
                                                </select>
                                             </div>
                                         </div>

                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label for="nationality">NATIONALITY</label>
                                                <select name="nationality" id="nationality" class="custom-select form-control">
                                                <option value="" selected>Choose...</option>
                                                <option value="Nigerian">Nigerian</option>
                                                <option value="Non Nigerian">None Nigerian </option>
                                                </select>
                                             </div>
                                         </div>

                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                <label for="state_origin">STATE OF ORIGIN</label>
                                            <select name="state_origin" id="state_origin" class="custom-select form-control">
                                            <option selected>Choose...</option>
                                            <?php echo $Osotech->get_states_of_origin_InDropDown();?>
                                            </select>
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                               <label for="localgvt">LGA OF ORIGIN</label>
                                            <select name="localgovt" id="localgvt" class="custom-select form-control" required>
                                            </select>
                                             </div>
                                         </div>

                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label for="hometown">Home Town</label>
                                            <input type="text" name="hometown" class="form-control" id="hometown" placeholder="Ibeju Lekki">
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                <label for="religion">RELIGION</label>
                                            <select name="religion" id="religion" class="custom-select form-control">
                                            <option value="" selected>Choose...</option>
                                            <option value="Christianity">Christianity</option>
                                            <option value="Islamic">Islamic </option>
                                            <option value="Other"> Other </option>
                                            </select>
                                             </div>
                                         </div>
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                <label for="home_address">Home Address </label>
                                            <textarea name="home_address" class="form-control" placeholder="Home Address"></textarea>
                                             </div>
                                         </div>
                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                             <div class="form-group">
                                                 <label for="challenges">CHALLENGES THAT IMPACT ABILITY</label>
                                            <select name="challenges" id="challenges" class="select2 form-control">
                                             <option value="" selected>Choose...</option>
                                             <option value="Visually Challenged">Visually Challenged</option>
                                             <option value="Albinism">Albinism</option>
                                             <option value="Learning Disabilities">Learning Disabilities</option>
                                             <option value="Intellectually Challenged">Intellectually Challenged</option>
                                             <option value="Auditory Challenged">Hearing/Auditory Challenged</option>
                                             <option value="Behavioural Disorder">Behavioural Disorder</option>
                                             <option value="Speech Challenged">Speech Challenged</option>
                                             <option value="Other">Other</option>
                                             <option value="None">None</option>
                                            </select>
                                             </div>
                                         </div>
                                      </div>
                                 </div>
                             </div><!-- .billing-fields -->

                             <div class="payment-method ">
                                 <div class="bottom-area">
                                     <p class="mt-3"><input type="checkbox" class="checkbox__input"> Your personal data will be used to process your admission</p>
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
    const ADMISSION_FORM2_SUBMIT = $("#secondStepForm");
    ADMISSION_FORM2_SUBMIT.on("submit", function(event){
      event.preventDefault();
      $(".__loadingBtn__").html('<img src="../rolling_loader.svg" width="30"> Processing...').attr("disabled",true);
      $.post("../Inc/checkStudentResult",ADMISSION_FORM2_SUBMIT.serialize(), function(result){
        setTimeout(()=>{
          $(".__loadingBtn__").html('Continue').attr("disabled",false);
          $("#server-response").html(result);
        },1000);
      })
    });

$('#state_origin').on('change', function() {
            let state = $('#state_origin').val();
            if (state != '') {
              let myaction ="fetch_local_govt";
                $.ajax({
                    url: "../Inc/checkStudentResult",
                    method: "POST",
                    data: {
                      action:myaction,
                        state: state
                    },
                    success: function(data) {
                        $("#localgvt").html(data);
                    }
                });
            } else {
                //do something
                $("#localgvt").html('<option value="" selected>Choose...</option>');
            }
        });
   
    setTimeout(()=>{
        $(".alert").alert('close').slideUp('slow');
      },3000);
  })
</script>
   
</body>
</html>