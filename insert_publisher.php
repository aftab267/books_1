<?php

include('connect.php');

$publisher_name= $_POST['publisher_name'];
$publisher_address= $_POST['publisher_address'];
$publisher_phone= $_POST['publisher_phone'];
$publisher_email= $_POST['publisher_email'];
$sql="INSERT INTO publisher(publisher_name,address,phone,email) VALUES ('$publisher_name','$publisher_address','$publisher_phone','$publisher_email')";
$query=mysqli_query($connect,$sql);
header("location:show_publisher.php");

?>
