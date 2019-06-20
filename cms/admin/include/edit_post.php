

<?php 
    if(isset($_GET['p_id']) ){

        $get_post_id = $_GET['p_id'];
        $query = "SELECT * FROM posts WHERE post_id = $get_post_id";
        $get_edit_post = @mysqli_query($connection,$query) or die('get_edit_post false');
        while($row = mysqli_fetch_assoc($get_edit_post)){
            $post_category_id = $row['post_category_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];
            $post_tags = $row['post_tags'];
            $post_status = $row['post_status'];
       
    }
       
}
   
if(isset($_POST['update_post'])){
    $query = "UPDATE `posts` SET 
    `post_category_id`= '{$_POST['post_catg_id_edit']}',
    `post_title`= '{$_POST['post_title_edit']}',
    `post_author`= '{$_POST['post_title_edit']}',
    `post_content`= '{$_POST['post_content_edit']}',
    `post_tags`= '{$_POST['post_tags_edit']}',
    `post_status`= '{$_POST['post_status_edit']}',

     WHERE post_id = $get_post_id";
    $edit_sql_query = @mysqli_query($connection,$query) or die('edit_sql_query false');
    header('Location:post.php');
 }

    ?>
<!-- enctype use to send multi different data -->
<form  method="post" enctype="multipart/form-data"> 
      <div class="form-group">
         <label for="cat-title">Post Title</label>
         <input type="text" class="form-control" name="post_title_edit" value="<?php if(isset($post_title)){echo $post_title ;} ?>">
      </div>
      <div class="form-group">
       <select>
       <?php 
            $query = "SELECT * FROM categories";
            
             $show_all_categories_id = @mysqli_query($connection,$query) or die('show_all_categories false');
     
             while($row = mysqli_fetch_assoc($show_all_categories_id)){
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
            }
       ?>
        <option value="<?php echo $cat_title; ?>"><?php echo $cat_title; ?></option>
       </select>
      </div>
      <div class="form-group">
         <label for="cat-title">Post Author</label>
         <input type="text" class="form-control" name="post_author_edit"  value="<?php if(isset($post_author)){echo $post_author ;} ?>">
      </div>
      <div class="form-group">
         <label for="cat-title">Post Status</label>
         <input type="text" class="form-control" name="post_status_edit"  value="<?php if(isset($post_status)){echo $post_status ;} ?>">
      </div>
      <div class="form-group">
        <img src="../images/<?php if(isset($post_image)){echo $post_image ;} ?>" alt="" width="180">
      </div>
      <div class="form-group">
         <label for="cat-title">Post Tags</label>
         <input type="text" class="form-control" name="post_tags_edit"  value="<?php if(isset($post_tags)){echo $post_tags ;} ?>">
      </div>
      <div class="form-group">
         <label for="cat-title">Post content</label>
        <textarea name="post_content_edit"  class="form-control" cols="30" rows="10"  ><?php if(isset($post_content)){echo $post_content ;} ?></textarea>
      </div>
      <div class="form-group">
         <input type="submit" class="btn btn-primary" name="update_post" value="update Post ">
      </div>
   </form>

   