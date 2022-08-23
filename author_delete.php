<?php 
 include('connect.php');
 $author_id=$_GET['author_id'];
 $sql="delete from author where author_id='$author_id'";
 mysqli_query($connect,$sql);
 header('location:show_author.php')
?>