<?php  
/*
substracte String:
    substr(string ,start, length[optional]);
  
*/

$str = "i love php and php is so cool";

$plece = substr ($str, 14);

echo $plece;

echo '<hr>';

$str = "i love php and php is so cool";

$plece = substr ($str, 14,4); // lenght هقطع كام حرف ولازم ازود واحد علشان مش بيجيب اخر حرف

echo $plece;

echo '<hr>';

$str = "i love php and php is so cool";
//-1 بيبدا من الاخر 
//-2 يبدا من اخر حرفين
$plece = substr ($str, -7,4); 

echo $plece;

echo '<hr>';

$str = "i love php and php is so cool";
//-1 بيبدا من الاخر 
//-2 يبدا من اخر حرفين
$plece = substr ($str, -7,-6); 

echo $plece;
?>

