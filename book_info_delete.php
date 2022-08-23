<?php
include('connect.php');
$book_id=$_GET['book_id'];
$sql="select * from book_info where book_id='$book_id'";
$query=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($query);

$sql="delete from book_info where book_id='$book_id'";
mysqli_query($connect,$sql);
header('location:show_book_info.php?message=Data Deleted Successfully');



?>