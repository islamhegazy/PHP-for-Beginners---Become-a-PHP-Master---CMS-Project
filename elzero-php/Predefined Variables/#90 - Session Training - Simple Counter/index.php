<?php  

/*
Session  example
*/

session_start();

$_SESSION['name'] = 'islam';

include 'c.php';

echo '<a href="about.php">About</a>';

?>


