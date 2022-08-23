<?php
include('header.php');
?>

<?php 
 include('connect.php');
 $publisher_id=$_GET['publisher_id']; 
 $sql="SELECT * FROM publisher where publisher_id='$publisher_id'";
 $query=mysqli_query($connect,$sql);
 $data=mysqli_fetch_assoc($query);
 ?>

 <form action="publisher_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="publisher_id" value="<?php echo $publisher_id; ?>">
            <input type="text" name="publisher_name" class="form-control" value="<?php echo $data['publisher_name'] ?>" ><br>
            <input type="text" name="publisher_address" class="form-control" value="<?php echo $data['address'] ?>" ><br>
            <input type="text" name="publisher_phone" class="form-control"   value="<?php echo $data['phone'] ?>" ><br>  
            <input type="text" name="publisher_email" class="form-control" value="<?php echo $data['email'] ?>"><br>  
            <input class="btn btn-primary" type="submit" value="submit">
        </form>
        <?php
include('footer.php');
?>