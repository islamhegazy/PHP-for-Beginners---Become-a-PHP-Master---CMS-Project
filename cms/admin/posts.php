<?php include "include/header.php"?>
<div id="wrapper">
   <!-- Navigation -->
   <?php include "include/topNav.php"?>
   <div id="page-wrapper">
      <div class="container-fluid">
         <!-- Page Heading -->
         <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">
                  Welcome to admin
                  <small>Author</small>
                  Posts
               </h1>
            </div>
         </div>
         <!-- /.row -->
         <div class="row">
           <div class="col-lg-12">
           <?php 

                           if(isset($_GET['source'])){

                              $source = $_GET['source'];
                           }else{
                              $source = '';
                           }
                           switch($source){
                              case 'add_post':
                                 include "include/add_post.php";
                              break;
                              case 'edit_post':
                              include "include/edit_post.php";
                              break;
                              
                              default:
                                 include "Query/Q_select_all_posts.php";
                               break; 
                           }
                           ?>
          
           </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include "include/footer.php"?>
