<?php

include('connect.php');

$series_name= $_POST['series_name'];
$sql="INSERT INTO series(series_name) VALUES ('$series_name')";
$query=mysqli_query($connect,$sql);
header("location:show_series.php");

?>
