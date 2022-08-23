<?php 
include('header.php');
include('connect.php');
?>


<form action="insert_publisher.php" method="post">
    <div class="form-group">
        <label>Publisher:</label><br>
        <input type="text" name="publisher_name" class="form-control" placeholder="Publisher Name"><br>
        <input type="text" name="publisher_address" class="form-control" placeholder="Address"><br>
        <input type="text" name="publisher_phone" class="form-control" placeholder="Phone"><br>
        <input type="text" name="publisher_email" class="form-control" placeholder="email"><br>
        <button type="submit" class="btn btn-primary" value="submit">Submit</button>
</form>



<?php 
include('footer.php');
?>