<!DOCTYPE html>

<html>

    <?php include('header.php');
    include('logcheck.php');
    ?>
    
    
    <body>
		
		<!-- Container -->
		
					<!-- /Main Header -->
					
					
					<!-- Main Navigation -->
				  <?php include('navtop.php');?>
					<!-- /Main Navigation -->
					
				</div>
				
			</header>
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="index.html">Нүүр <i class="icons icon-right-dir"></i> Холбоо барих</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-7 col-md-7 col-sm-7">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Холбогдох мэдээлэл</h4>
                            </div>
                            
                            <div class="page-content contact-info">
                            	
                                <iframe width="425" height="350" src="https://maps.google.rs/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=marmora+road&amp;sll=44.210767,20.922416&amp;sspn=4.606139,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=Marmora+Rd,+London+SE22+0RX,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.451955,-0.055755&amp;output=embed"></iframe>
								<div class="row">
                                	
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item green">
                                            <i class="icons icon-location-3"></i>
                                            <p>Хануул дүүрэг, 16-р хороо ,Их сургуулийн  гудамж, төв дэлгүүр</p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item blue">
                                            <i class="icons icon-mail"></i>
                                            <p><a href="#">Вэб: www.homeshop.mn</a><br>
											<a href="#">И-мэйл: crm@homeshop.mn</a>
											</p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item orange">
                                            <i class="icons icon-phone"></i>
                                            <p>976-559-65-80<br>
976-603-60-35
</p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item purple">
                                            <i class="icons icon-clock"></i>
                                            <p>Даваа - Баасан: 08.00-20.00<br>
Бямба: 09.00-15.00<br>
Ням: хаалттай</p>
										</div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                    	</div>
                        
                        
                        
                        
                        <div class="col-lg-5 col-md-5 col-sm-5">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Холбоо барих</h4>
                            </div>
                            
                            <div class="page-content contact-form">
                            	
								
								 <form method = "POST" >
                            <label for="name">Нэр </label>
                            <input type="text" name="name" >
                            
                            <label for="email2">И-Майл</label>
                            <input type="text" name="Email" >

                            <label for="message">Мессеж</label>
                            <textarea name = "message"></textarea>
                            
                            
                            <input class="big" type="submit" name = "submit" value="Илгээх">
                            <a href="register.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Бүртгүүлэх</a>
							
                        </form>
                            </div>
                           	<?php include ('admin/connect.php');
						
						if (isset ($_POST ['submit']))
						
						{
							$name = $_POST['name'];	
							$Email = $_POST['Email'];
							$message = $_POST['message'];
						
						
										mysql_query("insert into messages(name,Email,message) VALUES('$name','$Email','$message')");
									
									echo "<script>
										alert('Таны хүсэлт илгээгдлээ!');
										header ('location :../index.php');
									</script>";
									 }


									 ?>	
                            
                    	</div>
                        
                        
                  	</div>
                    
				</section>
				<!-- /Main Content -->
                
                
			</div>
			<!-- /Content -->
			
			
			


			
			<!-- Banner -->
	<?php include('banner.php'); ?>
			<!-- /Banner -->
			
			

				<?php include('footer.php'); ?>
		
            
		</div>
    	<!-- Container -->
		
		
		
		
		
    </body>
    
</html>