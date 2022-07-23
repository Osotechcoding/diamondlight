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
                    <h1 class="page-title">Blog Sidebar</h1>
                    <ul>
                        <li>
                            <a class="active" href="./">Home</a>
                        </li>
                        <li>Blog Single</li>
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
                            <div class="recent-posts-widget mb-50">
                                <h3 class="widget-title">Recent Posts</h3>
                                <div class="show-featured ">
                                    <div class="post-img">
                                        <a href="#"><img src="assets/images/blog/style2/1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc">
                                        <a href="#">Covid-19 threatens the next generation of smartphones</a>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i>
                                             April 6, 2020
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="widget-archives mb-50">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <li><a href="#">College</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                      <div class="col-lg-8 pr-50 md-pr-15">
                        <div class="row">
                              <?php
$all_blogs_posted = $Osotech->get_all_active_blogs_post();
if ($all_blogs_posted) {
  foreach ($all_blogs_posted as $value) {?>
    <div class="col-lg-12 mb-70">
                                  <div class="blog-item">
                                      <div class="blog-img">
                                          <a href="blog-single??bId=<?php echo $value->blog_id;?>&action=view"><img src="eportal/news-images/<?php echo $value->blog_image;?>" alt=""></a>
                                      </div>
                                      <div class="blog-content">
                                          <h3 class="blog-title"><a href="blog-single?bId=<?php echo $value->blog_id;?>&action=view"><?php echo $value->blog_title;?></a></h3>
                                          <div class="blog-meta">
                                              <ul class="btm-cate">
                                                  <li>
                                                      <div class="blog-date">
                                                          <i class="fa fa-calendar-check-o"></i> <?php echo date("F j, Y",strtotime($value->created_at)) ?>
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
                                                          <a href="#"><?php echo $value->category_id;?></a>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>

                                            <?php
                  if (str_word_count($value->blog_content) >= 50) {
                  echo substr($value->blog_content,0,100)."...";
                  ?>
                    <div class="blog-desc">
                       </div>
                       <div class="blog-button">
             <a class="blog-btn" href="blog-single?bId=<?php echo $value->blog_id;?>&action=view">Continue Reading</a>
                      </div>
                 <?php
                  }else{
                    echo $value->blog_content;
                  }
                  ?>


                                      </div>
                                  </div>
                              </div>

     <?php
    // code...
  }
}else{
  echo '<div class="alert alert-danger text-center"> <h3> Sorry :) There are no Blog to display at the moment!</h3></div>';
}

   ?>



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
