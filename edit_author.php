<?php
include('header.php');
include('connect.php');

?>

<?php 
 include('connect.php');
 $author_id=$_GET['author_id']; 
 $sql="SELECT * FROM author where author_id='$author_id'";
 $query=mysqli_query($connect,$sql);
 $data=mysqli_fetch_assoc($query);
 ?>

<div class="col-md-6 mt-5">
    <form action="author_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="author_id" value="<?php echo $author_id; ?>">
        Author Name:<input type="text" name="author_name" class="form-control"
            value="<?php echo $data['author_name'] ?>"><br> <br>
        <input type="submit" class="btn btn-primary" value="submit">
    </form>
</div>
<?php
include('footer.php');
?>