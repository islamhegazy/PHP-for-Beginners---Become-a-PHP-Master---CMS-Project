<?php 
    if(isset($_POST['add_post'])){

        $post_category_id = $_POST['post_catg_id'];
        $post_title = $_POST['post_title'];
        $post_author = $_POST['post_author'];
        $post_date = date("d-m-y h:i:s");
        $post_image =  $_FILES['post_image'] ['name'];
        $post_image_temp =  $_FILES['post_image'] ['tmp_name'];
        $post_content = $_POST['post_content'];
        $post_tags = $_POST['post_tags'];
        $post_comment_count = 4;
        $post_status = $_POST['post_status'];

        move_uploaded_file($post_image_temp, "../images/$post_image");

        $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date,
         post_image, post_content, post_tags, post_comment_count, post_status)
          VALUES ($post_category_id, '$post_title' ,'$post_author',now(),'$post_image','$post_content','$post_tags','$post_comment_count','$post_status') ";
        $create_post_query = @mysqli_query($connection,$query) or die('insert_query false');
        
    }
    
    ?>
<!-- enctype use to send multi different data -->
<form  method="post" enctype="multipart/form-data"> 
      <div class="form-group">
         <label for="cat-title">Post Title</label>
         <input type="text" class="form-control" name="post_title">
      </div>
      <div class="form-group">
         <label for="cat-title">Post Category ID</label>
         <input type="text" class="form-control" name="post_catg_id">
      </div>
      <div class="form-group">
         <label for="cat-title">Post Author</label>
         <input type="text" class="form-control" name="post_author">
      </div>
      <div class="form-group">
         <label for="cat-title">Post Status</label>
         <input type="text" class="form-control" name="post_status">
      </div>
      <div class="form-group">
         <label for="cat-title">Post Image</label>
         <input type="file" class="form-control" name="post_image">
      </div>
      <div class="form-group">
         <label for="cat-title">Post Tags</label>
         <input type="text" class="form-control" name="post_tags">
      </div>
      <div class="form-group">
         <label for="cat-title">Post content</label>
        <textarea name="post_content"  class="form-control" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
         <input type="submit" class="btn btn-primary" name="add_post" value="Add Post ">
      </div>
   </form>