<?php
include('header.php');
?>

<?php 
 include('connect.php');
 $syllabus_id=$_GET['syllabus_id']; 
 $sql="SELECT * FROM syllabus where syllabus_id='$syllabus_id'";
 $query=mysqli_query($connect,$sql);
 $data=mysqli_fetch_assoc($query);
 ?>

 <form action="syllabus_update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="syllabus_id" value="<?php echo $syllabus_id; ?>">
            Author Name:<input type="text" name="syllabus_name" value="<?php echo $data['syllabus_name'] ?>" ><br> <br>
            <input type="submit" class="btn btn-primary" value="submit">
        </form>
<?php
include('footer.php');
?>