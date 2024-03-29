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
                    <h1 class="page-title">Blog</h1>
                    <ul>
                        <li>
                            <a class="active" href="./">Home</a>
                        </li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

    		  <!-- Blog Section Start -->
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                    </div>
                                </div>
                                <div class="recent-posts mb-50">
                                    <h3 class="widget-title">Recent Posts</h3>
                                    <ul>
                                        <li><a href="#">University while the lovely valley team work</a></li>
                                        <li><a href="#">High school program starting soon 2021</a></li>
                                        <li><a href="#">Modern School the lovely valley team work</a></li>
                                        <li><a href="#">While the lovely valley team work</a></li>
                                        <li><a href="#">This is a great source of content for anyone…</a></li>
                                    </ul>
                                </div>
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Archives</h3>
                                    <ul>
                                        <li><a href="#">September 2020</a></li>
                                        <li><a href="#">September 2020</a></li>
                                    </ul>
                                </div>
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul>
                                        <li><a href="#">College</a></li>
                                        <li><a href="#">High School</a></li>
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">School</a></li>
                                        <li><a href="#">University</a></li>
                                    </ul>
                                </div>
                                  <div class="recent-posts mb-50">
                                      <h3 class="widget-title">Meta</h3>
                                      <ul>
                                          <li><a href="#">Log in</a></li>
                                          <li><a href="#">Entries feed</a></li>
                                          <li><a href="#">Comments feed</a></li>
                                          <li><a href="#">WordPress.org</a></li>
                                      </ul>
                                  </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-50">
                            <div class="row">
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="assets/images/blog/inner/1.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">University while the lovely valley team work</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> September 14, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">University</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="assets/images/blog/inner/2.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">High school program starting soon 2021</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> September 14, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">High School</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="assets/images/blog/inner/3.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">Modern School the lovely valley team work</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> September 14, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">Primary</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="assets/images/blog/inner/4.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">While the lovely valley team work</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> September 14, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">College</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="assets/images/blog/inner/5.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">This is a great source of content for anyone…</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> September 14, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">College</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="assets/images/blog/inner/6.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">While the lovely valley team work</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> September 14, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">College</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="assets/images/blog/inner/7.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">The Expenses You Are Thinking</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> September 14, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">School</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="assets/images/blog/inner/8.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">This is a great source of content for anyone…</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> September 14, 2020
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">School</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam...
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Blog Section End -->

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
