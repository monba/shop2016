<div class="modal fade" id="delete_messages<?php echo $message_id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <h4 class="modal-title" id="myModalLabel"><center>Бараа устгах </center></h4>
                                        </div>
                                         <div class="modal-body">
                                            <div class="alert alert-danger">Та энэ барааг <strong>устгах &nbsp;</strong> <?php echo $row['name']; ?>'уу?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete_message.php<?php echo '?id=' . $message_id; ?>" ><i class="icon-check"></i>&nbsp;Тийм</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Үгүй</button>

                                        </div>
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  
									  
									  
 </div>