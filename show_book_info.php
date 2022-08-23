<?php 
include('header.php');
?>

<?php
require('connect.php');
$sql="SELECT book_info.*, author.author_name,series.series_name, subject.subject_name,publisher.publisher_name,syllabus.syllabus_name FROM book_info
      left join author on author.author_id=book_info.author_id 
      left join series on series.series_id=book_info.series_id
      left join subject on subject.subject_id=book_info.subject_id
      left join publisher on publisher.publisher_id=book_info.publisher_id
      left join syllabus on syllabus.syllabus_id=book_info.syllabus_id";
$query=mysqli_query($connect,$sql);
?>
<a  href="book_info.php" class="btn btn-primary">Insert</a>
<table class="table table-bordered table-hover">
  <tr>
    <td><b>SL</b></td>
    <td><b>Book Name<b></td>
    <td><b>Author Name<b></td>
    <td><b>Series Name<b></td>
    <td><b>Subject Name<b></td>
    <td><b>Publisher Name<b></td>
    <td><b>Publication Date<b></td>
    <td><b>Language name<b></td>
    <td><b>Syllabus Name<b></td>
    <td><b>Book Price<b></td>
    <td><b>Book Image<b></td>
    <td><b>Author Image<b></td>
    <td><b>Action<b></td>
  </tr>
  <?php
  $x=1;
  foreach($query as $val){
  ?>
  <tr>
    <td><?php echo $x++ ?></td>
    <td><?php echo $val['book_name'] ?></td>
    <td><?php echo $val['author_name'] ?></td>
    <td><?php echo $val['series_name'] ?></td>
    <td><?php echo $val['subject_name'] ?></td>
    <td><?php echo $val['publisher_name'] ?></td>
    <td><?php echo $val['publication_date'] ?></td>
    <td><?php echo $val['language_name'] ?></td>
    <td><?php echo $val['syllabus_name'] ?></td>
    <td><?php echo $val['book_price'] ?></td>
    <td><img src="book_image/<?php echo $val['book_image'] ?>" width='100' height='100'></td>
    <td><img src="author_image/<?php echo $val['author_image'] ?>" width='100' height='100'> </td>

    <td>
     <a href="edit_book_info.php?book_id=<?php echo $val['book_id'] ?>"><button class="btn btn-primary">Edit</button></a>
      <a href="book_info_delete.php?book_id=<?php echo $val['book_id'] ?>" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php
  }
  ?>
</table>  

<?php 
include('footer.php');
?>



