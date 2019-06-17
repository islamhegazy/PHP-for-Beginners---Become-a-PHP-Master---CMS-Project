<?php  
/*
substracte String:
    substr_count(string ,needle ,start,length);
*/

$str = "i love php and php is so cool and php and php";

$plece = substr_count ($str , 'php');
echo $plece;

echo '<hr>';
//10 --> يبدا يبحث من بعد الحرف 10
$plece = substr_count ($str , 'php',10);
echo $plece;

echo '<hr>';
//30 -- يبدا يبحث خلال اول 30 حرف
$plece = substr_count ($str , 'php',10,30);
echo $plece;

echo '<hr>';
$len = strlen($str);
echo $len . '<br>';
$plece = substr_count ($str , 'php',1,44);
echo $plece;

echo '<hr>';
/*
substracte String:
    substr_compare(string1,string2,start pos from str1,length,case);
*/

$str1 = "Hello Islam";
$str2 = "Islam";
echo substr_compare($str1, $str2,0); 
// -1 --> لان H اصغر من I فى ترتيب الحروف

echo '<hr>';

$str1 = "Zello Islam";
$str2 = "Islam";
echo substr_compare($str1, $str2,0); 
// 1 --> لان Z اكبر من I فى ترتيب الحروف

echo '<hr>';

$str1 = "Zello Islam";
$str2 = "Islam";
echo substr_compare($str1, $str2,6); 
//0 -->لان المكان اللى بدا منه هو I زى نفس الحرف فى str2


echo '<hr>';

$str1 = "Zello Islam";
$str2 = "Is";
echo substr_compare($str1, $str2,6);
// 3 --> 

echo '<hr>';

$str1 = "Zello IslamHegazy";
$str2 = "Islam";
echo substr_compare($str1, $str2,6,8);
// 3 --> الطول 8 لحد حرف g

echo '<hr>';

$str1 = "Zello islamHegazy";
$str2 = "Islam";
echo substr_compare($str1, $str2,6,8,true);
//true --> يعنى الحروف متكنش حساسه
?>

