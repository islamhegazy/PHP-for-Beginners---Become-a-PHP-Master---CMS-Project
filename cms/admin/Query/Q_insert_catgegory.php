<?php include "../../include/db.php"?>
<?php 
    if(isset($_POST['submit'])){
    
        $add_cat = $_POST['cat_title'];
        if(!empty($add_cat)){
            $query = "INSERT INTO categories (`cat_title`) VALUES ('$add_cat') ";
            $insert_query = @mysqli_query($connection,$query) or header('Location:../categories.php');;
            if($insert_query){
                header('Location:../categories.php');
            }
        }else{
            header('Location:../categories.php');
        }
      
        
    }
    
    ?>