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
                        <p><a href="#">Нүүр</a> <i class="icons icon-right-dir"></i> Төлбөр</p>
                    </div>
                </div>
                
                <!-- Main Content -->
             <section class="main-content">
                <div class="row">
                    <div class="span12">                          
                        <?php
                                                  
                              $nama = $_POST['nama'];
                              $alamat = $_POST['alamat'];
                              $email = $_POST['email'];
                              $telp = $_POST['telepon'];
                              $total = $_POST['total'];
                              
                              echo '<a href="index.php">Буцах</a><br>';
                              
                              echo 'Баярлалаа та манай онлайн дэлгүүрт худалдан авалт хийсэн байна . ';
                              echo '<p>Барааг доорх хаягаар илгээх болно :</p>';
                              echo '<p>Нэр : '.$nama.'<br>';
                              echo '<p>Хаяг : '.$alamat.'</p>';
                              echo '<p>Таны худалдан авалтын нийт дүн: '.$total.'</p>';
                              
                              
                              $p = mysql_query("SELECT * FROM tb_member");
                              $cek= mysql_fetch_array($p);
                              $c1 = $cek['Lastname'];
                              $c2 = $cek['address'];
                              $c3 = $cek['Email'];
                              $c4 = $cek['Contact_Number'];
                              
                              if($c1 == $nama && $c2 == $alamat && $c3 == $email && $c4 == $telp)
                              {
                                    $i=1;
                                    foreach($_SESSION as $name => $value)
                                    {
                                        if($value > 0)
                                        {
                                            if(substr($name, 0, 5) == 'cart_')
                                            {
                                                $id = substr($name, 5, (strlen($name)-5));
                                                $get = mysql_query("SELECT * FROM tb_products WHERE productID='$id'");
                                                while($get_row = mysql_fetch_assoc($get)){
                                                    $sub = $get_row['price'] * $value;
                                                    
                                                    echo '<p>'.$i.' '.$get_row['productID'].' '.$get_row['name'].' '.$value.' <br> Үнэ :  '.$sub.'₮</p>                               ';                                          
                                                    
                                                    $getPembeli = mysql_query("SELECT tb_member.memberid, tb_member.Lastname, tb_member.address, tb_products.productID, tb_products.name FROM tb_member, tb_products WHERE lastname='$nama' AND address='$alamat'" ) or die(mysql_error());
                                                    
                                                    $data = mysql_fetch_array($getPembeli);
                                      
                                                    $pemb = $data['memberid'];
                                                    $na = $data['lastname'];
                                                    $al = $data['address'];
                                                    $ib = $get_row['productID'];
                                                    $nb = $get_row['name'];
                                                    
                                                    //echo $total;
                                                    $i++;               
                                                }       
                                            }

                                           
                                            //@$total += $sub;
                                            mysql_query(" INSERT INTO `order_details` (`orderid`, `memberID`, `qty`, `price`, `productID`, `total`, `status`, `modeofpayment`, `transaction_code`, `order_ognoo`, `baraa_ner`, `zahialagchin_ner`, `hayg`) VALUES (NULL, '$pemb', '$value', '$sub', '$ib', '$total', 'pending', Null,Null, now(), '$nb', '$na', '$al') ") or die(mysql_error());
                                           ;
                                        }
                                    }                                     
                              }
                              else
                              {
                                    //Insert Data Pembeli ke Database 
                                    $query = mysql_query("INSERT INTO tb_member VALUES('', '$nama', '$alamat', '$email', '$telp')") or die(mysql_error());  
                                    
                                    $i=1;
                                    foreach($_SESSION as $name => $value)
                                    {
                                        if($value > 0)
                                        {
                                            if(substr($name, 0, 5) == 'cart_')
                                            {
                                                $id = substr($name, 5, (strlen($name)-5));
                                                $get = mysql_query("SELECT * FROM tb_products WHERE productID='$id'");
                                                while($get_row = mysql_fetch_assoc($get)){
                                                    $sub = $get_row['price'] * $value;
                                                    
                                                    echo '<p>'.$i.' Барааны код: '.$get_row['productID'].' Барааны нэр:'.$get_row['name'].' тоо'.$value.' Үнэ :  '.$sub.'₮</p>                                ';                                          
                                                    
                                                    $getPembeli = mysql_query("SELECT tb_member.memberid, tb_member.lastname, tb_member.address, tb_products.productID, tb_products.name FROM tb_member, tb_products WHERE lastname='$nama' AND address='$alamat'" ) or die(mysql_error());
                                                    
                                                    $data = mysql_fetch_array($getPembeli);
                                      
                                                    $pemb = $data['memberID'];
                                                    $na = $data['lastname'];
                                                    $al = $data['address'];
                                                    $ib = $get_row['productID'];
                                                    $nb = $get_row['name'];
                                                    
                                                    //echo $total;
                                                    $i++;               
                                                }       
                                            }
                                            //@$total += $sub;
                                             mysql_query(" INSERT INTO `order_details` (`orderid`, `memberID`, `qty`, `price`, `productID`, `total`, `status`, `modeofpayment`, `transaction_code`, `order_ognoo`, `baraa_ner`, `zahialagchin_ner`, `hayg`) VALUES (NULL, '$pemb', '$value', '$sub', '$ib', '$total', 'pending', Null,Null, now(), '$nb', '$na', '$al') ") or die(mysql_error());
                                        }
                                    }
                              }
                               
                              
                              
                              /*if ($query) 
                              {
                                  header('location:index.php');
                              }*/
                              
                              session_destroy();
                          ?>        
                            
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