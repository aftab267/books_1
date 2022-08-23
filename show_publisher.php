<?php 
include('header.php');
?>

<?php
$connect=mysqli_connect('localhost','root','','books');
$sql="SELECT * FROM publisher";
$query=mysqli_query($connect,$sql);
?>
<a  href="publisher.php" class="btn btn-primary">Insert Publisher</a>
<table class="table table-bordered table-hover">
  <tr>
    <td><b>SL</b></td>
    <td><b>Publisher Name<b></td>
    <td><b>Address<b></td>
    <td><b>Phone<b></td>
    <td><b>Email<b></td>

    <td><b>Action<b></td>
  </tr>
  <?php
  $x=1;
  foreach($query as $val){

  ?>
  <tr>
    <td><?php echo $x++ ?></td>
    <td><?php echo $val['publisher_name'] ?></td>
    <td><?php echo $val['address'] ?></td>
    <td><?php echo $val['phone'] ?></td>
    <td><?php echo $val['email'] ?></td>
    
    <td>
     <a href="edit_publisher.php?publisher_id=<?php echo $val['publisher_id'] ?>"><button class="btn btn-primary">Edit</button></a>
      <a href="publisher_delete.php?publisher_id=<?php echo $val['publisher_id'] ?>" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php
  }
  ?>
</table>  

<?php 
include('footer.php');
?>



