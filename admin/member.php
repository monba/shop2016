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
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Хэрэглэгчид</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Овог</th>
                                        <th>Нэр</th>
                                        <th>И-Мэйл</th>
                                        <th>Утасны дугаар</th>
                                        <th>Хаяг</th>
                                  
                                        <th>Устгах</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                    $query = mysql_query("select * from tb_member") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $member_id = $row['memberID'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['Firstname']; ?></td> 
                                            <td><?php echo $row['Lastname']; ?></td> 
                                            <td><?php echo $row['Email']; ?></td> 
                                            <td><?php echo $row['Contact_Number']; ?></td> 
                                            <td><?php echo $row['address']; ?></td> 
                                                                               <td width="100">
                                              <a href="#delete_member<?php echo $member_id; ?>" role="button"  data-target = "#delete_member<?php echo $member_id;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Устгах</a>
                                            </td>
                                            <!-- user delete modal -->
											<?php include ('delete_member_modal.php');?>
											
											
                                 
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
