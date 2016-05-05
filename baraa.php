<!DOCTYPE html>

<html>

<?php include('header.php');
include('logcheck.php');
?>
    
    
    <body>
        
        <!-- Container -->
     
            
            
             <?php include('navtop.php'); ?>
            
            <!-- Content -->
            <div class="row content">
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumbs">
                        <p><a href="#">Нүүр</a> <i class="icons icon-right-dir"></i>Бараанууд</p>
                    </div>
                </div>
                
                <!-- Main Content -->
                <section class="main-content col-lg-9 col-md-9 col-sm-9">
                        
                    <div class="row">
                    
                        <!-- Heading -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="carousel-heading">
                                <h4>Бараанууд</h4>
                            </div>
                            
                            <div class="categories-heading">
                                <a href="#"><img src="img/category-heading.jpg" alt=""></a>
                                
                            </div>
                            
                        </div>
                        <!-- /Heading -->
                        
                        
                        
                    </div>
                     
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="category-heading">
                                <select class="chosen-select">
                                    <option>Барааны нэр</option>
                                
                                </select>
                                <select class="chosen-select">
                                    <option>Сонгох </option>
                                    <option>Барааны нэр</option>
                                     <option>Барааны нэр</option>
                                      <option>Барааны нэр</option>
                                       <option>Барааны нэр</option>
                                </select>
                                <div class="category-buttons">
                                    <a href="category_v1.html"><i class="icons icon-th-3"></i></a>
                                    <a href="category_v2.html"><i class="icons icon-th-list-4 active-button"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="category-results">
                                <p>Илэрц 1-6 of 6</p>
                                <p>Харагдац 
                                <select class="chosen-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>6</option>
                                    <option>P10</option> 
                                </select>
                                Хуудас
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="pagination">
                                <a href="#"><div class="previous"><i class="icons icon-left-dir"></i></div></a>
                                <a href="#"><div class="page-button">1</div></a>
                                <a href="#"><div class="page-button">2</div></a>
                                <a href="#"><div class="page-button">3</div></a>
                                <a href="#"><div class="next"><i class="icons icon-right-dir"></i></div></a>
                            </div>
                        </div>
                        
                   </div>
                   
                   <div class="row"> 
                   <?php include('admin/connect.php'); ?>
                              <?php
                            $query = mysql_query("select * from tb_products") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['productID'];
                                   $qty = $row['quantity'];
                                
                                    $query1 = mysql_query("SELECT *,SUM(qty) as qty FROM order_details WHERE productID = '$id' AND status = 'Delivered'");
                                    $row1 = mysql_fetch_array($query1);
                                    $total_qty = $qty - $row1['qty'];
                                ?>
                        <!-- Product Item -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="grid-view product">
                                <div class="product-image col-lg-4 col-md-4 col-sm-4">
                                    <a  href="#<?php echo $id; ?>"   ><img src="admin/<?php echo $row['location'] ?>"  ></a>
                                    <a href="products_page_v1.php?id=<?php echo $id; ?>" class="product-hover">
                                                        <i class="icons icon-eye-1"></i> Үзэх
                                                    </a>
                                </div>
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 product-content no-padding">
                                    <div class="product-info">
                                        <h5><?php echo $row['name'] ?></h5>
                                        <span class="price"><?php echo $row['price'] ?>₮</span>
                                        <div class="rating-box">
                                            <div class="rating readonly-rating" data-score="4"></div>
                                            <span>3 Review(s)</span>
                                        </div>
                                        <p><?php echo $row['description'] ?></p>        
                                    </div>


                                    <div class="product-actions full-width">
                                        <span class="add-to-cart">
                                            <span class="action-wrapper">
                                                <i class="icons icon-basket-2"></i>
                                                    <?php if($total_qty > 0){ ?>
                                        <span class="action-name"><a href="cart.php?add=<?php echo $id; ?>" >&nbsp;Сагсанд нэмэх</a></span>
                                        <?php }else{ ?>
                                       <span class="action-name">Дууссан</span>
                                        <?php } ?>  
                                            </span>
                                        </span>
                                        <span class="add-to-favorites">
                                            <span class="action-wrapper">
                                                <i class="icons icon-heart-empty"></i>
                                                <span class="action-name">Таалагдсан</span>
                                            </span>
                                        </span>
                                        <span class="add-to-compare">
                                            <span class="action-wrapper">
                                                <i class="icons icon-docs"></i>
                                                <span class="action-name"><a href="compare_products.php?add=<?php echo $id; ?>" >&nbsp;Харьцуулах</a></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php } ?>
                        <!-- Product Item -->

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="category-results">
                                <p>Илэрц 1-6 of 6</p>
                                <p>Харагдац 
                                <select class="chosen-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>6</option>
                                    <option>P10</option> 
                                </select>
                                Хуудас
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="pagination">
                                <a href="#"><div class="previous"><i class="icons icon-left-dir"></i></div></a>
                                <a href="#"><div class="page-button">1</div></a>
                                <a href="#"><div class="page-button">2</div></a>
                                <a href="#"><div class="page-button">3</div></a>
                                <a href="#"><div class="next"><i class="icons icon-right-dir"></i></div></a>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                        
                </section>
                <!-- /Main Content -->
                
                
                
                
                <!-- Sidebar -->
                <aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
                    
                    <!-- Filter -->
                   <?php include('filter.php'); ?>
                    
                    
                    <?php include('arheseg.php'); ?>
                    
                    
                </aside>
                <!-- /Sidebar -->
                
            </div>
            <!-- /Content -->
            
            

            <!-- Banner -->
            <?php include('banner.php'); ?>
            <!-- /Banner -->

            
            <!-- Footer -->
         <?php include('footer.php');?>
            <!-- Footer -->
            
          
        </div>
        <!-- Container -->
        
    </body>
    
</html>