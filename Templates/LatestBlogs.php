 <div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
                <div class="container">  
                      <div class="sec-title3 text-center mb-50">
                        <div class="sub-title"> News Update</div>
                        <h2 class="title"> Latest School News</h2>
                      </div> 
                    <div class="rs-carousel owl-carousel" data-loop="false" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <?php 
            $recentBlogs = $Osotech->show_all_recent_active_blogs_post();
            if ($recentBlogs) {
            foreach ($recentBlogs as $recentBlog) {?>
                        <!-- single Blog start -->
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="eportal/news-images/<?php echo $recentBlog->blog_image;?>" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i><?php echo date("F j, Y",strtotime($recentBlog->created_at));?></li>
                                </ul>
                                <h3 class="title"><a href="blog-single?bId=<?php echo $recentBlog->blog_id;?>&action=view"><?php echo $recentBlog->blog_title;?></a></h3>
                                <div class="desc"><?php echo substr($recentBlog->blog_content, 0,100)."...";?></div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#"><?php echo $recentBlog->category_id;?></a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="blog-single?bId=<?php echo $recentBlog->blog_id;?>&action=view">Read Full Content</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <!-- Single blog ends -->
                        <?php
    }
}
     ?>
                     </div>
                </div>
            </div>