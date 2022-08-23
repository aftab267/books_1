<?php 
include('header.php');
?>

<?php
include('connect.php');
$sql="SELECT * FROM author";
$query=mysqli_query($connect,$sql);
?>
<a  href="author.php" class="btn btn-primary">Insert</a>
<table class="table table-bordered table-hover">
  <tr>
    <td><b>SL</b></td>
    <td><b>Author Name<b></td>
    <td><b>Action<b></td>
  </tr>
  <?php
  $x=1;
  foreach($query as $val){

  ?>
  <tr>
    <td><?php echo $x++ ?></td>
    <td><?php echo $val['author_name'] ?></td>
    
    <td>
     <a href="edit_author.php?author_id=<?php echo $val['author_id'] ?>"><button class="btn btn-primary">Edit</button></a>
      <a href="author_delete.php?author_id=<?php echo $val['author_id'] ?>" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php
  }
  ?>
</table>  

<?php 
include('footer.php');
?>



