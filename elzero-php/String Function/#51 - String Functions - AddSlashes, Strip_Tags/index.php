<?php  
/*

addSlashes(string); skip character
*/

$str = "i will go at 6 o'clok";
echo $str .'<br>';
$skipped = addSlashes($str);
echo $skipped .'<br>';

echo '<hr>';
/*
stripSlashes(string); clean without slashes
*/

$str2 = "i \wi''ll 'g'o at 6 o'clok";
echo $str2 .'<br>';
$skipped = addSlashes($str2);
echo $skipped .'<br>';
$clean = stripslashes($skipped);
echo $clean .'<br>';
 
echo '<hr>';
/*
strip_Tags(string ,allow); hide all tags
*/

$str3 = "i love <span>php</span> go to <a href='php.net'>php.net</a> go to learn php";
echo $str3 .'<br>';
$stripped = strip_tags($str3);
echo $stripped .'<br>';

echo '<hr>';
$str4 = "i love <b>php</b> go to <a href='php.net'>php.net</a> go to learn php";
echo $str4 .'<br>';
$stripped = strip_tags($str4, '<a><b>'); بيسمح ل ظهور تاج محدد
echo $stripped .'<br>';
?>

