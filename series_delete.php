<?php 
 include('connect.php');
 $series_id=$_GET['series_id'];
 $sql="delete from series where series_id='$series_id'";
 mysqli_query($connect,$sql);
 header('location:show_series.php')
?>