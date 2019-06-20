<?php
    if(isset($_GET['delete'])){
    $theCatId = $_GET['delete'];
    $query = "DELETE FROM `categories` WHERE cat_id = $theCatId";
    $delete_query = @mysqli_query($connection,$query) or die('delete_query false');
    header('Location:categories.php');
    }

?>