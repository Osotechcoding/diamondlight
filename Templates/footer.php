<?php if ($Osotech->checkAdmissionPortalStatus() === true): ?>
    <!-- Public Alert Message -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
     <h2 class="text-center text-info mt-3"> PUBLIC NOTICE! </h2>
      <div class="modal-body">
       <div class="paoc-popup-margin paoc-popup-mheading"><h3 class="text-center text-danger">ADMISSION! ADMISSION!! ADMISSION!!!</h3></div>
<div class="paoc-popup-margin paoc-popup-content"><p class="text-info"><span style="font-size: 18pt;" class="text-info"><strong>This is to inform the General Public that Admission into all Classes is currently open for the 2022/2023 Academic Session.</strong></span></p>
<p><span style="font-size: 18pt;"><em>Enroll your child/children today. and Obtain 10% Discount Payment</em></span></p>
<p><span style="font-size: 18pt;"><a href="./contact"> Click here</a> for more info &#8230;&#8230;..</span></p>
<p><span style="font-size: 18pt;"><a href="tel:+2348131374443"><span style="color: #0000ff;">Click here </span></a>to call us for details&#8230;&#8230;&#8230;&#8230;</span></p>
<p><span style="font-size: 18pt;"><a href="https://wa.me/2348131374443" target="_blank" rel="noopener">Click here to Chat with us</a> now&#8230;&#8230;.</span></p>
</div>
 <span  class="text-danger float-right" style="cursor: pointer;" data-dismiss="modal"> Close this message</span>

      </div>
    </div>
  </div>
</div>
<!-- Public Alert Message -->
<?php endif ?>



<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                <div class="footer-logo mb-30 text-center">
                    <a href="./" class="text-center"><img src="<?php echo $Osotech->get_schoolLogoImage();?>" alt="" width="150"></a>

                </div>
                <div class="textwidget text-center">
                <h3 class="text-center white-color"><?php echo ($Osotech->getConfigData()->school_name) ?></h3></div>
               <!--  <div class="textwidget pr-60 md-pr-15"><p class="white-color">Our school history is dated back to September, 1998 when it started like a lit of a candle and now grown into a flame that has produced giant of scholars who could fit into any field of the world.</p>
                </div> -->
                <ul class="footer_social text-center">
                    <li>
                        <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                    </li>

                    <li>
                        <a href="#" target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><span><i class="fa fa-google-plus-square"></i></span></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                <h3 class="widget-title">Address</h3>
                <ul class="address-widget">
                    <li>
                        <i class="flaticon-location"></i>
                        <div class="desc"><?php echo ($Osotech->getConfigData()->school_address);?></div>
                    </li>
                    <li>
                        <i class="flaticon-call"></i>
                        <div class="desc">
                            <a href="tel:<?php echo ($Osotech->getConfigData()->school_phone);?>"><?php echo ($Osotech->getConfigData()->school_phone);?></a>
                        </div>
                    </li>
                    <li>
                        <i class="flaticon-email"></i>
                        <div class="desc">
                            <a href="mailto:<?php echo ($Osotech->getConfigData()->school_email);?>"><?php echo ($Osotech->getConfigData()->school_email);?></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                <h3 class="widget-title">Useful Links</h3>
                <ul class="site-map">
                    <li><a href="yearbook">Year Book</a></li>
                    <li><a href="blog-right">News</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="events">Events</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                <h3 class="widget-title">Recent Posts</h3>
                <?php $recentBlog = $Osotech->show_all_recent_active_blogs_post();
                if ($recentBlog) {
                     foreach ($recentBlog as $keyrecent) {?>
                      <div class="recent-post mb-20 md-pb-0">
                    <div class="post-img">
                        <img src="eportal/news-images/<?php echo $keyrecent->blog_image; ?>" width="200">
                    </div>
                    <div class="post-item">
                        <div class="post-desc">
                            <a href="blog-single?bId=<?php echo $keyrecent->blog_id;?>&action=view"><?php echo ucwords($keyrecent->blog_title);?></a>
                        </div>
                        <span class="post-date">
                                       <i class="fa fa-calendar-check-o"></i>
                                       <?php echo date("F j, Y",strtotime($keyrecent->created_at));?>
                                        
                                    </span>
                    </div>
                </div>
                        <?php
                         
                     }
                 } ?>
                
                
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-20">
                <div class="copyright">
                    <p>&copy; <?php echo date("Y");?> All Rights Reserved. Powered By: <a href="http://businessapp.com.ng/">Osotech</a></p>
                </div>
            </div>
            <div class="col-lg-6 text-right md-text-left">
                <ul class="copy-right-menu">
                    <li><a href="./career">Career</a></li>
                    <li><a href="javascript:void(0);">Terms</a></li>
                    <li><a href="./eportal/">Portal</a></li>
	                 <?php if ($Osotech->checkAdmissionPortalStatus() == true): ?>
                        <li>
                        <a href="./admission/">Admission</a>
                    </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Student Result Alert Modal -->
<?php if ($Osotech->checkResultReleasedPortalStatus() === true): ?>
<div class="modal fade" id="ResultAlertModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <div class="paoc-popup-margin paoc-popup-mheading">
        <h3 class="text-center text-danger">2021/2022 Third-term result is Out!!!</h3>
        <h4 class="text-center"><span><a href="./e-result" style="text-decoration: none; color: #ff0000;">Click here to check your ward's Result</a></span></h4></div>
<div class="paoc-popup-margin paoc-popup-content"><p class="text-info"><span style="font-size: 18pt;" class="text-info"><strong>SUMMER SCHOOL starts 8th of August - 2nd of September, 2022 (Boarders are to resume on Saturday, 7th of September).</strong></span></p>

<p><span style="font-size: 18pt;"><a href="./contact"> Click here</a> for more info &#8230;&#8230;..</span></p>
<p><span style="font-size: 18pt; color: #f00;"><a href="tel:+2348131374443" style="text-decoration: none; color: red;">Click here to Register for SUMMER LESSON &#8230;&#8230;&#8230;&#8230;</a></span></p>
 <span  class="text-white float-right" style="cursor: pointer; text-transform: uppercase;background:#f00; color: #000;padding: 5px; border-radius: 5px;" data-dismiss="modal"> Close</span>

      </div>
    </div>
  </div>
</div>
<?php endif ?>
<!-- Student result Alert Modal -->