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
		if($qt_row['quantity'] != $_SESSION['cart_'.$_GET['add']] && $qt_row['quantity'] > 0){
			$_SESSION['cart_'.$_GET['add']]+='1';
			header("Location: cart.php");
		} else {
			echo '<script language="javascript">alert("бүтээгдэхүүн хангалттай байхгүй байна!"); document.location="index.php";</script>';
		}
	}
}

//Hapus 1 Barang//
if(isset($_GET['remove'])){
	$_SESSION['cart_'.$_GET['remove']]--;
	header("Location: cart.php");
}

//Hapus Barang//
if(isset($_GET['delete'])){
	$_SESSION['cart_'.$_GET['delete']]='0';
	header("Location: cart.php");
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
                    	<p><a href="#">Нүүр</a> <i class="icons icon-right-dir"></i>Сагс</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                <div class="row">
                        
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="carousel-heading">
                                <h4>Таны сагс</h4>
                            </div>
                            
                         <table class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Зураг</th>
									<th>Бараа нэр</th>
									<th>Тоо</th>
									<th>Үнэ</th>
									<th>Нийт үнэ</th>
                                    <th>Сонголт</th>
								</tr>
							</thead>
							<tbody>
								
                                <?php 
								$i=1;
								foreach($_SESSION as $name => $value){
									if($value > 0)
									{
										if(substr($name, 0, 5) == 'cart_')
										{
											$id = substr($name, 5, (strlen($name)-5));
											$get = mysql_query("SELECT * FROM tb_products WHERE productID='$id'");
											while($get_row = mysql_fetch_assoc($get)){
												$sub = $get_row['price'] * $value;
												
												echo '
												<tr>
												<td>'.$i.'</td>
												<td><img alt="" src="admin/'.$get_row['location'].'" width="150" height="150" ></td>
												<td>'.$get_row['name'].'</td>
												<td>'.$value.'</td>
												<td>'.$get_row['price'].'</td>
												<td>'.$sub.'</td>
												<td>
													<a href="cart.php?remove='.$id.'"><i class="icon-minus"></i></a> | 
													<a href="cart.php?add='.$id.'"><i class="icon-plus"></i></a> | 
													<a href="cart.php?delete='.$id.'"><i class="icon-minus"></i></a>
												</td>
												<br>
												</tr>';
												$i++;
											}		
										}
										@$total += $sub;
									}
								}
								
								
								
								?>
											  		  
							</tbody>
						</table>

                        </div>
                       


                            
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        
                            <div class="checkout-form">
                                <table>
                                    <tr>
                            <p class="buttons center">	
                        <?php 
							if(@$total == 0){
									echo 'Сагс хоосон!';
									echo '<br>
											<a href="index.php">Үргэлжлүүлэн бараа сонирхох </a>
											
										  </br>
										  <br>';
								} else {
									
									echo '<span class="price">Нийт үнэ</span>: <span class="price">'.@$total.'₮</span><br>';
									echo ' 
                                
                                <br><br>
                                <a class="btn" href="checkout.php?total='.$total.'"><input type="submit" class="red huge" value="Захиалах"></a>';
                                echo '&emsp;<a href="index.php" class="btn" ><input type="submit" class="red huge" value="Үргэлжлүүлэн бараа сонирхох"></a> ';
								}
						?>			
							
						</p>				
                         </tr> 
                                </table>
                                
                               
                            </div>
                            
                        </div>
                            
                    </div>
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<?php include('arheseg.php'); ?>
                    
				</aside>
                <!-- /Sidebar -->
                
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