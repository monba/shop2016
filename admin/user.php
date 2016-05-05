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
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#joke">
                              Хэрэглэгч нэмэх
                            </button>
							
						
                        </h1>
						<?php include ('add_user_modal.php');?>
						
						<div class="hero-unit-table">   
              
                               <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed table-striped table-bordered" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Хэрэглэгчид</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Нэвтрэх нэр</th>
                                        <th>Нууц үг</th>
                                        <th>Овог</th>
                                        <th>Нэр</th>
                                        <th>Устгах</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from tb_user") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $user_id = $row['user_id'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['username']; ?></td> 
                                            <td>*****</td> 
                                            <td><?php echo $row['firstname']; ?></td> 
                                            <td><?php echo $row['lastname']; ?></td> 
                                            <td width="80">
                                                <a href="#delete_user<?php echo $user_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Устгах</a>
                                                 </td>
                                            <!-- user delete modal -->
                                    
                                    <!-- end delete modal -->

                                    </tr>
									
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                <?php include ('delete_user_modal.php');?>
				
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
