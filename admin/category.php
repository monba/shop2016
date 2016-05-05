<?php include ('session.php');?>	
<?php include ('header.php');?>	
<body>
    <div id="wrapper">
        <?php include ('navtop.php');?> 
        <!--/. NAV TOP  -->
       <?php include_once('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Ангилал нэмэх
                            </button>
							
						
                        </h1>
						<?php include ('modal_add_category.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Бараа</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Дугаар</th>
                                        <th>Ангилалын нэр</th>
                                        <th>засварлах</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                    $query = mysql_query("select * from category") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $id = $row['category_id'];

                                        ?>
                                        <tr class="warning">
                                            <td><?php echo $row['category_id']; ?></td> 
                                            <td><?php echo $row['category_name']; ?></td> 
                                            <td width="160">
                                                <a href="#delete_category<?php echo $id; ?>" role="button"  data-target = "#delete_category<?php echo $id;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Устгах</a>
                                                <a href="edit_category.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Засах</a>
                                            </td>
                                            <!-- product delete modal -->
                                   <?php include ('delete_category_modal.php');?>
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
