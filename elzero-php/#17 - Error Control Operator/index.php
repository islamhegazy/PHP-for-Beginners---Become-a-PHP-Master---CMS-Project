<?php  
/*
 [@] Error Control Operator
 يستخدم لتجاهل الخطا
*/
//$file = @fopen('islam.txt', 'r') or die("This file not found");

//@include ("islam.php")) or die('This File not here');

$server = "localhost";
$server = "root";
$pass = "hello";
$db = "OurDatabase";

@mysqli_connect($server, $server, $pass, $db ) or die('there\'s some thing wrong with connection');
?>
