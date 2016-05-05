<!DOCTYPE html>

<html>

<?php include('header.php');
include('logcheck.php');?>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Header -->
			<?php include('navtop.php');?>
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="#">Нүүр</a> <i class="icons icon-right-dir"></i>Бүртгүүлэх</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                   
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Бүртгүүлэх</h4>
                            </div>
                            
                            <div class="page-content">
                            <?php
                            include('admin/connect.php'); 
                                    if (isset($_POST['save'])) {

                                        $pass_error = '';
                                        $e_firstname = '';
                                        $e_lastname = '';
                                        $e_password = '';
                                        $e_rpassword = '';
                                        $e_address = '';
                                        $e_cn = '';

                                        $e = '';



                                        $password = $_POST['password'];
                                        $rpassword = $_POST['rpassword'];
                                        $firstname = $_POST['firstname'];
                                        $lastname = $_POST['lastname'];
                                        $eaddress = $_POST['eaddress'];
                                        $address = $_POST['address'];
                                        $cn = $_POST['cn'];

                                        $pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";
                                        //Input Validations

                                        if (!preg_match($pattern, $eaddress)) {
                                            $e = " Email шаардлагатай байна";
                                        }


                                        if ($firstname == "") {

                                            $e_firstname = 'Овог шаардлагатай байна';
                                        }
                                        if ($lastname == "") {

                                            $e_lastname = 'Нэр шаардлагатай байна';
                                        }
                                        if ($address == "") {

                                            $e_address = 'Хаяг шаардлагатай байна';
                                        }

                                        if ($cn == "") {

                                            $e_cn = 'Холбоо барих дугаар шаардлагатай байна';
                                        }
                                        if ($password != $rpassword) {

                                            $pass_error = 'Нууц үг тохирохгүй байна';
                                        } else {
                                            $pass_error = '';
                                        }
                                        if ($password == "") {

                                            $e_password = 'Нууц үг шаардлагатай';
                                        }
                                        if ($rpassword == "") {

                                            $e_rpassword = 'Нууц үг дахин оруулах';
                                        }



                                        if ($firstname != "" && $password == $rpassword && $lastname != "" && $eaddress != "" && $cn != "" && $address != "" && preg_match($pattern,$eaddress) ) {
                                            mysql_query("insert into tb_member (Firstname,Lastname,Email,Password,Contact_Number,address) values
                                         ('$firstname','$lastname','$eaddress','$password','$cn','$address')") or die(mysql_error());
                                            ?>

                                            <script type="text/javascript">
                                                alert("You are Succesfully Register Please Login Your Account");
                                                window.location= "index.php";
                                            </script>


                                            <?php
                                        }
                                    }
                                    ?>
                                      <form class="form-horizontal" method="post" enctype="multipart/form-data">

                            	<div class="row">
                                	
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<p><strong>Үйлчлүүлэгчийн мэдээлэл</strong></p> 
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>И-Мэйл*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="eaddress">
                                    </div>	
                                    <?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs"> <?php echo $e; ?></div>

<?php } ?>   
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Хэрэглэгчийн нэр*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text"name="firstname">
                                    </div>	
                                    <?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_firstname; ?> </div>

<?php } ?>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Сайтад харагдах нэр*</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text"name="lastname">
                                    </div>	
                                    <?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_lastname; ?> </div>

<?php } ?>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Нууц үг</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text"  name="password">
                                    </div>
                                    <?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs"> <?php echo $e_password; ?></div>

<?php } ?>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Нууц үг дахин оруул</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text"name="rpassword">
                                    </div>	
                                    <?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_rpassword; ?> </div>

                                                <?php } ?>

<?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs"><?php echo $pass_error; ?></div>

<?php } ?>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Би үйлчилгээний нөхцлийг хүлээн зөвшөөрч байна</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="checkbox" id="i-agree-to-terms"><label for="i-agree-to-terms"></label>
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<p><strong>Захиалга</strong></p>
                                    </div>
                                    	
                                    
                                </div>
                                
                             
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Хаяг</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text"name="address">
                                    </div>	
                                    <?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_address; ?> </div>

<?php } ?>
                                    
                                </div>
                                
                              
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Утасны дугаар</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text"name="cn">
                                    </div>	
                                    <?php if (isset($_POST['save'])) { ?>

                                                    <div class="wrongs">   <?php echo $e_cn; ?> </div>

<?php } ?>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<input  name="save" class="big" type="submit" value="Бүртгүүлэх">
                                    	&nbsp;
                                        <input class="big" type="reset" value="Мэдээлэл арилгах">
                                    </div>
                                    
                                </div>
                                  </form>

                            </div>
                            
                    	</div>
                          
                    </div>
                        
                    
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
				<?php include('arheseg.php');?>
                    
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