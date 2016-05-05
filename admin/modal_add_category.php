<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Ангилал нэмэх </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                           
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Нэр:</label>
                                           <input type="text" name="name" class = "form-control" placeholder="Name">
                                          
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
                                mysql_query("insert into category (category_name)
                            	values ('$name')
                                ") or die(mysql_error());

                                header('location:category.php');
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>