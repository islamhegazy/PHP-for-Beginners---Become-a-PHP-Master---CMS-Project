<?php include "include/db.php";?>
<?php include "include/header.php";?>

    <!-- Navigation -->
    <?php include "include/nav.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                    <?php 
                        $query = "SELECT * FROM posts ";
                        $select_all_posts = mysqli_query($connection,$query );  
                        while($row = mysqli_fetch_assoc( $select_all_posts)){
                          
                            /*
                             foreach($row as $key => $value){
                               echo $key . "<br>";
                           }
                            */
                         
                            $post_title =  $row['post_title'];
                            $post_author =  $row['post_author'];
                            $post_date =  $row['post_date'];
                            $post_image =  $row['post_image'];
                            $post_content =  $row['post_content'];
                            $post_tags =  $row['post_tags'];
                            $post_comment_count =  $row['post_comment_count'];
                            $post_status =  $row['post_status'];

                            ?>
                            <!-- First Blog Post -->
                            <h2>
                                <a href="#"><?php echo  $post_title;?></a>
                            </h2>
                            <p class="lead">
                                by <a href="index.php"><?php echo  $post_author;?></a>
                            </p>
                            <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo  $post_date;?></p>
                            <hr>
                            <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                            <hr>
                            <p><?php echo  $post_content;?></p>
                            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
            
                            <hr>
                           
                       <?php }?>


                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "include/sidebar.php";?>
        <!-- /.row -->


<?php include "include/footer.php";?>