<?php

include('connect.php');

$author= $_POST['author_name'];
$sql="INSERT INTO author(author_name) VALUES ('$author')";
$query=mysqli_query($connect,$sql);
header("location:show_author.php");

?>
