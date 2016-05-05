   <!-- Categories -->
                    <div class="row sidebar-box purple">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="sidebar-box-heading">
                                <i class="icons icon-folder-open-empty"></i>
                                <h4>Ангилалууд</h4>
                            </div>
                            
                            <div class="sidebar-box-content">
                                <ul>


                                   <?php
                            $query = mysql_query("select * from category ") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['category_id'];
                                ?>
                                    <li><a href="cat.php?id=<?php echo $id; ?>"><?php echo $row['category_name'] ?><i class="icons icon-right-dir"></i></a></li>
                                     <?php } ?>
                                  
                                    <li><a class="purple" href="#">Бүх ангилал харах</a></li>
                                </ul>
                            </div>
                            
                        </div>
                            
                    </div>
                    <!-- /Categories -->
                    
                    
                    <!-- Compare Products -->
                    <div class="row sidebar-box blue">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="sidebar-box-heading">
                                <i class="icons icon-docs"></i>
                                <h4>Харьцуулсан</h4>
                            </div>
                            <div class="sidebar-box-content">
                                <table class="compare-table">
                                    
                                    <tr>
                                        <td class="product-thumbnail"><img src="admin/upload/49c90b01486bef0b8070b35a791f8f79320.jpg" alt="Product1"></td>
                                        <td class="product-info">
                                            <p><a href="#">asus i5</a></p>
                                            <a href="#" class="remove">Устгах</a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="product-thumbnail"><img src="admin/upload/asd.jpg" alt="Product1"></td>
                                        <td class="product-info">
                                            <p><a href="#">dell i3</a></p>
                                            <a href="#" class="remove">Устгах</a>
                                        </td>
                                    </tr>
                                    
                                </table>
                                <div class="padding-box">
                                    <a  href="compare_products.php" class="button grey">Харыцуулсан бараа</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /Compare Products -->
                    
                    
               
                    
                    
                    <!-- Bestsellers -->
                    <div class="row sidebar-box red">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="sidebar-box-heading">
                            <i class="icons icon-award-2"></i>
                                <h4>Их борлуулалттай</h4>
                            </div>
                            
                            <div class="sidebar-box-content">
                                <table class="bestsellers-table">
                                    
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="admin/upload/asd.jpg" alt="Product1"></a></td>
                                        <td class="product-info">
                                            <p><a href="#">Dell i3</a></p>
                                            <span class="price">1350000₮</span>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="admin/upload/7797750b1318d70633877fe0f4ad2b53298.jpg" alt="Product1"></a></td>
                                        <td class="product-info">
                                            <p><a href="#">Samsung i7</a></p>
                                            <span class="price">1500000₮</span>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="admin/upload/3ef0e400913ab2c6da93707585db7b34375.jpg" alt="Product1"></a></td>
                                        <td class="product-info">
                                            <p><a href="#">HP i5</a></p>
                                            <div class="rating readonly-rating" data-score="4"></div>
                                            <span class="price"><del>1500000₮</del> 1350000₮</span>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- /Bestsellers -->
                    
                    
                    <!-- Tag Cloud -->
                    <div class="row sidebar-box green">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="sidebar-box-heading">
                                <i class="icons icon-tag-6"></i>
                                <h4>Тагууд</h4>
                            </div>
                            
                            <div class="sidebar-box-content sidebar-padding-box">
                                <a href="#" class="tag-item">digital camera</a>
                                <a href="#" class="tag-item">lorem</a>
                                <a href="#" class="tag-item">gps</a>
                                <a href="#" class="tag-item">headphones</a>
                                <a href="#" class="tag-item">ipsum</a>
                                <a href="#" class="tag-item">laptop</a>
                                <a href="#" class="tag-item">smartphone</a>
                                <a href="#" class="tag-item">tv</a>
                            </div>
                                
                        </div>
                        
                    </div>
                    <!-- /Tag Cloud -->
                    
                    
                  