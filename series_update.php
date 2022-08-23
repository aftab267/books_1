<?php 
 include('connect.php');
 $series_id=$_POST['series_id'];
 $series_name= $_POST['series_name'];
  $sql="UPDATE series SET series_name='$series_name' where series_id='$series_id'";
  $query=mysqli_query($connect,$sql);
  header('location:show_series.php')
?>