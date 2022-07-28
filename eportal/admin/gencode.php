<?php 
require_once "helpers/helper.php";
 ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
<head>
    <?php include "../template/MetaTag.php";?>
    <title><?php echo $SmappDetails->school_name ?> :: Smatech Accesssibility Code Generator</title>
   <!-- include template/HeaderLink.php -->
   <?php include "../template/HeaderLink.php";?>
   <style>

		/* General */

button, code {display: block;margin: 30px auto}

/* Code */

code {
    background-color: antiquewhite;
    color: dimgrey;
    height: 100px;
    width: 100%;
    text-align: center;
    line-height: 100px;
    font-size: 40px;
    font-weight: bold;
    border-left: 15px solid olivedrab
}

/* Button */

.butt {
    background-color: olivedrab;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 7px 13px;
    font-family: Tahoma;
    font-size: 20px;
    cursor:pointer
}
.butt:hover {background-color: #87ba1d;}
.butt:active {background-color: #4e6d0f;}
	</style>
  <!-- END: Head-->
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
    <!-- BEGIN: Header-->
    <?php include "template/HeaderNav.php"; ?>
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    <?php include "template/Sidebar.php";?>
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
                  <li class="breadcrumb-item"><a href="#"><?php echo $_SESSION['ADMIN_SES_TYPE'];?></a>
                  </li>
                  <li class="breadcrumb-item active">Generate OAuth
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
<div class="row">
             <div class="col-12">
    <h3 class="bd-lead text-primary text-bold"><span class="fa fa-barcode fa-1x"></span> Generate OAuth </h3>
  </div>
    </div>
    <div class="text-center"><h2>Generate OAuth Code For Schools</h2></div>
   <div class="col-md-12 col-12">
      <div class="card">
       
        <div class="card-body">
        	 <code id="serial">No Serial Generated</code>
          <form class="form form-vertical">
            <div class="form-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="first-name-vertical">SCHOOL</label>
                    <select name="" id="" class="select2 form-control form-control-lg">
                    	<option value="">Choose School</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="email-id-vertical">TERM</label>
                    <input type="text" id="email-id-vertical" class="form-control" name="email-id"
                      placeholder="TERM">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="contact-info-vertical">SESSION</label>
                    <input type="text" class="form-control" name="contact"
                      placeholder="SESSION">
                  </div>
                </div>
             
                <input type="hidden" id="serialsave" class="form-control" name="serialsave"
                      placeholder="OAUTH CODE" readonly>
               
                <button id="generate" type="button" class="btn btn-success btn-lg btn-round" onclick="generateSerial()">Generate</button>
                <div class="clearfix"></div>
                <button class="btn btn-dark btn-lg mr-1 float-right" type="submit" >Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--  -->

   
    <!-- content goes here -->
        </div>
      </div>
    </div>
    <!-- END: Content-->
    </div>
   <?php include "../template/footer.php"; ?>
    <!-- END: Footer-->
    <!-- BEGIN: Vendor JS-->
    <?php include "../template/FooterScript.php"; ?>
     <!-- BEGIN: Page JS-->
     <script>
	function generateSerial() {
    
    'use strict';
    
    var chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',
        
        serialLength = 10,
        
        randomSerial = "",
        
        i,
        
        randomNumber;
    
    for (i = 0; i < serialLength; i = i + 1) {
        
        randomNumber = Math.floor(Math.random() * chars.length);
        
        randomSerial += chars.substring(randomNumber, randomNumber + 1);
        
    }
    
    document.getElementById('serial').innerHTML = randomSerial;
    document.getElementById('serialsave').value = randomSerial.toUpperCase();
    
}
</script>
  </body>
  <!-- END: Body-->
</html>