<div class="modal fade" id="delete_category<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <h4 class="modal-title" id="myModalLabel"><center>Ангилал устгах </center></h4>
                                        </div>
                                         <div class="modal-body">
                                            <div class="alert alert-danger">Та&nbsp;<strong> <?php echo $row['category_name']; ?></strong>&nbsp;нэртэй ангилалыг устгах уу?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete_category.php<?php echo '?id=' . $id; ?>" ><i class="icon-check"></i>&nbsp;Тийм</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Үгүй</button>

                                        </div>
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  
									  
									  
 </div>
                