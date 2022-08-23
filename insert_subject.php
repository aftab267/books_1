<?php

include('connect.php');

$subject_name= $_POST['subject_name'];
$sql="INSERT INTO subject (subject_name) VALUES ('$subject_name')";
$query=mysqli_query($connect,$sql);
header("location:show_subject.php");

?>
