 <?php include ('admin/connect.php'); ?>
 <div id="main-header">
                        
                        <div class="row">
                            
                            <div id="logo" class="col-lg-4 col-md-4 col-sm-4">
                                <a href="home_v1.html"><img src="img/logo.png" alt="Logo"></a>
                            </div>
                            
                            <nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
                                <ul class="pull-right">
                                    <li class="blue">
                                        <a href="compare_products.php"><i class="icons icon-docs"></i>0 бараа</a>
                                    </li>
                                    <li class="red">
                                        <a href="wishlist.php"><i class="icons icon-heart-empty"></i>2 бараа</a>
                                    </li>
                                    <li class="orange"><a href="cart.php"><i class="icons icon-basket-2"></i>
                                     <?php
                    $count_query = mysql_query("select * from order_details where memberID='$ses_id' and status='Pending'") or die(mysql_error());
                    $count = mysql_num_rows($count_query);
                    ?>
                    <?php echo $count; ?> бараа</a>
                                        <ul id="cart-dropdown" class="box-dropdown parent-arrow">
                                            <li>
                                                <div class="box-wrapper parent-border">
                                                    <p>Сагс</p>
                                                    
                                                    <table class="cart-table">
                                                        <tr>
                                                            <td><img src="img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>asus</h6>
                                                                <p>барааны код 1</p>
                                                            </td>
                                                            <td>
                                                                <span class="quantity"><span class="light">1 x</span> 750000₮</span>
                                                                <a href="#" class="parent-color">Устгах</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>Dell</h6>
                                                                <p>барааны код 3</p>
                                                            </td>
                                                            <td>
                                                                <span class="quantity"><span class="light">1 x</span>1500000₮</span>
                                                                <a href="#" class="parent-color">Устгах</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>Hp</h6>
                                                                <p>барааны код 3</p>
                                                            </td>
                                                            <td>
                                                                <span class="quantity"><span class="light">1 x</span>1000000₮</span>
                                                                <a href="#" class="parent-color">Устгах</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    
                                                    <br class="clearfix">
                                                </div>
                                                
                                                <div class="footer">
                                                    <table class="checkout-table pull-right">
                                                        <tr>
                                                            <td class="align-right">сагсанд байгаа барааны тоо:</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-right"><strong>Нийт үнэ:</strong></td>
                                                            <td><strong class="parent-color">2250000₮</strong></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                
                                                <div class="box-wrapper no-border">
                                                    <a class="button pull-right parent-background" href="#">Checkout</a>
                                                    <a class="button pull-right" href="cart.php">Сагсруу орох</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="login-create purple">
                                        <i class="icons icon-user"></i>


                                        <p>Сайн байна уу
                                        <?php
                                        
                                        $user_query = mysql_query("select * from tb_member where memberID='$ses_id'") or die(mysql_error());
                                        $row = mysql_fetch_array($user_query);
                                        echo $row['Lastname'];
                                        ?></p>
                                        <ul id="login-dropdown" class="box-dropdown">
                                            <li>
                                                <div class="box-wrapper">
                                                    <h4>Хувийн тохиргоо</h4>
                                                    
                                                    <div class="iconic-input">
                                                    
                                                    <?php  echo '<a href = "user_read.php?id='.$row['memberID'].'" class = "btn"><i class="icon-cog icon-large"></i>&nbsp;Хувийн мэдээлэл&nbsp;</a> ' ?>

                                                          <?php  echo '<a href = "order_list.php?id='.$row['memberID'].'" type="submit" class = "purple">Захиалга</a> ' ?>
                                                        
                                                    </div>
                                                 
                                                   
                                                </div>
                                                <div class="footer">
                                                    <h4 class="pull-left">HOMESHOP</h4>
                                                    <a class="button pull-right" href="Logout.php">Гарах</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        
                    </div>