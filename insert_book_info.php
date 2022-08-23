<?php
include('connect.php');
if(empty($_FILES['book_image']['name'])){
  $book_image="";
}else{
  $book_image= mt_rand(1000,9999).$_FILES['book_image']['name'];
move_uploaded_file($_FILES['book_image']['tmp_name'],"book_image/$book_image");
}
if(empty($_FILES['author_image']['name'])){
  $author_image="";
}else{
  $author_image= mt_rand(1000,9999).$_FILES['author_image']['name'];
move_uploaded_file($_FILES['author_image']['tmp_name'],"author_image/$author_image");
}



$book_name=$_POST['book_name'];
$author_id=$_POST['author_id'];
$series_id=$_POST['series_id'];
$subject_id=$_POST['subject_id'];
$publisher_id=$_POST['publisher_id'];
$Publication_date=$_POST['Publication_date'];
$Language=$_POST['Language_name'];
$syllabus_id=$_POST['syllabus_id'];
$book_price=$_POST['book_price'];



  $sql="INSERT INTO book_info (book_name,author_id,series_id,subject_id,publisher_id,Publication_date,  language_name,syllabus_id,book_price,book_image,author_image)
  VALUES ('$book_name','$author_id','$series_id','$subject_id','$publisher_id','$Publication_date','$Language','$syllabus_id','$book_price','$book_image','$author_image')"; 
  
  mysqli_query($connect,$sql);
  header("location:show_book_info.php");
?>