<!DOCTYPE html>
<?php include('admin/connect.php'); 
include('logcheck.php');
?>
<?php


//Tambah Barang//
if(isset($_GET['add'])){
	$id = $_GET['add'];
	$qt = mysql_query("SELECT productid, quantity FROM tb_products WHERE productid='$id'");
	while($qt_row = mysql_fetch_assoc($qt)){
		echo '<script language="javascript">alert("asdasd хангалттай байхгүй байна!"); document.location="index.php";</script>';
		if( $qt_row['quantity'] != $_SESSION['cart2_'.$_GET['add']] && $qt_row['quantity'] > 0){
			$_SESSION['cart2_'.$_GET['add']]+='1';
			header("Location: compare_products.php"); 
		} else {
			echo '<script language="javascript">alert("бүтээгдэхүүн хангалттай байхгүй байна!"); document.location="index.php";</script>';
		}
	}
}

//Hapus 1 Barang//
if(isset($_GET['remove'])){
	$_SESSION['cart2_'.$_GET['remove']]--;
	header("Location: compare_products.php");
}

//Hapus Barang//
if(isset($_GET['delete'])){
	$_SESSION['cart2_'.$_GET['delete']]='0';
	header("Location: compare_products.php");
}
?>
<html>

    
<?php include('header.php');?>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Header -->
		<?php include('navtop.php'); ?>
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="#">Нүүр</a> <i class="icons icon-right-dir"></i>Харьцуулсан бараа</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
					
                    <div class="row">
                    
                        <!-- Heading -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="carousel-heading">
                                <h4>Барааг харьцуулах</h4>
                                <div class="carousel-arrows">
									<a href="#"><i class="icons icon-reply"></i></a>
								</div>
                            </div>
                            
                        </div>
                        <!-- /Heading -->
                        
					</div>	
                    
                    
                    <div class="row">
                    	
                            	 <?php 
								$i=1;
								foreach($_SESSION as $name => $value){
									if($value > 0)
									{
										if(substr($name, 0, 5) == 'cart2_')
										{
											$id = substr($name, 5, (strlen($name)-5));
											$get = mysql_query("SELECT * FROM tb_products WHERE productID='$id'");
											while($get_row = mysql_fetch_assoc($get)){
												$sub = $get_row['price'] * $value;
												echo '
												<div class="col-lg-3 col-md-3 col-sm-3">
												 <table class="compare-table">
                                <tr>
                                	
                                    <td><h5><a href="#">'.$get_row['name'].'</a></h5></td>
                                </tr>
                                
                                 <tr>
                                	
                                    <td class="compare-image"><a href="#"><img alt="" src="admin/'.$get_row['location'].'" width="150" height="150" ></a></td>
                                </tr>

                                <tr>
                                	
                                   <td><span class="price">'.$get_row['price'].'₮</span></td>
                                </tr>
                                 <tr>
                                	
                                   <td><p>'.$get_row['description'].' </p></td>
                                </tr>
                                 <tr>
                                <td>				 <a href="cart.php?add='.$id.'">
                                            <span class="add-to-cart">
                                                <span class="action-wrapper">
                                                    <i class="icons icon-basket-2"></i>
                                                    <span class="action-name">сагсанд нэмэх</span>
                                                </span>
                                            </span>
                                        </a>		
													
													<a href="compare_products.php?delete='.$id.'">
                                            		<span class="add-to-trash">
                                                	<span class="action-wrapper">
                                                    <i class="icons icon-trash-8"></i>
                                                    <span class="action-name">Хасах</span>
                                                	</span>
                                            		</span>
                                        			</a>
												</td> </tr>
                                 </table>
								</div>
                                ';
                                		$i++;
											}		
										}
										@$total += $sub;
									}
								}
								
								
								
								?>
                           
                            
                        

                        
                          <div class="row">
                        <?php 
							if(@$total == 0){
									echo '
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        
                            <div class="checkout-form">
                                <table>
                                    <tr>
                            <p class="buttons center">	
                        Харьцуулсан бараа хоосон!
									<br>
											<a href="index.php">Үргэлжлүүлэн бараа сонирхох </a>
											
										  </br>
										  <br>		
							
						</p>				
                         </tr> 
                                </table>
                                
                               
                            </div>
                            
                        </div>
                          ';
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
			

			
			<!-- Footer -->
		<?php include('footer.php'); ?>
			<!-- Footer -->
			
            
            
		</div>
    	<!-- Container -->
		
		
		
		
    </body>
    
</html>