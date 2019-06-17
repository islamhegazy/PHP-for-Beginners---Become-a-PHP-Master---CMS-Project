<?php  
/*
implode( separator ,$arrayName);
Join( separator ,$arrayName); //بديل
*/

$array = array('lastname', 'email', 'phone');
$comma_separated = implode("-", $array);

echo $comma_separated; // lastname,email,phone

echo "<hr>";

$array2 = array('lastname', 'email', 'phone');
$comma_separated2 = Joins("-", $array2);

echo $comma_separated2; // lastname,email,phone


?>

