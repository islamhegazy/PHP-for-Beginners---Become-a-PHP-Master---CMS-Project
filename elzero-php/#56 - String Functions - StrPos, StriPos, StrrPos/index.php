<?php  
/*
string position 
strpos(string [req], find[req], offset);

*/

$str = "I Love PHP because PHP is famous";
$pos = strpos($str , "PHP");
echo $pos . '<br>';
$pos = strpos($str , "PHP" , 8); //8 meann start from pos 8 and give second php
echo $pos . '<br>';

echo '<hr>';
/*
string insensitive 
stripos(string , find);
*/

$str = "I Love PHP because PHP is famous";
$pos = stripos($str , "php");
echo $pos . '<br>';
$pos = strpos($str , "PHP" , 8); //8 meann start from pos 8 and give second php
echo $pos . '<br>';

echo '<hr>';
/*
string right position 
strrpos(string ,find);
*/

$str = "I Love PHP because PHP is famous";
$pos = strrpos($str , "PHP", -14); // search from right and start count from left
echo $pos . '<br>';
//-14 بيعد من الخلف 

echo '<hr>';
/*
string right position 
strripos(string ,find);
*/

$str = "I Love PHP because PHP is famous";
$pos = strripos($str , "php", -14); // search from right and start count from left
echo $pos . '<br>';
//-14 بيعد من الخلف 
?>

