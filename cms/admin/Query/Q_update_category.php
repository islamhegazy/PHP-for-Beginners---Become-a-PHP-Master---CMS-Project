
   <?php 
      if(isset($_GET['edit'])){
            $cat_edit_id = $_GET['edit'];
            $query = "SELECT * FROM categories WHERE cat_id = $cat_edit_id";
      
            $show_all_categories_id = @mysqli_query($connection,$query) or die('show_all_categories false');
      
            while($row = mysqli_fetch_assoc($show_all_categories_id)){
               $cat_id = $row['cat_id'];
               $cat_title = $row['cat_title'];
      }
      }

      if(isset($_POST['submit_edit'])){
         $query = "UPDATE `categories` SET `cat_title`= '{$_POST['cat_title_edit']}' WHERE cat_id = $cat_edit_id";
         $edit_sql_query = @mysqli_query($connection,$query) or die('edit_sql_query false');
         header('Location:categories.php');
      }
      
?>