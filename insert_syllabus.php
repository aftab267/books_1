<?php

include('connect.php');

$syllabus_name= $_POST['syllabus_name'];
$sql="INSERT INTO syllabus(syllabus_name) VALUES ('$syllabus_name')";
$query=mysqli_query($connect,$sql);
header("location:show_syllabus.php");

?>
