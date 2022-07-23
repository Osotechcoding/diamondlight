<?php
if (!file_exists("Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("Inc/Osotech.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> </title>
     <?php include ("Templates/MetaTag.php");?>
    <?php include ("Templates/HeaderScript.php");?>
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
        <?php include_once ("Templates/Header.php");?>
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
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">School Events </h1>
                    <ul>
                        <li>
                            <a class="active" href="./">Home</a>
                        </li>
                        <li>Our Events </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Events Section Start -->
            <div class="rs-event modify1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row">
                     <?php $allEvents = $Osotech->get_all_active_events();


                     if ($allEvents) {
                      foreach ($allEvents as $event) {?>
                        <div class="col-lg-4 mb-30 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="eportal/events-images/<?php echo $event->event_image; ?>" alt="Image" width="100%">
                                         <div class="dates">
                                              <?php echo date("F j, Y",strtotime($event->edate)) ?>
                                       </div>
                                   </div>
                                   <div class="content-part">
                                       <h4 class="title"><a href="#"><?php echo ucwords($event->event_title);?></a></h4>
                                     <div class="time-sec">
                                         <div class="timesec"><i class="fa fa-clock-o"></i> <?php echo date("h:i:s a",strtotime($event->etime)) ?></div>
                                         <div class="address"><i class="fa fa-map-o"></i> <?php echo $event->evenue; ?></div>
                                     </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                      <?php
                      }
                     } ?>




                   </div>
                </div>
            </div>
            <!-- Events Section End -->
	        <!-- Newsletter section start -->
            <?php include_once ("Templates/NewsletterForm.php");?>
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
</body>
</html>
