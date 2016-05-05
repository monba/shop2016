<?php
include_once "admin/connect.php";
include('logcheck.php');
$filterSql  = "";
// Membaca variabel form
$KeyWord    = isset($_GET['KeyWord']) ? $_GET['KeyWord'] : '';
$txtKeyword = isset($_POST['txtKeyword']) ? $_POST['txtKeyword'] : $KeyWord;

// Jika tombol Cari diklik
if(isset($_POST['btnCari'])){
    if($_POST) {
         // Skrip pencarian
        $filterSql = "WHERE name LIKE '%$txtKeyword%' OR name LIKE '$txtKeyword%'";
    }
}
else {
    if($KeyWord){
         // Skrip pencarian
        $filterSql = "WHERE name LIKE '%$txtKeyword%' OR name LIKE '$txtKeyword%'";
    }
    else {
        $filterSql = "";
    }
}

# Nomor Halaman (Paging)
$baris  = 10;
$hal    = isset($_GET['hal']) ? $_GET['hal'] : 1;
$pageSql= "SELECT * FROM tb_products $filterSql ORDER BY productID DESC";
$pageQry= mysql_query($pageSql) or die ("error paging: ".mysql_error());
$jml    = mysql_num_rows($pageQry);
$maks   = ceil($jml/$baris);
$mulai  = $baris * ($hal-1);
?>
<!DOCTYPE html>
<html>

<?php include('header.php');?>
    
    
    <body>
        
        <!-- Container -->
     
            
            
             <?php include('navtop.php'); ?>
            
            <!-- Content -->
            <div class="row content">
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumbs">
                        <p><a href="#">Нүүр</a> <i class="icons icon-right-dir"></i> Хайлт</p>
                    </div>
                </div>
                
                <!-- Main Content -->
              <section class="main-content col-lg-9 col-md-9 col-sm-9">
 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumbs" align="center">
                          <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>Хайсан утга</strong> " <?php echo $txtKeyword; ?> "</td>
                    </div>
                </div>

<table width="75%" border="0" cellspacing="1" cellpadding="3">
  
<?php
// Menampilkan daftar barang
$barang2Sql = "SELECT tb_products.*,  category.category_name FROM tb_products
            LEFT JOIN category ON tb_products.category_id=category.category_id
            $filterSql
            ORDER BY tb_products.productID ASC LIMIT $mulai, $baris";
$barang2Qry = mysql_query($barang2Sql) or die ("Gagal Query".mysql_error());
$nomor = 0;
while ($barang2Data = mysql_fetch_array($barang2Qry)) {
  $nomor++;
  $KodeBarang = $barang2Data['productID'];
  $KodeKategori = $barang2Data['category_id'];

  // Menampilkan gambar utama
  if ($barang2Data['location']=="") {
        $fileGambar = "noimage.jpg";
  }
  else {
        $fileGambar = $barang2Data['location'];
  }

// Warna baris data
if($nomor%2==1) { $warna=""; } else {$warna="#F5F5F5";}
?>
  <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="grid-view product">
                                <div class="product-image col-lg-4 col-md-4 col-sm-4">
                                    <a  href="#<?php echo $KodeBarang; ?>"   ><img src="admin/<?php echo $fileGambar; ?>"  ></a>
                                    <a href="products_page_v1.php?id=<?php echo $KodeBarang; ?>" class="product-hover">
                                                        <i class="icons icon-eye-1"></i> Үзэх 
                                                    </a>
                                </div>
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 product-content no-padding">
                                    <div class="product-info">
                                       <h5><?php echo $barang2Data['name']; ?></h5>
                                        <span class="price"><?php echo $barang2Data['price']; ?>₮</span>
                                        <div class="rating-box">
                                            <div class="rating readonly-rating" data-score="4"></div>
                                            <span>3 Review(s)</span>
                                        </div>
                                        <p><?php echo $barang2Data['description']; ?></p>    
                                    </div>


                                    <div class="product-actions full-width">
                                        <span class="add-to-cart">
                                            <span class="action-wrapper">
                                                <i class="icons icon-basket-2"></i>
                                                <span class="action-name"><a href="cart.php?add=<?php echo $KodeBarang; ?>" >&nbsp;Сагсанд нэмэх</a></span>
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
                                                <span class="action-name"><a href="compare_products.php?add=<?php echo $KodeBarang; ?>" >&nbsp;Харьцуулах</a></span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
<?php } ?>
  <tr>
    <td colspan="2" align="center"><b>Хуудас:
      <?php
    for ($h = 1; $h <= $maks; $h++) {
            echo "[  <a href='search.php?KeyWord=$txtKeyword&hal=$h'>$h</a> ]";
    }
    ?>
    </b></td>
  </tr>
</table>
    </section>
                <!-- /Main Content -->
                
                
                
                
                <!-- Sidebar -->
                <aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
                    
                    <!-- Filter -->
                 <?php include('filter.php');?>
                    
                   
                    
                    
                   
                    
                    
                    
                <?php include('arheseg.php');?>
                    
                    
                </aside>
                <!-- /Sidebar -->
                
            </div>
            <!-- /Content -->
            
            

            <!-- Banner -->
           <?php include('banner.php');?>
            <!-- /Banner -->

            
            <!-- Footer -->
         <?php include('footer.php');?>
            <!-- Footer -->
            
          
        </div>
        <!-- Container -->
        
    </body>
    
</html>