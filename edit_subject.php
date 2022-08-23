<?php
include('header.php');
?>

<?php 
 include('connect.php');
 $subject_id=$_GET['subject_id']; 
 $sql="SELECT * FROM subject where subject_id='$subject_id'";
 $query=mysqli_query($connect,$sql);
 $data=mysqli_fetch_assoc($query);
 ?>

 <form action="subject_update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>">
            Subject Name:<input type="text" name="subject_name" value="<?php echo $data['subject_name'] ?>" ><br> <br>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
<?php
include('footer.php');
?>