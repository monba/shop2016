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
                        <h1 class="page-header">
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Бараа нэмэх
                            </button>
							
						
                        </h1>
						<?php include ('modal_add_product.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Бараа</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Нэр</tЭh>
                                        <th>Тайлбар</th>
                                        <th>Үйлдвэрлэгч</th>
                                        <th>Үнэ</th>
                                        <th>Тоо ширхэг</th>
                                        <th>Зураг</th>
                                        <th>Засварлах</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                    $query = mysql_query("select * from tb_products") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $id = $row['productID'];

										
																
										$query1 = mysql_query("SELECT *,SUM(qty) as qty FROM order_details WHERE productID = '$id' AND status = 'Delivered'");
										$row1 = mysql_fetch_array($query1);
										$total=$row['quantity'] - $row1['qty'];
										$query2 = mysql_query ("UPDATE product set quantity = '$total' where productID = '$id'");

                                        ?>
                                        <tr class="warning">
                                            <td><?php echo $row['name']; ?></td> 
                                            <td><?php echo $row['description']; ?></td> 
                                            <td><?php echo $row['originated']; ?></td> 
                                            <td style="text-align:right;"><?php echo number_format($row['price']); ?></td> 
                                            <td style="text-align:center;"><?php echo $row['quantity']; ?></td> 
                                            <td width="50" align="center"><img src="<?php echo $row['location']; ?>" class="img-rounded" width="50" height="40"></td> 
                                            <td width="160">
                                                <a href="#delete_product<?php echo $id; ?>" role="button"  data-target = "#delete_product<?php echo $id;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Устгах</a>
                                                <a href="edit_product.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Засах</a>
                                            </td>
                                            <!-- product delete modal -->
                                   <?php include ('delete_product_modal.php');?>
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
