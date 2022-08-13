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
                        <div class="sub-title">School Prospectus</div>
                        <h2 class="title black-color">and More</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                  
                                    <div class="content-part">
                                        
                                        <div class="course-price">
                                            <span class="price">PDF</span>
                                        </div>
                                        <h3 class="title"><a href="#">Download the School Prospectus</a></h3>
                                        
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                  
                                    <div class="content-part">
                                        
                                        <div class="course-price">
                                            <span class="price">PDF</span>
                                        </div>
                                        <h3 class="title"><a href="#">Download Brochure</a></h3>
                                        
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                  
                                    <div class="content-part">
                                       
                                        <div class="course-price">
                                            <span class="price">PDF</span>
                                        </div>
                                        <h3 class="title"><a href="#">List Of Books</a></h3>
                                       
                                    </div>
                                </div>
                           </div>
                        </div> 
                      
                        <div class="col-lg-4 col-md-6 md-mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                  
                                    <div class="content-part">
                                        
                                        <div class="course-price">
                                            <span class="price">PDF</span>
                                        </div>
                                        <h3 class="title"><a href="#">Download Handbook</a></h3>
                                       
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 sm-mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                  
                                    <div class="content-part">
                                        
                                        <div class="course-price">
                                            <span class="price">PDF</span>
                                        </div>
                                        <h3 class="title"><a href="#">School Calendar <br> for 2022-2023</a></h3>
                                       
                                    </div>
                                </div>
                           </div>
                        </div> 
                        <div class="col-lg-4 col-md-6">
                           <div class="courses-item">
                                <div class="courses-grid">
                                  
                                    <div class="content-part">
                                       
                                        <div class="course-price">
                                            <span class="price">PDF</span>
                                        </div>
                                        <h3 class="title"><a href="#">Registration Information</a></h3>
                                       
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            

            <!-- Faq Section Start -->
             <div class="rs-faq-part style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class=" main-part">
                            <div class="title mb-40 md-mb-15">
                                <h3 class="text-part">Frequently Asked Questions</h3>
                            </div>
                              <div class="faq-content">
                                  <div id="accordion" class="accordion">
                                     <div class="card">
                                         <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" href="#collapseOne"><?php echo ($Osotech->getConfigData()->school_name); ?> Address?</a>
                                         </div>
                                         <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                             <div class="card-body">
                                              <?php echo ($Osotech->getConfigData()->school_address); ?> , <?php echo ($Osotech->getConfigData()->school_state); ?>, <?php echo ($Osotech->getConfigData()->country); ?>
                                             </div>
                                         </div>
                                     </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">When was <?php echo ($Osotech->getConfigData()->school_name); ?> Established?</a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                <?php echo ($Osotech->getConfigData()->school_name); ?> was established on 2000. as Nursery &amp; Primary School.  The Secondary school began in 2015.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">Is <?php echo ($Osotech->getConfigData()->school_name); ?> a Christian School?</a>
                                          </div>
                                          <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 YES: <?php echo ($Osotech->getConfigData()->school_name); ?> is a christian school but we welcome a religion in our School.
                                              </div>
                                          </div>
                                      </div>     
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">General Student Performance </a>
                                          </div>
                                          <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 Our student’s all perform excellently well in all subjects and this is evident in the outstanding results gotten from various external exams such as WAEC, NECO, JAMB and various competitions.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon orange-color">
                                <a class="popup-videos" href="https://www.youtube.com/">
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
                        <h2 class="title white-color">What Parents Saying</h2>
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

                        <?php 

                        $all_Testimonials = $Osotech->getAllTestimonials();
                        if ($all_Testimonials) {
                            foreach ($all_Testimonials as $testi) {?>
                                <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt=""> <?php echo $testi->message; ?>.</div>
                                 <div class="author-img">
                                    <img src="eportal/testimonials/<?php echo $testi->image;?>" style="border-radius: 50%;">
                                </div> 
                            </div>
                            <div class="author-part">
                                <a class="name" href="#"><?php echo $testi->fullname; ?></a>
                                <span class="designation"><?php echo $testi->job;?></span>
                            </div>
                        </div>
                                <?php
                                // code...
                            }
                        }


                         ?>
                       
                
                        <!-- <div class="testi-item">
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
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Blog Section Start -->
           <?php include_once ("Templates/LatestBlogs.php");?>
            <!-- Blog Section End -->

            <!-- Newsletter section start -->
            <?php include_once ("Templates/NewsletterForm.php");?>
            <!-- Newsletter section end -->
        </div> 
        <!-- Main content End -->
<!-- Modal -->

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