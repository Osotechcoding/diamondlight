<?php 
require_once "helpers/helper.php";
 ?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
<head>
    <?php include "../template/MetaTag.php";?>
    <title><?php echo $SmappDetails->school_name ?> :: Result Comment Zone</title>
   <!-- include template/HeaderLink.php -->
   <?php include "../template/HeaderLink.php";?>
  <!-- END: Head-->
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
    <!-- BEGIN: Header-->
    <?php include "template/HeaderNav.php"; ?>
    <!-- include headernav.php -->
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    <?php include "template/Sidebar.php";?>
    <!-- include Sidebar.php -->
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0"><?php echo __OSO_APP_NAME__ ?> PORTAL</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="./"><i class="bx bx-home-alt"></i></a>
                  </li>
                 <li class="breadcrumb-item"><a href="javascript:void(0);"><?php echo strtoupper($_SESSION['ADMIN_SES_TYPE']) ?></a>
                  </li>
                  <li class="breadcrumb-item active">Current Page Title
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
<div class="row">
             <div class="col-12">
    <h3 class="bd-lead text-primary text-bold"><span class="fa fa-line-chart fa-2x"></span> Page Info Goes here </h3>
  </div>
    </div>
    <!-- content goes here -->
        <div class="card">
          <div class="card-header">
            <h3>Upload Cognitive Domain</h3>
             <?php include_once 'Links/results_btn.php'; ?>
          </div>

          <div class="card-body">
             <!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
         <button type="button" class="btn btn-danger btn-md badge-pill" data-toggle="modal" data-target="#csv_Modal"><span class="fa fa-file fa-1x"></span> UPLOAD BY CSV</button>
        </div>
        <div class="card-body">
          <form class="form form-vertical">
            <div class="form-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="class_name"> Class</label>
                    <select name="class_name" id="class_name" class="select2 form-control">
                      <option value="">--Select--</option>
                      <option value="">JSS1</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="result_term">Result Term</label>
                    <select name="result_term" id="result_term" class="select2 form-control">
                      <option value="">--Select--</option>
                      <option value="1">1st Term</option>
                      <option value="2">2nd Term</option>
                      <option value="3">3rd Term</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="school_session">Academic Session</label>
                    <input type="text" id="school_session" class="form-control" name="school_session"
                      value="2021-2022" readonly>
                  </div>
                </div>
               
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary mr-1">Show Broad Sheet</button>
                  <button type="reset" class="btn btn-light-secondary">Reset</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
   
  </div>
</section>
<!-- Basic Vertical form layout section end -->
        </div>
      </div>

       <!--starts  -->
             <!-- ############################# -->
                                  <div class="card show-on-print">
                  <div class="card-body">
                  <h2 class="text-info text-center">VISAP IDEAL MODEL COLLEGE</h2>
                  <h5 class="text-center text-warning">31, Olaotan Avenue, Gasline, Ijoko, Sango Ogun State</h5>
        <h4 class="text-center text-danger"><strong>STUDENTS BEHAVIORAL ANALYSIS SHEET</strong></h4>
                        <!-- ############################# -->
            <br />
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center offset-1">
            <span class="btn btn-info btn-round text-center">2021/2022 </span>
                <span class="btn btn-dark btn-round text-center">FIRST TERM </span>
                <span class="btn btn-danger btn-round text-center">Osotech Samson Flourish </span>
                
            </div>
         <br>
</div>
 <div class="card-body">
  <form method="POST" action="">

