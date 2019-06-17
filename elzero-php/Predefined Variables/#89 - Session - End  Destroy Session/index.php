<?php  

/*
Session 
زى الكوكيز بس بتتحفظ على السيرفر
ولازم تحطط فى الاول


 session_start(); //start or resume
 $_SESSION['name anything'];

 every new page contain start_session();

 //send data between pages without submit 
*/

session_start();

$_SESSION['username'] = 'islam';
$_SESSION['favfood'] = 'pizza';

echo '<a href="page2.php">room 2</a>' ;


?>

