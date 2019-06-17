<?php  
/*
string comparsion:
 
strcmp(string1,string2); 
                    > 0 greater than
                    = 0 equals
                    < 0 less than
*/

$str1 = "PHP";
$str2 = "PHP";

echo strcmp($str1,$str2); // 0  equals

echo '<hr>';

$str1 = "PHP12";
$str2 = "PHP";

echo strcmp($str1,$str2); // 2 -->  str1 greater than str2 by 2

echo '<hr>';

$str1 = "PH";
$str2 = "PHP";

echo strcmp($str1,$str2); // -1  --> str1 less than  str2 by 1

/*
strncmp(string1,string,length);
length --> قارن طول اول حروف فى الاسترنج الاول ب طول اول حروف فى الاسترنج التانى
*/
echo '<hr>';

$str1 = "PHP";
$str2 = "PHPPHP";

echo strncmp($str1,$str2,3); 
// بيقارن اول 3 ب تانى 3

echo '<hr>';
/*
reverse string:
 strrev(string);

*/
$name = "islam";
echo strrev($name);
?>

