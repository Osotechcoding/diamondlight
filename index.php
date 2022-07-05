<?php
if (!file_exists("Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("Inc/Osotech.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

 <title> Home Page :: <?php echo ($Osotech->getConfigData()->school_name);?></title>
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

            <!-- Slider Section Start -->
           <?php include_once ("Templates/BannerSliders.php");?>
            <!-- Slider Section End -->                    

            <!-- Categories Section Start -->
           <?php include_once("Templates/SchoolClasses.php"); ?>
            <!-- Categories Section End -->

            <!-- Categories Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses main-home event-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title">Select Courses</div>
                        <h2 class="title black-color">Explore Popular Courses</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/1.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (1 rating)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">Free</span>
                                        </div>
                                        <h3 class="title"><a href="#">Fitness Development Strategy Buildup Laoreet</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Students                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                6 Lessons                                        
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/main-home/2.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (1 rating)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">$40.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Artificial Intelligence Fundamental Startup Justo</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Students                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                6 Lessons                                        
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/home8/2.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (1 rating)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">$35.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Computer Science Startup Varius et Commodo</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Students                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                6 Lessons                                        
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 md-mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/home8/4.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (1 rating)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">$32.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Testy & Delicious Food Recipes for Lunch Tellus</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Students                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                6 Lessons                                        
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 sm-mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/home8/5.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (1 rating)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">$22.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Lawyer Advance Mental Simulator Handle Nulla</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Students                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                6 Lessons                                        
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="assets/images/courses/home8/6.jpg" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (1 rating)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course-price">
                                            <span class="price">$28.00</span>
                                        </div>
                                        <h3 class="title"><a href="#">Computer Fundamentals Basic Startup Ultricies</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 25 Students                                        
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                6 Lessons                                        
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            <!-- CTA Section Start -->
            <div class="rs-cta main-home">
                <div class="partition-bg-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-6"></div>
                            <div class="col-lg-6 pl-70 md-pl-15">
                                <div class="sec-title3 mb-40">
                                    <h2 class="title white-color mb-16">20% Offer Running - Join Today</h2>
                                    <div class="desc white-color pr-100 md-pr-0">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail in their duty through weakness. These cases are perfectly simple and easy every pleasure is to be welcomed and every pain avoided.</div>
                                </div>
                                <div class="btn-part">
                                    <a class="readon orange-btn transparent" href="#">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End --> 

            <!-- Faq Section Start -->
            <div class="rs-faq-part style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class=" main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">Frequently Asked Questions</h2>
                            </div>
                              <div class="faq-content">
                                  <div id="accordion" class="accordion">
                                     <div class="card">
                                         <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" href="#collapseOne">What are the requirements ?</a>
                                         </div>
                                         <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                             <div class="card-body">
                                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                             </div>
                                         </div>
                                     </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Does Educavo offer free courses?</a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">What is the transfer application process?</a>
                                          </div>
                                          <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>     
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">What is distance education?</a>
                                          </div>
                                          <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon orange-color">
                                <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- faq Section Start -->
       

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial main-home pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 mb-50 md-mb-30 text-center">
                        <div class="sub-title primary">Testimonial</div>
                        <h2 class="title white-color">What Students Saying</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="2" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="2" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/1.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/2.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/3.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>   
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/1.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/2.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/3.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
                <div class="container">  
                      <div class="sec-title3 text-center mb-50">
                        <div class="sub-title"> News Update</div>
                        <h2 class="title"> Latest News & events</h2>
                      </div> 
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/1.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>December 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.php">Education is The Process of Facilitating Learning</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>October 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.php">High school program starting soon 2021 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/3.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>April 25, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.php">Shutdown of schools extended to Aug 31 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/4.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>June 20, 2010</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.php">This is a great source of content for anyone… </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/5.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>August 30, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.php">Pandemic drives millions from Latin America’s</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/6.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>May 10, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.php">Modern School the lovely valley team work</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
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