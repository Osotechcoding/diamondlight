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
                    <h1 class="page-title">Course Grid 02</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>Course</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

          <!-- Popular Courses Section Start -->
          <div id="rs-popular-courses" class="rs-popular-courses style4 orange-color pt-110 pb-120 md-pt-70 md-pb-80">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-4 col-md-6 mb-30">
                          <div class="courses-item">
                              <div class="img-part">
                                  <img src="assets/images/courses/style4/1.jpg" alt="">
                              </div>
                              <div class="content-part">
                                  <span class="price">$55.00</span>
                                  <span><a class="categories" href="#">Health & Fitness</a></span>
                                  <h3 class="title"><a href="course-single.php">Fitness Trainer: Gym Work Out & Body Building</a></h3>
                                  <div class="bottom-part">
                                      <span class="user"><i class="fa fa-user"></i> 245</span>
                                      <div class="info-meta">
                                          <ul>
                                              <li class="ratings">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  (05)
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="btn-part">
                                          <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 mb-30">
                          <div class="courses-item">
                              <div class="img-part">
                                  <img src="assets/images/courses/style4/2.jpg" alt="">
                              </div>
                              <div class="content-part">
                                  <span class="price">$55.00</span>
                                  <span><a class="categories" href="#">Photography</a></span>
                                  <h3 class="title"><a href="course-single.php">The Art of Black and White Photography</a></h3>
                                  <div class="bottom-part">
                                      <span class="user"><i class="fa fa-user"></i> 245</span>
                                      <div class="info-meta">
                                          <ul>
                                              <li class="ratings">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  (05)
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="btn-part">
                                          <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 mb-30">
                          <div class="courses-item">
                              <div class="img-part">
                                  <img src="assets/images/courses/style4/3.jpg" alt="">
                              </div>
                              <div class="content-part">
                                  <span class="price">$55.00</span>
                                  <span><a class="categories" href="#">Web Development</a></span>
                                  <h3 class="title"><a href="course-single.php">Become a PHP Master and Make Money Fast</a></h3>
                                  <div class="bottom-part">
                                      <span class="user"><i class="fa fa-user"></i> 245</span>
                                      <div class="info-meta">
                                          <ul>
                                              <li class="ratings">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  (05)
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="btn-part">
                                          <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 md-mb-30">
                          <div class="courses-item">
                              <div class="img-part">
                                  <img src="assets/images/courses/style4/4.jpg" alt="">
                              </div>
                              <div class="content-part">
                                  <span class="price">$55.00</span>
                                  <span><a class="categories" href="#">Web Development</a></span>
                                  <h3 class="title"><a href="course-single.php">Learning jQuery Mobile for Beginners</a></h3>
                                  <div class="bottom-part">
                                      <span class="user"><i class="fa fa-user"></i> 245</span>
                                      <div class="info-meta">
                                          <ul>
                                              <li class="ratings">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  (05)
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="btn-part">
                                          <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 sm-mb-30">
                          <div class="courses-item">
                              <div class="img-part">
                                  <img src="assets/images/courses/style4/5.jpg" alt="">
                              </div>
                              <div class="content-part">
                                  <span class="price">$55.00</span>
                                  <span><a class="categories" href="#">Web Development</a></span>
                                  <h3 class="title"><a href="course-single.php">From Zero to Hero with Advance Nodejs</a></h3>
                                  <div class="bottom-part">
                                      <span class="user"><i class="fa fa-user"></i> 245</span>
                                      <div class="info-meta">
                                          <ul>
                                              <li class="ratings">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  (05)
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="btn-part">
                                          <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                          <div class="courses-item">
                              <div class="img-part">
                                  <img src="assets/images/courses/style4/6.jpg" alt="">
                              </div>
                              <div class="content-part">
                                  <span class="price">$55.00</span>
                                  <span><a class="categories" href="#">Web Development</a></span>
                                  <h3 class="title"><a href="course-single.php">Learn Python – Interactive Python Tutorial</a></h3>
                                  <div class="bottom-part">
                                      <span class="user"><i class="fa fa-user"></i> 245</span>
                                      <div class="info-meta">
                                          <ul>
                                              <li class="ratings">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  (05)
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="btn-part">
                                          <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Popular Courses Section End -->
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