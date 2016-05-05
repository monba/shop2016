<?php include ('session.php');?>	
<?php
include('header.php');
$get_id = $_GET['id'];
?>
<body>
    <div id="wrapper">
        <?php include ('navtop.php');?> 
        <!--/. NAV TOP  -->
       <?php include_once('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                            <?php include ('connect.php');
                            $query = mysql_query("select * from category where category_id='$get_id'") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                            ?>
						
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" >

                                <div class="alert alert-info"><strong>Ангилал засварлах</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Нэр</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="inputEmail" class = "form-control" value="<?php echo $row['category_name']; ?>">
                                    </div>
                                </div>
                              <hr>
                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Хадгалах</button>
										<span><a href = "category.php" class = "btn btn-danger"> Буцах</a></span>
                                    </div>
                                </div>

                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $name = $_POST['name'];
                               
                                mysql_query("update category set category_name='$name' where category_id='$get_id'") or die(mysql_query());
                               
                                  
                                  
     
                            }
                            ?>


                        </div>
                        </div>
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
