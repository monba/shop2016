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
                           
							
                          
							
						
                        </h1>

						
						<div class="hero-unit-table">   
              
                               <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed table-striped table-bordered" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Санал хүсэлт</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Илгээгч</th>
                                        <th>И-Мэйл хаяг</th>
                                        <th>Мэссеж</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                    $query = mysql_query("select * from messages ORDER BY message_id DESC;") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $message_id = $row['message_id'];
                                        ?>
                                        <tr>
                                            <td style = "width:150px";><?php echo $row['name']; ?></td> 
                                            <td style = "width:200px";><?php echo $row['Email']; ?></td> 
                                            <td style = "width:600px;"><?php echo $row['message']; ?></td> 
										
											  <?php } ?>
										</tr>
									
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
				<div>
               
                
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
