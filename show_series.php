<?php 
include('header.php');
?>

<?php
include('connect.php');
$sql="SELECT * FROM series";
$query=mysqli_query($connect,$sql);
?>
<a  href="series.php" class="btn btn-primary">Insert</a>
<table class="table table-bordered table-hover">
  <tr>
    <td><b>SL</b></td>
    <td><b>Series Name<b></td>
    <td><b>Action<b></td>
  </tr>
  <?php
  $x=1;
  foreach($query as $val){

  ?>
  <tr>
    <td><?php echo $x++ ?></td>
    <td><?php echo $val['series_name'] ?></td>
    
    <td>
     <a href="edit_series.php?series_id=<?php echo $val['series_id'] ?>"><button class="btn btn-primary">Edit</button></a>
      <a href="series_delete.php?series_id=<?php echo $val['series_id'] ?>" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php
  }
  ?>
</table>  

<?php 
include('footer.php');
?>



