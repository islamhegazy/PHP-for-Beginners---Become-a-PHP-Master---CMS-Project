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
               </h1>
            </div>
         </div>
         <!-- /.row -->
         <div class="row">
            <div class="col-md-6">
               <form action="Query/Q_insert_catgegory.php" method="post" >
                  <div class="form-group">
                     <label for="cat-title">Add Category</label>
                     <input type="text" class="form-control" name="cat_title">
                  </div>
                  <div class="form-group">
                     <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                  </div>
               </form>
               <?php 
                  if(isset($_GET['edit'])){
                     include "include/update_catg.php";
                  }
               ?>
            </div>
            <div class="col-md-6">
               <div class="table-responsive">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Category Title</th>
                           <th> </th>
                           <th> </th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           include "Query/Q_select_all_category.php";
                           ?>
                       
                        <?php 
                           include "Query/Q_delete_category.php";
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include "include/footer.php"?>
