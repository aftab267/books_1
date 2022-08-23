<?php 
include('header.php');
include('connect.php');
?>
<div class="col-md-6">
    <form action="insert_book_info.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Book Name:</label><br>
            <input type="text" name="book_name" class="form-control" placeholder=""><br>
            <label>Author Name:</label><br>

            <?php
						    include('connect.php');
						    $sql="select * from author";
						    $author=mysqli_query($connect,$sql);
						    ?>
            <select name="author_id" class="form-control">
                <option value="">Select author</option>
                <?php 
						      foreach($author as $ser)
						      {
						    ?>
                <option value="<?php echo $ser['author_id'] ?>"><?php echo $ser['author_name'] ?></option>
                <?php 
						    }
						    ?>

            </select><br>

            <label>Series Name:</label><br>
            <?php
						    include('connect.php');
						    $sql="select * from series";
						    $series=mysqli_query($connect,$sql);
						    ?>
            <select name="series_id" class="form-control">
                <option value="">Select series</option>
                <?php 
						      foreach($series as $ser)
						      {
						    ?>
                <option value="<?php echo $ser['series_id'] ?>"><?php echo $ser['series_name'] ?></option>
                <?php 
						    }
						    ?>

            </select><br>
            <label>Subject Name:</label><br>
            <?php
						     include('connect.php');
						     $sql="select * from subject";
						     $subject=mysqli_query($connect,$sql);
						     ?>
            <select name="subject_id" class="form-control">
                <option value="">Select Subject</option>
                <?php
						    	 foreach($subject as $sub)
						    	 {
						    	 ?>
                <option value="<?php echo $sub['subject_id'] ?>"><?php echo $sub['subject_name'] ?></option>
                <?php
						    	  }
						    	  ?>
            </select><br>
            <label>Publisher Name:</label><br>
            <?php
						    	 include('connect.php');
						    	 $sql="select * from publisher";
						    	 $publisher=mysqli_query($connect,$sql);
						    	 ?>
            <select name="publisher_id" class="form-control">
                <option value="">Select Publisher</option>
                <?php 
						    	 foreach($publisher as $pub)
						    	 {
						    	?>
                <option value="<?php echo $pub['publisher_id'] ?>"><?php echo $pub['publisher_name']?></option>
                <?php
						         }
						    	?>
            </select><br>
            <label>Publication Date</label><br>
            <input type="date" name="Publication_date" class="form-control" placeholder=""><br>
            <label>Language:</label><br>
            <input type="text" class="form-control" name="Language_name"><br>
            <label>Syllabus Name:</label><br>
            <?php 
						     $connect=mysqli_connect('localhost','root','','books');
						     $sql="select * from syllabus";
						     $syllabus=mysqli_query($connect,$sql);
						    ?>
            <select name="syllabus_id" class="form-control">
                <option value="">Select syllabus</option>
                <?php 
						    	foreach($syllabus as $syl)
						    	{
						    	?>
                <option value="<?php echo $syl['syllabus_id']?>"><?php echo $syl['syllabus_name']?></option>
                <?php 
						         }
						    	?>
            </select>
            <label>Book Price:</label><br>
            <input type="text" name="book_price" class="form-control" placeholder=""><br>
            <label>Book Image:</label><br>
            <input type="file" name="book_image" class="form-control" placeholder=""><br>
            <label>Author Image:</label><br>
            <input type="file" name="author_image" class="form-control" placeholder=""><br>
            <input type="submit" class="btn btn-primary" value="submit">
    </form>
</div>

<?php 
include('footer.php');
?>