<?php 
 include('connect.php');
 $syllabus_id=$_GET['syllabus_id'];
 $sql="delete from syllabus where syllabus_id='$syllabus_id'";
 mysqli_query($connect,$sql);
 header('location:show_syllabus.php')
?>