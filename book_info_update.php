<?php 
 include('connect.php');
 $book_id=$_POST['book_id'];
 $book_name=$_POST['book_name'];
$author_id=$_POST['author_id'];
$series_id=$_POST['series_id'];
$subject_id=$_POST['subject_id'];
$publisher_id=$_POST['publisher_id'];
$publication_date=$_POST['publication_date'];
$language_name=$_POST['language_name'];
$syllabus_id=$_POST['syllabus_id'];
$book_price=$_POST['book_price'];
$book_image=$_FILES['book_image']['name'];
$author_image=$_FILES['author_image']['name'];

$sql="select * from book_info where book_id='$book_id'";
$query=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($query);
if($_FILES['book_image']['name']){
  $book_image= mt_rand(1000,9999).$_FILES['book_image']['name'];
move_uploaded_file($_FILES['book_image']['tmp_name'],"book_image/$book_image");
if(file_exists("book_image/".$data['book_image'])){
  unlink("book_image/".$data['book_image']);
}
}
else if($data['book_image']){
  $book_image=$data['book_image'];
 
}else{
  $book_image=NULL;
  
}
if($_FILES['author_image']['name']){
  $author_image= mt_rand(1000,9999).$_FILES['author_image']['name'];
move_uploaded_file($_FILES['author_image']['tmp_name'],"author_image/$author_image");
if(file_exists("author_image/".$data['author_image'])){
  unlink("author_image/".$data['author_image']);
}
 
}else if($data['author_image']){
  $author_image=$data['author_image'];
}else{
  $author_image=NULL;
}  
 $sql="UPDATE book_info SET book_name='$book_name', author_id='$author_id',series_id='$series_id',subject_id='$subject_id'
  ,publisher_id='$publisher_id',publication_date='$publication_date',language_name='$language_name',syllabus_id='$syllabus_id',book_price='$book_price', book_image='$book_image',author_image='$author_image'   WHERE book_id='$book_id'";
  
  $query=mysqli_query($connect,$sql);
  header('location:show_book_info.php');
?>