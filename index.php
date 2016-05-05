<!DOCTYPE html>

<html>
 <?php include('admin/connect.php'); ?>
 <?php 
include('logcheck.php');
 include('header.php');
 
 ?>
    
    
    <body>
					<!-- Main Navigation -->
					 <?php include('navtop.php'); ?>
					<!-- /Main Navigation -->
					
				
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                
                <!-- Slider -->
                <section class="slider col-lg-12 col-md-12 col-sm-12">
                    <div class="flexslider flexsliderBig">
                        <ul class="slides">
                         <?php
                            $query = mysql_query("select * from tb_products  LIMIT 0,10") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];  ?>
                            <li id="slide1">
								<div class = "text">
									
									<div class = "bg"></div>
									
									<div class = "title">
										<h2><strong><?php echo $row['name'] ?></strong></h2>
									</div>
									
									<div class = "desc">
										<h3><?php echo $row['description'] ?></h3>
										<span>From <span class="price"><?php echo $row['price'] ?>₮</span></span>
									</div>
									
									<div class = "button">
										<a class="button big red" href="cart.php?add=<?php echo $id; ?>" >&nbsp;Сагсанд нэмэх</a>
									</div>
									
								</div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
                <!-- /Slider -->
                
                
                
                
                
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
					
					<!-- Featured Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>ХАМГИЙН СҮҮЛИЙН ҮЕИЙН БАРАА</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									
									
									<!-- Slide -->
                                       
									
                                    <?php
                            $query = mysql_query("select * from tb_products  LIMIT 0,10") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
                                $qty = $row['quantity'];
                                
                                    $query1 = mysql_query("SELECT *,SUM(qty) as qty FROM order_details WHERE productID = '$id' AND status = 'Delivered'");
                                    $row1 = mysql_fetch_array($query1);
                                    $total_qty = $qty - $row1['qty'];
                                ?>
										
                                      <!-- Carousel Item -->
										<div class="product" >
											
											<div class="product-image">
												<span class="product-tag">Sale</span>
												<a  href="#<?php echo $id; ?>"   ><img src="admin/<?php echo $row['location'] ?>" width="250" height="200"></a>
												<a href="products_page_v1.php?id=<?php echo $id; ?>" class="product-hover">
													<i class="icons icon-eye-1"></i>Үзэх
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html"><?php echo $row['name'] ?><br></a></h5>
												<span class="price"><?php echo $row['price'] ?>₮<br></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>		
										<?php if($total_qty > 0){ ?>
                                        <span class="action-name"><a href="cart.php?add=<?php echo $id; ?>" >&nbsp;Сагсанд нэмэх</a></span>
                                        <?php }else{ ?>
                                       <span class="action-name">Дууссан</span>
                                        <?php } ?>	 
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Таалагдсан</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														 <span class="action-name"><a href="compare_products.php?add=<?php echo $id; ?>" >&nbsp;Харьцуулах</a></span>
												</span>
											</div>
											
										</div>
                                         <?php } ?>
                                       
										<!-- /Carousel Item -->
								
									<!-- /Slide -->
									
									
									
									
									
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Featured Products -->
					
					
					
					
					<!-- New Collection -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Их борлуулалттай бараа</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
								
									
									
									<!-- Slide -->
									
								
                                      
									
                                    <?php
                            $query3 = mysql_query("SELECT  productID, SUM(qty) AS TotalQuantity FROM order_details GROUP BY productID ORDER BY SUM(qty) DESC  LIMIT 0,10;") or die(mysql_error());
                            while ($row2 = mysql_fetch_array($query3)) {
                                $id2 = $row2['productID'];
                                    $query2 = mysql_query("SELECT * FROM tb_products WHERE productID = '$id2' ");
                                    $row3 = mysql_fetch_array($query2);
                                    $id3 = $row3['productID'];
                                ?>
										
                                      <!-- Carousel Item -->
										<div class="product" >
											
											<div class="product-image">
												
												<a  href="#<?php echo $id3; ?>"   ><img src="admin/<?php echo $row3['location'] ?>" width="250" height="200"></a>
												<a href="products_page_v1.php?id=<?php echo $id3; ?>" class="product-hover">
													<i class="icons icon-eye-1"></i> Үзэх 
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html"><?php echo $row3['name'] ?><br></a></h5>
												<span class="price"><?php echo $row3['price'] ?>₮<br></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>		
										<?php if($total_qty > 0){ ?>
                                        <span class="action-name"><a href="cart.php?add=<?php echo $id3; ?>" >&nbsp;Сагсанд нэмэх</a></span>
                                        <?php }else{ ?>
                                       <span class="action-name">Дууссан</span>
                                        <?php } ?>	 
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name"><a href="wishlist.php?add=<?php echo $id3; ?>" >Таалагдсан</a></span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name"><a href="compare_products.php?add=<?php echo $id; ?>" >&nbsp;Харьцуулах</a></span>
												</span>
											</div>
											
										</div>
                                         <?php } ?>
                                       
										<!-- /Carousel Item -->
								
									<!-- /Slide -->
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /New Collection -->
					
					<!-- Random Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>санамсаргүй бараа</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									<!-- Slide -->
									   
									
                                    <?php
                           
                                    $query4 = mysql_query("SELECT productID FROM tb_products ORDER BY RAND()  LIMIT 0,10") or die(mysql_error());
                            while ($row4 = mysql_fetch_array($query4)) {
                                $id4 = $row4['productID'];
                                    $query5 = mysql_query("SELECT * FROM tb_products WHERE productID = '$id4' ");
                                    $row5 = mysql_fetch_array($query5);
                                    $id5 = $row5['productID'];

                                ?>
										
                                      <!-- Carousel Item -->
										<div class="product" >
											
											<div class="product-image">
												
												<a  href="#<?php echo $id5; ?>"   ><img src="admin/<?php echo $row5['location'] ?>"width="250" height="200"> </a>
												<a href="products_page_v1.php?id=<?php echo $id5; ?>" class="product-hover">
													<i class="icons icon-eye-1"></i> Үзэх 
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html"><?php echo $row5['name'] ?><br></a></h5>
												<span class="price"><?php echo $row5['price'] ?>₮<br></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>		
										<?php if($total_qty > 0){ ?>
                                        <span class="action-name"><a href="cart.php?add=<?php echo $id5; ?>" >&nbsp;Сагсанд нэмэх</a></span>
                                        <?php }else{ ?>
                                       <span class="action-name">Дууссан</span>
                                        <?php } ?>	 
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name"><a href="wishlist.php?add=<?php echo $id3; ?>" >Таалагдсан</a></span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
															<span class="action-name"><a href="compare_products.php?add=<?php echo $id; ?>" >&nbsp;Харьцуулах</a></span>
												</span>
											</div>
											
										</div>
                                         <?php } ?>
                                       
										<!-- /Carousel Item -->
								
								
									<!-- /Slide -->
								
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Random Products -->
					
					 <?php include('brand.php'); ?>
					
						
				</section>
				<!-- /Main Content -->
				
				
				
				
				<!-- Sidebar -->
				<aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
					
					 <?php include('arheseg.php'); ?>
					
					
					
				</aside>
				<!-- /Sidebar -->
				
			</div>
			<!-- /Content -->
			
				<!-- Banner -->
				<?php include('Banner.php'); ?>
				<!-- /Banner -->
			<!-- Footer -->
			<?php include('footer.php');?>
			<!-- Footer -->
			
           
		</div>
    	<!-- Container -->
		
		
		
	

		
    </body>
    
</html>