<div class="table-responsive">
        <table class=" table-bordered table table-stripped table-hover datatable">
                <thead class="text-center">
                    <tr>
                    <th>S/N</th>
                    <th width="250">Student</th>
                    <th> Writing</th>
                    <th> Musical</th>
                    <th>Sports</th>
                    <th>Attentiveness</th>
                    <th>Punctuality</th>
                    <th>Health</th>
                    <th>Politeness</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody class="text-center">
                                        
                    <tr>
                      <input type="hidden" name="term" value="First Term">
                      <input type="hidden" name="school_session" value="2021/2022">
                     <input class="form-control" type="hidden" name="student_id[]" value="1">
                        <td>1</td>
                        <td width="250"><span>Agberayi Samson</span><input readonly type="hidden" value="Agberayi Samson" name="student_name[]"></td>
                        <input readonly type="hidden" value="VISAP/0001" name="reg_number[]">
                        <input readonly type="hidden" value="JSS1" name="student_class[]">
                        <td>
                        <select class="select form-control" name="hand_writing[]">
                         <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>                        </select>
                </td>
                        <td><select name="musical_skill[]" class="select form-control">
                         <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>               
            </select></td>
                        <td><select name="sport[]" class="select form-control">
                         <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>            </select></td>
                        <td><select name="attentiveness[]" class="select form-control">
                         <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>            </select></td>
                        <td><select name="attitude_to_work[]" class="select form-control">
                         <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>            </select></td>
                        <td><select name="health[]" class="select form-control">
                         <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>            </select></td>
                        <td><select name="politeness[]" class="select form-control">
                         <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>            </select>
            <input type="hidden" name="total_count" value="1"></td>
            <td> <input class="form-control" type="text" name="student_comment[]" value=""></td>
                    </tr>           
                                         </tbody>
                                                </table>
                                            </div>
                        <button class="btn btn-success submit-btn btn-lg mr-2 float-right mt-1" type="submit" name="upload-btn"><span class="fa fa-cloud-upload fa-1x"></span> SUBMIT</button>
                        <div class="clearfix"></div>
                      </form>
                                        </div>
                                        <!-- ends -->
    <!-- content goes end -->
      </div>
    </div>
    <!-- END: Content-->
    </div>
   
   <!-- BUS MODAL Start -->
   <div class="modal fade" id="csv_Modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLongTitle" style="font-size: 30px;font-weight: 700;"><i class="fa fa-file fa-2x"></i> Upload Cognitive In CSV</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="col-md-12 col-12 col-xl-12 col-lg-12 col-sm-12">
                  <div class="row">
                   <div class="col-md-6">
                     <div class="form-group">
                  <label for="csv_session">Session</label>
                    <select name="csv_session" id="csv_session" class="select2 form-control form-control-lg">
                      <option value="">--Select--</option>
                      <option value="2021-2022">2021-2022</option>
                    </select>
                    </div>
                  </div>
                   <div class="col-md-6">
                     <div class="form-group">
                  <label for="csv_term"> Term</label>
                    <select name="csv_term" id="csv_term" class="select2 form-control form-control-lg">
                      <option value="">--Select--</option>
                      <option value="1">1st Term</option>
                    </select>
                    </div>
                  </div>

                      <div class="col-md-6">
                     <div class="form-group">
                  <label for="csv_class"> Class</label>
                    <select name="csv_class" id="csv_class" class="select2 form-control">
                      <option value="">--Select--</option>
                      <option value="jss1">JSS1</option>
                    </select>
                    </div>
                  </div>
                  <input type="hidden" name="action" value="upload_beh_csv">
                   <div class="col-md-6">
                     <div class="form-group">
                  <label for="route_name">Choose CSV File </label>
               <input type="file" name="csv_file" id="csv_file" accept=".csv" class="file-input form-control form-control-file">
                </div>
              </div>
                 </div>
                  </div>
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-success ml-1">
                    <span class="fa fa-cloud-upload"></span> Upload Now</button>
                  <button type="button" class="btn btn-danger ml-1" data-dismiss="modal">
                    <i class="bx bx-power-off"></i>
                    Cancel
                  </button>
                </div>
                 </form>
              </div>
            </div>
          </div>
    <!-- BUS MODAL  END -->
   <?php include "../template/footer.php"; ?>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <?php include "../template/FooterScript.php"; ?>
     <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.min.js"></script>
    <!-- END: Page JS-->

    <!-- END: Page JS-->
  </body>
  <!-- END: Body-->
</html>