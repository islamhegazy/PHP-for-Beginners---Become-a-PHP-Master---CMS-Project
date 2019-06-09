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