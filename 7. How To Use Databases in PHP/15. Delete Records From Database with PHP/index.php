
<?php 
  include('./connection/connection.php');
  include('functions.php');
 ?>
   
<?php 
   
  if (isset($_POST['submit']) ) {
 
     delteRow();
    
  }

 ?>
    


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>15. Delete Records From Database with PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

  <div class="container">
    <form method="post" action="">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <div class="form-group">
      	<select name="id" >
      		<?php 

      			
            showAllData();

      		 ?>
      		
      	</select>
      	  </div>
      <button type="submit" name="submit" class="btn btn-primary">Delete</button>
    </form>

    <?php


	?>
 </div>





</body>

</html