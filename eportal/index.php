<?php 
@session_start();
 require_once "helpers/helper.php";
// require_once "languages/config.php";
// require_once "classes/Configuration.php";
require_once "classes/Session.php";

//$tses_token = Session::set_xss_token();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once ("template/MetaTag.php");?>
<title><?php echo ucwords($SmappDetails->school_name); ?> :: Student Login</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="bapps/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.css">
<link rel="stylesheet" href="bapps/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="bapps/plugins/fontawesome/css/all.min.css">

 <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/toastr.min.css">

<link rel="stylesheet" href="bapps/css/style.css">
</head>
<body id="top" style="background:rgba(0, 0, 0, 0.4) url('schoolbg.jpg');
background-position:center;
background-size: cover;
background-repeat: no-repeat;">

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
     
<div class="loginbox">
<div class="login-left">
<img src="<?php echo $Configuration->get_schoolLogoImage();?>" width="150" class="img-fluid" alt="logo" style="border: 2px solid deepskyblue;border-radius:10px;background: #ffffff;">
<h3 class="text-center text-warning"><?php echo ucwords($SmappDetails->school_name); ?></h3>
<p class="text-center" style="font-size: 13px;"><a href="../" style="text-decoration: none;color: whitesmoke;"> Powered by: <span class="text-danger">SmaTech</span></a></p>
</div>
<div class="login-right">
<div class="login-right-wrap">
<div class="text-center"><img src="<?php echo $Configuration->get_schoolLogoImage();?>" width="50" class="img-fluid" alt="logo"></div>
<h1 class="mb-3 mt-2" style="color: #593128;">STUDENT PORTAL</h1>
<form id="student-login-form">
    <input type="hidden" name="txss_token" value="<?php echo $tses_token;?>">
    <input type="hidden" name="action" value="stud_login">
<div class="form-group">
    <label for="">Portal E-mail</label>
<input type="text" autocomplete="off" class="form-control" name="student_email" id="exampleInputEmail1"
 placeholder="<?php echo $lang['email'];?>" value="<?php if(isset($_COOKIE['login_student_email'])){echo $_COOKIE['login_student_email'];
     }else{
     echo '';
     } ?>">
</div>
<div class="form-group">
    <label for="">Password</label>
<input type="password" autocomplete="off" class="form-control" name="student_password" value="<?php if(isset($_COOKIE['login_student_pass'])){
  echo $_COOKIE['login_student_pass'];
     }else{
    echo '';
  } ?>" id="exampleInputPassword1"
 placeholder="**********">
</div>
<div class="checkbox form-group form-box clearfix">
    <a href="forgot-password" style="float: right;color: red;">Forgot Password</a>
       <div class="form-check checkbox-theme">
       <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberme">
        <label class="form-check-label" for="rememberMe">Remember me</label></div>
        </div>
<div class="form-group">
<button class="btn btn-dark btn-block __loadingBtn__" type="submit">Login</button>
</div>
</form>
<div class="text-center dont-have">Are you a Staff? <a class="link navigate_to_staff_login" style="cursor: pointer;"> Login here</a> 
<p class="text-center text-info mt-2 p-2" style="font-size: 13px;"><a href="../" style="text-decoration: none;color: darkblue;"> Powered by: <span class="text-danger">SmaTech</span></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="col-md-12 text-center mt-3 p-3">
        <h1 class="text-center" style="font-size:40px;color: #fff;font-weight:bold;text-shadow: 4px 2px black; border-radius: 10px; border: 4px solid orangered; background-color: orangered; text-align: center;display: inline-flex;"> <?php //echo ucwords($SmappDetails->school_name);?></h1>
    </div> -->
<script src="bapps/js/jquery-3.6.0.min.js"></script>
<script src="bapps/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
<script src="bapps/js/script.js"></script>

<script src="app-assets/js/scripts/extensions/toastr.min.js"></script>
 <div id="server-response"></div>
<script>
        $(document).ready(function(){
//when a login btn is clicked
const login_form = $("#student-login-form");
login_form.on("submit", function(event){
    event.preventDefault();
    //alert("form Submitted");
     $(".__loadingBtn__").html('<img src="assets/loaders/rolling_loader.svg" width="30"> Processing...').attr("disabled", true);
     $.post("actions/actions",login_form.serialize(),function(result){
        setTimeout(()=>{
            $(".__loadingBtn__").html('LOGIN').attr("disabled", false);
            //alert(result);
            $("#server-response").html(result);
        },500);
     })

})

             $(document).on("click",".navigate_to_staff_login", function(){
                 setTimeout(()=>{
                     window.location.assign("./staffloginportal");
                },500);
            });
        })
    </script>
</body>

</html>