<?php
include('header.php');
?>

<?php 
 include('connect.php');
 $series_id=$_GET['series_id']; 
 $sql="SELECT * FROM series where series_id='$series_id'";
 $query=mysqli_query($connect,$sql);
 $data=mysqli_fetch_assoc($query);
 ?>

<div class="col-md-6">
 <form action="series_update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="series_id"  value="<?php echo $series_id; ?>">
            Series Name:<input type="text" name="series_name" class="form-control" value="<?php echo $data['series_name'] ?>" ><br> <br>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
    </div>
<?php
include('footer.php');
?>