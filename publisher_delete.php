<?php 
 include('connect.php');
 $publisher_id=$_GET['publisher_id'];
 $sql="delete from publisher where publisher_id='$publisher_id'";
 mysqli_query($connect,$sql);
 header('location:show_publisher.php')
?>