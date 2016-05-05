<!DOCTYPE html>
<?php include('admin/connect.php'); 
include('session.php');?>
<html>

<?php include('header.php');?>
    
    
    <body>
        
        <!-- Container -->
        <div class="container">
            
            <!-- Header -->
            <?php include('navtop.php'); ?>
            <!-- /Header -->
            
            
            <!-- Content -->
            <div class="row content">
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumbs">
                        <p><a href="#">Нүүр</a> <i class="icons icon-right-dir"></i> Хувийн мэдээлэл</p>
                    </div>
                </div>
                
                <!-- Main Content -->
               <section class="main-content col-lg-9 col-md-9 col-sm-9">
                <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <form name="selesai" action="aa.php" method="post">
                          <div class="row-fluid">
                                <div class="span6">
                                    <h4>Хувийн мэдээлэл &amp; хүргэх хаяг</h4> 
                                    <div class="control-group">
                                        <label class="control-label">Нэр</label>
                                        <div class="controls">
                                            <input type="text" required placeholder="Нэр" name="nama" class="input-xlarge">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Оршин байгаа хаяг</label>
                                        <div class="controls">
                                            <input type="text" required placeholder="Оршин байгаа хаяг" name="alamat" class="input-xlarge">
                                        </div>
                                    </div>                    
                                    <div class="control-group">
                                        <label class="control-label">Майл</label>
                                        <div class="controls">
                                            <input type="text" required placeholder="Майл" name="email" class="input-xlarge">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Утас</label>
                                        <div class="controls">
                                            <input type="text" required placeholder="Утас" name="telepon" class="input-xlarge">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" name="selesai" class="btn btn-primary">Тооцоо хийх!</button>
                                </div>
                                
                                <div class="span5">
                                    <h4>Сагсанд байгаа бүтээгдэхүүн</h4>
                                    <div class="block">                                                             
                                        <ul class="small-product">
                                            <?php 
                                                $i=1;
                                                foreach($_SESSION as $name => $value){
                                                    if($value > 0)
                                                    {
                                                        if(substr($name, 0, 5) == 'cart_')
                                                        {
                                                            $id = substr($name, 5, (strlen($name)-5));
                                                            $get = mysql_query("SELECT * FROM tb_products WHERE productID='$id'");
                                                            while($get_row = mysql_fetch_assoc($get)){
                                                                $sub = $get_row['price'] * $value;
                                                                
                                                                echo '
                                                                <li>
                                                                    <h5>'.$i.' . &nbsp; &nbsp; &nbsp; '.$get_row['name'].'&nbsp; &nbsp; &nbsp; Тоо: '.$value.'ш &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Нийт үнэ: '.$sub.' ₮</h5>
                                                                    
                                                                </li>';
                                                              
                                                                $i++;
                                                            }       
                                                        }
                                                        @$total += $sub;
                                                    }
                                                }
                                              ?>
                                              <?php echo '<h5 style="color:#F00">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Нийт үнэ: '.@$total.' </h5>'; ?>
                                        </ul>
                                    </div>
                                </div>          
               
                          </div>
                          <input type="hidden" value="<?php echo abs((int)$_GET['total']); ?>" name="total">
                          </form>               
                    </div>
                </div>
            </section>  
                <!-- /Main Content -->
                
                
                <!-- Sidebar -->
                <aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
                    
                    <?php include('arheseg.php'); ?>
                    
                </aside>
                <!-- /Sidebar -->
                
            </div>
            <!-- /Content -->
            
            
            


            
            <!-- Banner -->
              <?php include('banner.php'); ?>
            <!-- /Banner -->
            
            

            
            <!-- Footer -->
              <?php include('footer.php'); ?>
            <!-- Footer -->
            
            
           
            
        </div>
        <!-- Container -->
        
        
        
      

        
    </body>
    
</html>