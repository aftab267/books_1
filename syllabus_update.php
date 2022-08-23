<?php 
 include('connect.php');
 $syllabus_id=$_POST['syllabus_id'];
 $syllabus_name= $_POST['syllabus_name'];
  $sql="UPDATE syllabus SET syllabus_name='$syllabus_name' where syllabus_id='$syllabus_id'";
  $query=mysqli_query($connect,$sql);
  header('location:show_syllabus.php')
?>