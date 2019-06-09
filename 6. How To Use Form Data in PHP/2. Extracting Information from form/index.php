<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2. Extracting Information from form</title>
</head>
<body>

	<form action="" method="post">
		<input type="txt" placeholder="username" name="username">
		<input type="password" placeholder="password" name="password">
		<input type="submit" name="submit">
	</form>
 
	<?php 
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		echo "the username is {$username}<br>";
		echo "the password is {$password}";
	}
   ?>
   
</body>
</html