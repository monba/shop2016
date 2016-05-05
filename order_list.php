<?php 
include('session.php'); 
include('header.php');
?>
 <!DOCTYPE html>
<html>
    
    <body>
		
		<div class="container">

			<?php include('navtop.php'); ?>
		
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="#">Нүүр</a> <i class="icons icon-right-dir"></i>Захиалгын түүх</p>
                    </div>
                </div>
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
					
                    <div class="row">
                    
                        <!-- Heading -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="carousel-heading">
                                <h4>Захиалгын жагсаалт</h4>
                               
                            </div>
                            
                        </div>
                        
					</div>	
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
							<table class="order-table">
                            	
								<tr>
									<th>Захиалгын дугаар</th>
									<th>Захиалгын огноо</th>
									<th class="order-status">Захиалгын төлөв</th>
									<th>Нийт үнэ</th>
									<th></th>
								</tr>
								 <?php include ('admin/connect.php');
									 $her_id = $_GET['id'];
                                    $cart_table = mysql_query("select  * from order_details where memberID='$her_id'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $member_id = $cart_row['memberID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
										$member_query = mysql_query("select * from tb_member where memberID = '$member_id'")or die(mysql_error());
										$member_row=mysql_fetch_array($member_query);
                                        ?>
								<tr>
									<td class="order-number"><p> <?php echo $order_id ?></p></td> 
									<td><p>2013-07-21</p></td>
									<td><p><?php echo $cart_row['status']; ?></p></td>
									<td><span class="price"></span><?php echo $cart_row['total']; ?></td>
									<?php echo ' <td class="order-number"><p><a href="order_info.php?id='.$order_id.'">Харах</a></p></td> '?>
								</tr>   
								
								      <?php } ?>                   
								
							</table>
								
                        </div>
                        
                    </div>
                        
                    
				</section>
				<!-- /Main Content -->
                
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					
					 <?php include('arheseg.php'); ?>
                    
				</aside>
              
                
			</div>
			
			<?php include('footer.php');?>
            
		</div>
		<?php include('banner.php');?>

    </body>
    
</html>