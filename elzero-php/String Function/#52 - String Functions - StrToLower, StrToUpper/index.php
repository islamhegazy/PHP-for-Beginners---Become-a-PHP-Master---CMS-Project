<?php  
/*
strTolower(string);
strToupper(string);
lcfirst(string); lower case first
ucfirst(string); upper case first
ucwords(string); upper case words
*/

$str = "I LOVE PHP";

$lower = strtolower($str);
echo $lower;

echo '<hr>';

$str2 = "i love php";
$upper = strtoupper($str2);
echo $upper ;

echo '<hr>';

$str3 = "L Loves php";
$lcfirst = lcfirst($str3);
echo $lcfirst ;

echo '<hr>';

$str4 = "l Loves php";
$ucfirst = ucfirst($str4);
echo $ucfirst ;

echo '<hr>';

$str5 = "l loves php";
$ucwords = ucwords($str5);
echo $ucwords ;
?>

