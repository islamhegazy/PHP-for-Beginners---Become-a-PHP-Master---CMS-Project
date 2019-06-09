<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3. Validating The Form Values</title>
</head>
<body>

	<form action="" method="post">
		<input type="txt" placeholder="username" name="username">
		<input type="password" placeholder="password" name="password">
		<input type="submit" name="submit">
	</form>
 
	<?php 
	if (isset($_POST['submit'])) {
		$names = array('islam', 'ahmed', 'adam','saied');
		$minimum = 5;
		$maximum = 10;
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (in_array($username, $names)) {
			if (strlen($username) < $minimum) {
			echo "Username has to be longer than five<br>";
			}elseif (strlen($username) > $maximum){
				echo "Username cannot be longer than ten<br>";
			}else{
				echo "the username is {$username}<br>";
			}
		}else{
			echo "there is no name like it<br>";
		}
		
		echo "the password is {$password}";
	}
   ?>
   
</body>
</html