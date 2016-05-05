    <!-- Container -->
        <div class="container">
            
            <!-- Header -->
            <header class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                    
                    <!-- Top Header -->
                    <div id="top-header">
                        
                        <div class="row">
                            
                            <nav id="top-navigation" class="col-lg-7 col-md-7 col-sm-7">
                                <ul class="pull-left">
                                    <li><a href="Whistlist.php">Таалагдсан бараа</a></li>
                                    <li><a href="compare_products.php">Харьцуулсан бараа</a></li>
                                    <li><a href="cart.php">Сагс</a></li>
                                    <li><a href="about.php">Бидний тухай</a></li>
                                    <li><a href="contact.php">Холбоо барих</a></li>
                                </ul>
                            </nav>
                            
                            <nav class="col-lg-5 col-md-5 col-sm-5">
                                <ul class="pull-right">
                                    <li><a href="#">₮ MN Төгрөг <i class="icons icon-down-dir"></i></a>
                                        <ul class="box-dropdown parent-arrow">
                                            <li>
                                                <div class="box-wrapper no-padding parent-border">
                                                    <table class="currency-table">
                                                        <tr>
                                                            <td><a href="#">₮ MN Төгрөг</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">€ Euro</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">£ Pound</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                        
                    </div>
                    <!-- /Top Header -->
                    
                      <?php 
                            if(@$_SESSION['id'] == 0){
                                    include ('dedlogin.php');
                                } else {
                                    include ('dedlogin2.php');;
                                }
                        ?>  
                    
                    <!-- Main Header -->
               
                    <!-- /Main Header -->
  
                    <nav id="main-navigation" class="style1">
                        <ul>
                            
                            <li class="home-green">
                                <a href="index.php">
                                    <i class="icons icon-shop-1"></i>
                                    <span class="nav-caption">Нүүр</span>
                                    <span class="nav-description">Нүүр хуудас</span>
                                </a>
                                
                                <ul class="normal-dropdown normalAnimation">
                                    <li><a href="#">Layouts <i class="icons icon-right-dir"></i></a>
                                        <ul class="normalAnimation">
                                            <li><a href="home_v1.html">Layout 1</a></li>
                                            <li><a href="home_v2.html">Layout 2</a></li>
                                            <li><a href="home_v3.html">Layout 3</a></li>
                                        </ul>
                                    </li>
                                   
                                   
                                </ul>
                            </li>
                            
                            <li class="red">
                                <a href="baraa.php">
                                    <i class="icons icon-camera-7"></i>
                                    <span class="nav-caption">Бараа</span>
                                    <span class="nav-description">Электрон бараа</span>
                                </a>
                                
                                
                                
                            </li>
                         
                            <li class="blue">
                                <a href="cat.php?id=1">
                                    <i class="icons icon-desktop-3"></i>
                                    <span class="nav-caption">Компьютер</span>
                                    <span class="nav-description">Нөүтбүүк</span>
                                </a>
                            </li>
                            
                            <li class="orange">
                                <a href="cat.php?id=2">
                                    <i class="icons icon-mobile-6"></i>
                                    <span class="nav-caption">Гар утас</span>
                                    <span class="nav-description">Ухаалаг утас</span>
                                </a>
                            </li>
                            
                            <li class="green">
                                <a href="cat.php?id=3">
                                    <i class="icons icon-pencil-7"></i>
                                    <span class="nav-caption">Зурагт</span>
                                    <span class="nav-description">OLED & Ultra HD</span>
                                </a>
                            </li>
                            
                            <li class="purple">
                                <a href="contact.php">
                                    <i class="icons icon-location-7"></i>
                                    <span class="nav-caption">Холбоо барих</span>
                                    <span class="nav-description">Санал хүсэлт</span>
                                </a>
                            </li>
                            
                            <li class="nav-search">
                                    <i class="icons icon-search-1"></i>
                            </li>
                            
                        </ul>
                        
                        <form action="search.php" method="POST" name="form1" id="search-bar">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <table id="search-bar-table">
                                    <tr>
                                        <td class="search-column-1" >
                                            <p><span class="grey">Эрэлттэй хайлт:</span> <a href="#">accessories</a>, <a href="#">audio</a>, <a href="#">camera</a>, <a href="#">phone</a>, <a href="#">storage</a>, <a href="#">more</a></p>
                                            <input type="text" name="txtKeyword"  placeholder="Хайх утга...">
                                        </td>
                                       
                                    </tr>
                                </table>
                            </div>
                            <div id="search-button">
                                <input type="submit" name="btnCari" value="">
                                <i class="icons icon-search-1"></i>
                            </div>
                        </form>
                        
                    </nav>



                    