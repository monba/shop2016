<?php
include('connect.php');

$get_id=$_GET['id'];

mysql_query("delete from category where category_id='$get_id'")or die(mysql_error());
header('location:category.php');
?>
