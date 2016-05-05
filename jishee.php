 <?php
                                      include ('admin/connect.php'); 
                    $count_query = mysql_query("select * from order_details where status='Pending'") or die(mysql_error());
                    $count = mysql_num_rows($count_query);
                    ?>
                    <?php echo $count; ?>












                      <li><a href="#">Cell Phones &amp; Accessories <i class="icons icon-right-dir"></i></a>
                                        <ul class="sidebar-dropdown">
                                            <li>
                                                <ul>
                                                    <li><a href="#">Cell phones &amp; Smartphone</a></li>
                                                    <li><a href="#">Cell Phone Accessories</a></li>
                                                    <li><a href="#">Headsets</a></li>
                                                    <li><a href="#">Cases, Covers & Skins</a></li>
                                                    <li><a href="#">Screen Protectors</a></li>
                                                </ul>
                                            </li>
                                           
                                        </ul>
                                    </li>





                                         <!-- Carousel -->
                    <div class="row sidebar-box">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 sidebar-carousel">
                            
                            <!-- Slider -->
                            <section class="sidebar-slider">
                                <div class="sidebar-flexslider">
                                    <ul class="slides">
                                        <li>
                                            <a href="#"><img src="img/sidebar-slide1.jpg" alt="Slide1"/></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="img/sidebar-slide2.jpg" alt="Slide1"/></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="img/sidebar-slide3.jpg" alt="Slide1"/></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slider-nav"></div>
                            </section>
                            <!-- /Slider -->
                            
                        </div>
                        
                    </div>
                    <!-- /Carousel -->