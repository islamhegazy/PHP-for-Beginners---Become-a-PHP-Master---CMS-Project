}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>7. Connecting to the Database using PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>

		<?php 

		if (isset($_POST['submit']) ) {
			
			$username =	$_POST['username'];
			$password =	$_POST['password'];

			$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

			if($connection){
				echo "we are connected <br>";
			}else{
				die("Database connection failed");
			}

			

		}

	 ?>
	</div>



 
   
</body>
</html