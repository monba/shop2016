<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
    <div id="wrapper">
        <?php include ('navtop.php');?> 
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
						
						
						<div class="hero-unit-table">   
                             <table class="table table-striped table-bordered table-hover table-condensed" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Захиалга</strong>
                                </div>
								    <ul class="breadcrumb"> 
										<li>Захиалгууд<span class="divider">/</span></li>				
										<li  class="active">Хүлээгдэж байгаа<span class="divider">/</span></li>
										<li><a href="delivered.php">Хүргэгдсэн</a> <span class="divider">/</span></li>
									
									</ul>
                                <thead>
                                    <tr>
                                       
                                        <th>Барааны нэр</th>
                                        <th>Хэрэглэгчийн нэр</th>
                                        <th>Үнэ</th>
                                        <th>Тоо ширхэг</th>
                                        <th>Нийт дүн</th>
										<th>Төлөв</th>
										<th>Төлбөр</th>
										<th>Баталгаажуулах</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php include ('connect.php');
                                    $cart_table = mysql_query("select  * from order_details where status='Pending'") or die(mysql_error());
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
                                           
                                            <td><?php echo $product_row['name']; ?></td>
                                            <td><?php echo $member_row['Firstname']." ".$member_row['Lastname']; ?></td>
                                            <td><?php echo $cart_row['price']; ?></td>
                                            <td><?php echo $cart_row['qty']; ?></td>
                                            <td><?php echo $cart_row['total']; ?></td>
                                            <td><?php echo $cart_row['status']; ?></td>
										    <td><?php echo $cart_row['modeofpayment']; ?></td>
										    <td width="140"><a href="update_status.php<?php echo '?id='.$order_id; ?>" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;Баталгаажуулах</a></td>
											
                                        </tr>
                                            
                                            
                                           
                                            <!-- product delete modal -->
                                  
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>