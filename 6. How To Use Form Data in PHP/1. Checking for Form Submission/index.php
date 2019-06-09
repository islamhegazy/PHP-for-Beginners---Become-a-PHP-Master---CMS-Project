<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1. Checking for Form Submission</title>
</head>
<body>

	<form action="" method="post">
		<input type="txt" placeholder="username" name="username">
		<input type="pasword" placeholder="pasword" name="pasword">
		<input type="submit" name="submit">
	</form>
 
	<?php 
	if (isset($_POST['submit'])) {
		echo "yes it works";
	}
   ?>
   
</body>
</html