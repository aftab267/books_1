<?php 
 include('connect.php');
 $author_id=$_POST['author_id'];
 $author_name= $_POST['author_name'];
  $sql="UPDATE author SET author_name='$author_name' where author_id='$author_id'";
  $query=mysqli_query($connect,$sql);
  header('location:show_author.php')
?>