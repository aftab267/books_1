<?php 
 include('connect.php');
 $subject_id=$_POST['subject_id'];
 $subject_name= $_POST['subject_name'];
$sql="UPDATE subject SET subject_name='$subject_name' where subject_id='$subject_id'";
  $query=mysqli_query($connect,$sql);
  header('location:show_subject.php')
?>