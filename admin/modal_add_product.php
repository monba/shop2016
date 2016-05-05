<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Бараа нэмэх </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Нэр:</label>
                                           <input type="text" name="name" class = "form-control" placeholder="Name">
                                          
                                 </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Тайлбар:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control"  name="description"  placeholder="Description" >
                                    </div>
                                </div>
                             
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Категори:</label>
                                    <div class="controls">
                                        <select type="text" name="category" class = "form-control" placeholder="Category" >
                                            <option>Хоосон</option>
                                             <?php
                        include "connect.php";
                        $sql=mysql_query("select * from category");
    
                        while($row=mysql_fetch_array($sql))
                        {
                            echo "<option value=".$row[category_id].">".$row[category_name]."</option>";
                        }
    
                        ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Үйлдвэрлэгч:</label>
                                    <div class="controls">
                                        <input type="text" name="originated" class = "form-control" placeholder="Origin">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Үнэ:</label>
                                    <div class="controls">
                                        <input type="number" name="price"  class = "form-control" splaceholder="Price" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Тоо ширхэг:</label>
                                    <div class="controls">
                                        <input type="number" name="quantity" placeholder="Quantity"  class = "form-control" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="input01">Зураг:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 	
                                    </div>
                                </div>

								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary">Хадгалах</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Гарах</button>
                                           

								</div>
							
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  </form>  
									  
									   <?php include ('connect.php');
                            if (isset($_POST['go'])) {

                                $name = $_POST['name'];
                                $description = $_POST['description'];
                                $category = $_POST['category'];
                                $originated = $_POST['originated'];
                                $price = $_POST['price'];
                                $quantity = $_POST['quantity'];

                                //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];


                                mysql_query("insert into tb_products (name,description,category_id,originated,price,quantity,location)
                            	values ('$name','$description','$category','$originated','$price','$quantity','$location')
                                ") or die(mysql_error());

                                header('location:product.php');
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>