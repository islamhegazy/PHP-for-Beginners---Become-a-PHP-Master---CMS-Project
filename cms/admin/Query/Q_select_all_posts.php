<div class="table-responsive">
   <table class="table table-bordered table-hover">
      <thead>
         <tr>
            <th>#</th>
            <th>cat_id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Image</th>
            <th>content</th>
            <th>Tages</th>
            <th>Comment Count</th>
            <th>Status</th>
            <th></th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         <?php 
            $query = "SELECT * FROM posts";
            $show_all_categories = @mysqli_query($connection,$query) or die('show_all_categories false');
            
            while($row = mysqli_fetch_assoc($show_all_categories)){
                $post_id = $row['post_id'];
                $post_category_id = $row['post_category_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                $post_tags = $row['post_tags'];
                $post_comment_count = $row['post_comment_count'];
                $post_status = $row['post_status'];
                ?>
         <tr>
            <td><?php echo $post_id; ?></td>
            <td><?php echo $post_category_id; ?></td>
            <td><?php echo $post_title; ?></td>
            <td><?php echo $post_author; ?></td>
            <td><?php echo $post_date; ?></td>
            <td><img src="../images/<?php echo $post_image; ?>" class="img-responsive" style="max-width:100px; margin:auto"></td>
            <td ><div class="limit_text"><?php echo $post_content; ?></div></td>
            <td><?php echo $post_tags; ?></td>
            <td><?php echo $post_comment_count; ?></td>
            <td><?php echo $post_status; ?></td>
            <td><a href="posts.php?delete=<?php echo $post_id; ?>">delete</a></td>
            <td><a href="posts.php?source=edit_post&p_id=<?php echo $post_id; ?>"">edit</a></td>
         </tr>
         <?php }   ?>
      </tbody>
   </table>
</div>

<?php 

//delete_post

    if(isset($_GET['delete'])){
    $thePOstId = $_GET['delete'];
    $query = "DELETE FROM `posts` WHERE post_id = $thePOstId";
    $delete_query = @mysqli_query($connection,$query) or die('delete_query false');
    header('Location:pots.php');
    }



?>