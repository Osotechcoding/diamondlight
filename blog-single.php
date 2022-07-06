<?php
@ob_start();
if (!file_exists("Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("Inc/Osotech.php");
?>

<?php 


if (isset($_GET['bId']) && ($_GET['bId'] !="") && isset($_GET['action']) && $_GET['action'] ==="view") {
 $blogId = $_GET['bId'];
 $blog_details = $Osotech->get_blog_ById($blogId);
}else{
  header("Location: ./blog-right");
  exit();
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
	<title><?php echo $Osotech->getConfigData()->school_name;?> ::  <?php echo $blog_details->blog_title;?> </title>
     <?php include_once ("Templates/MetaTag.php");?>
    <!-- meta tag -->
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
                    <h1 class="page-title"> <?php echo $blog_details->blog_title;?></h1>
                    <ul>
                        <li>
                            <a class="active" href="./">Home</a>
                        </li>
                        <li> <?php echo $blog_details->blog_title;?></li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

	       <!-- Blog Section Start -->
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="blog-deatails">
                        <div class="bs-img">
                            <a href="#"><img src="eportal/news-images/<?php echo $blog_details->blog_image;?>" alt="" style="width: 100%;"></a>
                        </div>
                       <div class="blog-full">
                           <ul class="single-post-meta">
                               <li>
                                   <span class="p-date"> <i class="fa fa-calendar-check-o"></i> <?php echo date("F j, Y",strtotime($blog_details->created_at)) ?> </span>
                               </li> 
                               <li>
                                   <span class="p-date"> <i class="fa fa-user-o"></i> admin </span>
                               </li> 
                               <li class="Post-cate">
                                   <div class="tag-line">
                                       <i class="fa fa-book"></i>
                                       <a href="#"><?php echo $blog_details->category_id;?></a>
                                   </div>
                               </li>
                               <li class="post-comment"> <i class="fa fa-comments-o"></i> 0</li>
                           </ul>
                           <div class="blog-desc">
                               <p>
                                   <?php echo $blog_details->blog_content;?>
                               </p>
                           </div>
                       </div>
                   </div>
                  <!--  <div class="ps-navigation">
                       <ul>
                           <li><a href="#"><span class="next-link">Next<i class="flaticon-next"></i></span></a></li>
                           <li><a href="#"><span class="link-text">Soundtrack filma Lady Exclusive Music </span></a></li>
                       </ul>
                   </div> -->
                   <div class="comment-area">
                      <div class="comment-full">
                          <h3 class="reply-title">Leave a Reply</h3>
                            <p>
                              <span>Your email address will not be published. Required fields are marked </span>
                            </p>
                            <form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/educavo/mailer.php">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name*</label>
                                            <input type="text" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email*</label>
                                            <input type="email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 mb-35">
                                        <div class="form-group">
                                            <label>Your comment here...</label>
                                            <textarea cols="40" rows="10" class="textarea form-control" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="submit-btn">
                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
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