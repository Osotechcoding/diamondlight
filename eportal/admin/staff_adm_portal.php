<?php 
require_once "helpers/helper.php";
 ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
<head>
    <!-- metaTag -->
    <?php include ("../template/MetaTag.php"); ?>
    <title><?php echo $SmappDetails->school_nam; ?> :: Staff Admission Portal</title>
     <?php include ("../template/dataTableHeaderLink.php"); ?>
  </head>
  <!-- END: Head-->
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <?php include ("template/HeaderNav.php"); ?>
    <!-- headerNav.php -->
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
  <!--  -->
  <?php include ("template/Sidebar.php"); ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
             <h5 class="content-header-title float-left pr-1 mb-0"><?php echo __OSO_APP_NAME__; ?> PORTAL</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="./"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="javascript:void(0);"><?php echo strtoupper($_SESSION['ADMIN_SES_TYPE']) ?></a>
                  </li>
                  <li class="breadcrumb-item active">Staff Admission Portal
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
      <div class="row">
 <div class="col-12">
    <h3 class="bd-lead text-primary text-bold"><span class="fa fa-user-plus fa-2x"></span> STAFF ADMISSION PORTAL</h3>
  </div>

</div>
<div class="text-center ml-2"> <?php include("template/admBtnLink.php");?></div>
<!-- Column selectors with Export Options and print table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body card-dashboard">
          <div class="table-responsive">
            <table class="table table-striped osotechDatatable">
              <thead>
                <tr>
                  <th>Photo</th>
                  <th>Full Name</th>
                  <th>Education</th>
                  <th>Job Desc</th>
                  <th>Application</th>
                  <th> Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="../result-asset/avatar.jpg" width="60"></td>
                  <td>Tata Godwin E</td>
                  <td>BSC</td>
                  <td>Teaching Staff</td>
                  <td><span class="badge badge-pill badge-info" style="cursor: pointer;">Read Letter</span></td>
                  <td>2011/04/25</td>
                  <td> <!-- new btn link -->
                    <div class="btn-group dropdown mb-1">
            <button type="button" class="btn btn-primary">Options</button>
            <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
           <div class="dropdown-menu">
              <a class="dropdown-item text-info" href="javascript:void(0);"> View Info</a>
                
                <a class="dropdown-item text-warning" href="javascript:void(0);">Download CV</a>
                <a class="dropdown-item text-warning" href="javascript:void(0);">Upload Interview</a>
                <a class="dropdown-item text-success" href="javascript:void(0);"> Send Message</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="javascript:void(0);">Delete Applicant</a>
            </div>
          </div>
                   <!--new btn link ends  --> 
                 </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Column selectors with Export Options and print table -->
        </div>
      </div>
    </div>
    <!-- END: Content-->

    </div>
    
    <!-- BEGIN: Footer-->
  <?php include ("../template/footer.php"); ?>
    <!-- END: Footer-->
    <!-- BEGIN: Vendor JS-->
    <?php include ("../template/DataTableFooterScript.php"); ?>
  <?php include_once ("Links/adm_button_links.js.php") ?>
  </body>
  <!-- END: Body-->

</html>