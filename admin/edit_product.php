<?php include ('session.php');?>	
<?php
include('header.php');
$get_id = $_GET['id'];
?>
<body>
    <div id="wrapper">
         <?php include ('navtop.php');?> 
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                            <?php include ('connect.php');
                            $query = mysql_query("select * from tb_products where productID='$get_id'") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                            ?>
						
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Бараа засварлах</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Нэр</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="inputEmail" class = "form-control" value="<?php echo $row['name']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Тайлбар</label>
                                    <div class="controls">
                                        <input type="text"  name="description"  class = "form-control" value="<?php echo $row['description']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Категори</label>
                                    <div class="controls">
                                        <select type="text" name="category" class = "form-control" >
                                            <option><?php echo $row['category_id'];  ?></option>
                                        </select>
                                    </div>

                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Үйлдвэрлэгч</label>
                                    <div class="controls">
                                        <input type="text" name="originated" class = "form-control"  value="<?php echo $row['originated']; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Үнэ</label>
                                    <div class="controls">
                                        <input type="text" name="price"  class = "form-control" value="<?php echo $row['price']; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Тоо ширхэг</label>
                                    <div class="controls">
                                        <input type="text" name="quantity" class = "form-control"  value="<?php echo $row['quantity']; ?>">
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="input01">Зураг:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 
                                    </div>
                                </div>
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Хадгалах</button>
										<span><a href = "product.php" class = "btn btn-danger"> Буцах</a></span>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $name = $_POST['name'];
                                $description = $_POST['description'];
                                $category = $_POST['category'];
                                $originated = $_POST['originated'];
                                $price = $_POST['price'];
                                $quantity = $_POST['quantity'];

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];

                                mysql_query("update tb_products set name='$name',description='$description',category_id='$category',originated='$originated',price='$price',quantity='$quantity',location='$location' where productID='$get_id'") or die(mysql_query());
                                
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
