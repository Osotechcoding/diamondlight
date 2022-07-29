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
if (isset($_GET['action']) && $_GET['action'] === "logout") {
	if (isset($_SESSION['AUTH_SMATECH_APPLICANT_ID'])) {
		$applicant_id = $_SESSION['AUTH_SMATECH_APPLICANT_ID'];
		unset($applicant_id);
			@session_destroy();
			header("Location : ../");
			exit();
	}
}
 ?>