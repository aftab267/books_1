

<?php
include('header.php');
?>
<?php 
 include('connect.php');
 $book_id=$_GET['book_id']; 
 $sql="SELECT * FROM book_info where book_id='$book_id'";
 $query=mysqli_query($connect,$sql);
 $data=mysqli_fetch_assoc($query);
 ?>

<div class="col-md-6 mt-5">
 <form action="book_info_update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
            Book Name:<input type="text" name="book_name" class="form-control" value="<?php echo $data['book_name'] ?>" ><br> <br>
            
                           <label >Author Name:</label><br>
                            <?php
                            include('connect.php');
                            $sql="select * from author";
                            $author=mysqli_query($connect,$sql);
                            ?>                        
                            <select name="author_id" class="form-control">
                                <option value="">Select Author</option>
                            <?php 
                              foreach($author as $ser)
                              {
                            ?>
                            <option value="<?php echo $ser['author_id'] ?>" <?php if($ser['author_id']== $data['author_id']) echo "selected" ?>><?php echo $ser['author_name'] ?></option>
                            <?php 
                            }
                            ?>
                            
                            </select><br>
                            <label >Series Name:</label><br>
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
                            <option value="<?php echo $ser['series_id'] ?>" <?php if($ser['series_id']== $data['series_id']) echo "selected" ?>><?php echo $ser['series_name'] ?></option>
                            <?php 
                            }
                            ?>
                            
                            </select><br>
                            <label >Subject Name:</label><br>
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
                                 <option value="<?php echo $sub['subject_id'] ?>" <?php if($sub['subject_id']== $data['subject_id']) echo "selected" ?>><?php echo $sub['subject_name'] ?></option>
                                 <?php
                                  }
                                  ?>
                            </select><br>
            Publisher Name:
            <?php $sql="select * from publisher";
                            $publisher=mysqli_query($connect,$sql);
                            ?>                        
                            <select name="publisher_id" class="form-control">
                                <option value="">Select publisher</option>
                            <?php 
                              foreach($publisher as $ser)
                              {
                            ?>
                            <option value="<?php echo $ser['publisher_id'] ?>" <?php if($ser['publisher_id']== $data['publisher_id']) echo "selected" ?>><?php echo $ser['publisher_name'] ?></option>
                            <?php 
                            }
                            ?>
            Publication Date:<input type="date" name="publication_date" class="form-control" value="<?php echo $data['publication_date'] ?>" ><br> <br>
            Language Name:<input type="text" name="language_name" class="form-control" value="<?php echo $data['language_name'] ?>" ><br> <br>
           Syllabus Name:
           <?php $sql="select * from syllabus";
                            $syllabus=mysqli_query($connect,$sql);
                            ?>                        
                            <select name="syllabus_id" class="form-control">
                                <option value="">Select syllabus</option>
                            <?php 
                              foreach($syllabus as $ser)
                              {
                            ?>
                            <option value="<?php echo $ser['syllabus_id'] ?>" <?php if($ser['syllabus_id']== $data['syllabus_id']) echo "selected" ?>><?php echo $ser['syllabus_name'] ?></option>
                            <?php 
                            }
                            ?>
           Book Price:<input type="text" name="book_price" class="form-control" value="<?php echo $data['book_price'] ?>" ><br> <br>

            Book Image:<input type="file" name="book_image" value="<?php echo $data['book_image']?>">
            <img src="book_image/<?php echo $data['book_image'] ?>" width='100' height='100'><br><br>


            Author Image:<input type="file" name="author_image" value="<?php echo $data['author_image'] ?>"> 
            <img src="author_image/<?php echo $data['author_image'] ?>" width='100' height='100'><br><br>
            
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
        </div>
<?php
include('footer.php');
?>