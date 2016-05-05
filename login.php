<?php include('admin/connect.php'); 
unset($_SESSION['id']);
?>

<!DOCTYPE html>
<html>
<body>
<ul id="login-dropdown" class="box-dropdown">
                                            <li>
                                                <div class="box-wrapper">
                                                    <form class="form-horizontal" method="post">
                            

                                
                              
                                                    <h4>Нэвтрэх</h4>
                                                    <div class="iconic-input">
                                                        <input type="text" name="username" placeholder="Хэрэглэгчийн майл">
                                                        <i class="icons icon-user-3"></i>
                                                    </div>
                                                    <div class="iconic-input">
                                                        <input type="text" name="password"  placeholder="Нууц үг">
                                                        <i class="icons icon-lock"></i>
                                                    </div>
                                                    <input type="checkbox" id="loginremember"> <label for="loginremember">Намайг сана</label>
                                                    <br>
                                                    <br>
                                                    <div class="pull-left">
                                                        <input type="submit" name="login" class="orange" value="Нэвтрэх">
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">Нууц үгээ мартсан?</a>
                                                        <br>
                                                        <a href="#">Хэрэглэгчийн нэрээ мартсан уу?</a>
                                                        <br>
                                                    </div>
                                                    <br class="clearfix">
                                               
                                
                                                    <?php
                                                            if (isset($_POST['login'])) {
                                                 function clean($str) {
                                                $str = @trim($str);
                                                if (get_magic_quotes_gpc()) {
                                                    $str = stripslashes($str);
                                                }
                                                return mysql_real_escape_string($str);
                                                }
                                        
                                                                $username = clean($_POST['username']);
                                                                $password = clean($_POST['password']);

                                                                $query = mysql_query("select * from tb_member where Email='$username' and Password='$password' ") or die(mysql_error());
                                                                $count = mysql_num_rows($query);
                                                                $row = mysql_fetch_array($query);
                                                                if ($count > 0) {
                                                                   
                                                                    
                                                                    $_SESSION['id'] = $row['memberID'];
                                                                    ?>
                                                                    <script>
                                                                        window.location = 'index.php';             
                                                                </script>

                                                  
                                                  <?php
                                                                    session_write_close();
                                                                } else {
                                                                session_write_close();
                                                                    ?>

                                                                    <div class="alert alert-error">Нэвтрэх нэр эсвэл нууц үгээ шалгана уу!</div>
                                                                <?php }
                                                            }
                                                            ?>


                           
                             </form>
                                                </div>
                                                <div class="footer">
                                                    <h4 class="pull-left">Шинэ хэрэглэгч?</h4>
                                                    <a class="button pull-right" href="register.php">Бүртгүүлэх</a>
                                                </div>
                                            </li>
                                        </ul>
</body>
</html>







 
                 
                                               
                                                
                    