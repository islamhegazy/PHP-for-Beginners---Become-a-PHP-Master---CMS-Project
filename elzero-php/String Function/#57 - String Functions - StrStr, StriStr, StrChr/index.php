<?php  
/*
search for string within string:
strstr(string[req] , key or search[req], before search[option]); == alis strchr(string , key, before search);
stristr(string , key, before search); حروف غير حساسة

*/

$str = "I love php so much and php so famouse";
$char = strstr($str , 'php');// يبحث عن الكلمة ويجبها هى واللى بعدها
$char = strstr($str , 'php',false); // default false يعنى هات اللى بعد الكلمه
$char = strstr($str , 'php',true);// هيجيب الكلام اللى قبلها فقط

echo $char;

echo '<hr>';

//example

$str2 = "islam@info.com";
$char2 = strstr($str2 , '@',true);
echo $char2;
?>

