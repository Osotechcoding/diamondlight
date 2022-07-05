<?php
if (!file_exists("Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("Inc/Osotech.php");
?>

<!DOCTYPE html>
<html lang="en">
>
<head>
    <?php include_once ("Templates/MetaTag.php");?>
	<!-- meta tag -->
	<title> </title>
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
							<h1 class="page-title">About Us</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>About Us</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- About Section Start -->
			<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="assets/images/about/about2orange.png" alt="About Image">
							</div>
						</div>
						<div class="col-lg-6 pr-70 md-pr-15">
							<div class="sec-title">
								<div class="sub-title orange">About <?php echo ($Osotech->getConfigData()->school_name);?></div>
								<h2 class="title mb-17">Welcome to <?php echo ($Osotech->getConfigData()->school_name);?></h2>
								<div class="bold-text mb-22">The Chairman and Proprietor of <?php echo ($Osotech->getConfigData()->school_name);?>, Mr Samsom Yomi Osewa and Mrs Victoria Olayemi Osewa are passionate about the educational sector.

They are Pharmacists and seasoned Marriage Counsellors.

The Chairman was the director of Ranbaxy Nigeria Ltd and the Nigerian German Chemicals in Lagos, Nigeria. He is passionately driven by a vision he received from God to reach out to children and youths.

The Proprietor took the foremost leadership training in the Haggai International at Maui Center in Hawaii State of the USA in 2011.

She is a mother who believes that the paradigm of education must shift in Nigeria in conformity with international standards and that is evident at <?php echo ($Osotech->getConfigData()->school_name);?>.,</div>
<blockquote>
	Each tour gives the parent an opportunity to observe students and teachers in our classrooms. At The Ambassadors Schools, a conducive learning environment is key.
</blockquote>

								<div class="desc">S.Y. Osewa and his blessed wife, after over 28 years of happy togetherness are seasoned marriage counsellors who have had the opportunity to minister in many churches and christian organizations both in Nigeria and abroad. Samson Yomi Osewa also served as on of the National Directors of the full Gospel Business Men’s Fellowship International – an organization in which he and his wife are active members.

He and his wife are the visionaries behind the founding of this great citadel of learning</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Section End -->

			<!-- CTA Section Start -->
			<div class="rs-cta style2">
				<div class="partition-bg-wrap inner-page">
					<div class="container">
						<div class="row y-bottom">
							<div class="col-lg-6 pb-50 md-pt-70 md-pb-70">
								<div class="video-wrap">
									<a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
											<i class="fa fa-play"></i>
											<h4 class="title mb-0">Take a Video  Tour at Educavo</h4>
										</a>
								</div>
							</div>
							<div class="col-lg-6 pl-62 pt-134 pb-150 md-pt-50 md-pb-50 md-pl-15">
								<div class="sec-title mb-40 md-mb-20">
										<h2 class="title mb-16">Admission Open for 2022-2023</h2>
										<div class="desc">The homelike quality of our school contributes to a relaxed, focused experience for the child. Our indoor classroom activities are placed on open shelves for selection as interest and readiness inspires the child. Our outdoor environment offers a beautiful developed playground with The homelike quality of our school contributes to a relaxed, focused experience for the child. Our indoor classroom activities are placed on open shelves for selection as interest and readiness inspires the child. Our outdoor environment offers a beautiful developed playground with manipulatives, tricycles, pets, and gardens.
, tricycles, pets, and gardens.</div>
								</div>
								Admission in Progress (2022-2023 academic session)
Admission is currently open into J.S.S 1 (2022-2023 Academic Session). Details for the examinations are as follows.

1ST Batch: Saturday, March 12, 2022
2ND Batch: Saturday, May 14, 2022
Venue: The Junior College

Time: 9:00 AM (Accreditation starts 8:00 AM).

For more information, kindly contact 08131374443, 08140122566
								<div class="btn-part">
										<a class="readon2 orange" href="#">Apply Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CTA Section End -->

			<!-- Counter Section Start -->
			<div id="rs-counter" class="rs-counter style2-about pt-100 md-pt-70">
				<div class="container">
					<div class="row couter-area">
						<div class="col-md-4 sm-mb-30">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="assets/images/counter/bg1.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count kplus">1</h2>
									<h4 class="title mb-0">Students</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 sm-mb-30">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="assets/images/counter/bg2.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count">30</h2>
									<h4 class="title mb-0">Staff</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="assets/images/counter/bg3.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count">195</h2>
									<h4 class="title mb-0">Graduates</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Counter Section End -->

			<!-- About Section Start -->
			<div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="assets/images/about/history.png" alt="About Image">
							</div>
                            <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                                <li class="nav-item tab-btns single-history">
                                    <a class="nav-link tab-btn active" id="about-history-tab" data-toggle="tab" href="#about-history" role="tab" aria-controls="about-history" aria-selected="true"><span class="icon-part"><i class="flaticon-banknote"></i></span>History</a>
                                </li>
                                <li class="nav-item tab-btns single-history">
                                    <a class="nav-link tab-btn" id="about-mission-tab" data-toggle="tab" href="#about-mission" role="tab" aria-controls="about-mission" aria-selected="false"><span class="icon-part"><i class="flaticon-flower"></i></span>Mission & Vission</a>
                                </li>
                                <li class="nav-item tab-btns single-history last-item">
                                    <a class="nav-link tab-btn" id="about-admin-tab" data-toggle="tab" href="#about-admin" role="tab" aria-controls="about-admin" aria-selected="false"><span class="icon-part"><i class="flaticon-analysis"></i></span>Administration</a>
                                </li>
                            </ul>
						</div>
						<div class="offset-lg-1"></div>
						<div class="col-lg-5">
							<div class="tab-content tabs-content" id="myTabContent">
                                <div class="tab-pane tab fade show active" id="about-history" role="tabpanel" aria-labelledby="about-history-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">Educavo History</h2>
                                        <div class="desc">At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sim ilique sunt in culpa.</div>
                                    </div>
                                    <div class="tab-img">
                                        <img class="" src="assets/images/about/tab1.jpg" alt="Tab Image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">Educavo Vision</h2>
                                        <div class="desc">To foster the spiritual, physical and emotional development of every Child. To create a purpose driven youth; thereby empowering the burgeoning learner with the auction to function in a world riddled with challenges. A vision inclined youth is our mission fulfilled.</div>
                                    </div>
                                    <div class="tab-img">
                                        <img class="" src="assets/images/about/tab2.jpg" alt="Tab Image">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about-admin" role="tabpanel" aria-labelledby="about-admin-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">Educavo Mission</h2>
                                        <div class="desc">We will foster spiritual,physical and emotional development of every student. This will be nurtured by providing a solid functional literacy education for the students through the blending of biblical moral principles with modern scholarship and a value-added guidance and counseling with a lot of emphasis on qualitative co-curricular activities</div>
                                    </div>
                                    <div class="tab-img">
                                        <img class="" src="assets/images/about/tab3.jpg" alt="Tab Image">
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
                    <!-- Intro Info Tabs-->
                    <div class="intro-info-tabs">
                        
                    </div>
				</div>
			</div>
			<!-- About Section End -->

			<!-- Team Section Start -->
			<div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg">
				<div class="container">
					<div class="sec-title mb-50 md-mb-30">
							<div class="sub-title orange">Instructor</div>
							<h2 class="title mb-0">Expert Teachers</h2>
					</div>
					<div class="rs-carousel owl-carousel nav-style2 orange-color" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
						<div class="team-item">
							<img src="assets/images/team/1.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.php">Jhon Pedrocas</a></h4>
								<span class="designation">Professor</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-item">
							<img src="assets/images/team/2.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.php">Jesika Albenian</a></h4>
								<span class="designation">Professor</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-item">
							<img src="assets/images/team/3.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.php">Alex Anthony</a></h4>
								<span class="designation">Professor</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Team Section End -->           

			<!-- Testimonial Section Start -->
			<div class="rs-testimonial style2 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 pr-90 md-pr-15 md-mb-30">
							<div class="donation-part">
								<img src="assets/images/donor/1.jpg" alt="">
								<h3 class="title mb-10">Donation helps us</h3>
								<div class="desc mb-38">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua  enims ad minim.</div>
								<div class="btn-part">
										<a class="readon2 orange" href="#">Become a donor</a>
								</div>
							</div>
						</div>
						<div class="col-lg-7 lg-pl-0 ml--15 md-ml-0">
							<div class="testi-wrap mb-50">
								<div class="img-part">
									<img src="assets/images/testimonial/style2/1.jpg" alt="">
								</div>
								<div class="content-part new-content pt-12">
									<div class="desc">Education is the passport to the future for tomorrow belongs to those who prepare for it today</div>
									<div class="info">
										<h5 class="name">Mahadi mansura</h5>
										<div class="designation">Head Teacher</div>
									</div>
								</div>
							</div>
							<div class="testi-wrap">
								<div class="img-part">
									<img src="assets/images/testimonial/style2/2.jpg" alt="">
								</div>
								<div class="content-part new-content pt-12">
									<div class="desc">Education is the passport to the future for tomorrow belongs to those who prepare for it today</div>
									<div class="info">
										<h5 class="name">Jonathon Lary</h5>
										<div class="designation">Math Teacher</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Testimonial Section End -->

			<!-- Partner Start -->
			<div class="rs-partner pb-100 md-pb-70">
				<div class="container">
					<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="true" data-md-device-dots="false">
    						<div class="partner-item">
    							<a href="#"><img src="assets/images/partner/1.png" alt=""></a>
    						</div>
    						<div class="partner-item">
    							<a href="#"><img src="assets/images/partner/2.png" alt=""></a>
    						</div>
    						<div class="partner-item">
    							<a href="#"><img src="assets/images/partner/3.png" alt=""></a>
    						</div>
    						<div class="partner-item">
    							<a href="#"><img src="assets/images/partner/4.png" alt=""></a>
    						</div>
					</div>
				</div> 
			</div>
			<!-- Partner End -->

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