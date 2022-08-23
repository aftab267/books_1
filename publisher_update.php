<?php 
 include('connect.php');
 $publisher_id=$_POST['publisher_id'];
 $publisher_name= $_POST['publisher_name'];
  $publisher_address= $_POST['publisher_address'];
   $publisher_phone= $_POST['publisher_phone'];
    $publisher_email= $_POST['publisher_email'];

  $sql="UPDATE publisher SET publisher_name='$publisher_name',address='$publisher_address',phone='$publisher_phone',email='$publisher_email' WHERE publisher_id='$publisher_id'";

  $query=mysqli_query($connect,$sql);
  header('location:show_publisher.php')
?>