<?php 
 include('connect.php');
 $subject_id=$_GET['subject_id'];
 $sql="delete from subject where subject_id='$subject_id'";
 mysqli_query($connect,$sql);
 header('location:show_subject.php')
?>