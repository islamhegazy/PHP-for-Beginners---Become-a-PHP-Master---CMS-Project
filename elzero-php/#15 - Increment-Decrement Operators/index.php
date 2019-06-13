<?php  
/*
 [++$var] pre increment يزود واحد ويطبعه
 [$var++] post increment يطبع وبعدين يزود

 [--$var] pre Decrement ينقص واحد ويطبعه
 [$var--] post Decrement يطبع وبعدين ينقص

 بيتعامل مع الارقام والنصوص
 ولو قيمة null تزيد ولا تنقص
*/

$var = 10;
echo ++$var . '<br>';
echo ++$var . '<br>';

echo '<hr>';
$var2 = 20;
echo $var2++ . '<br>';
echo $var2++ . '<br>';

echo '<hr>';
$var3 = 10;
echo --$var3 . '<br>';
echo --$var3 . '<br>';

echo '<hr>';
$var4 = 20;
echo $var4-- . '<br>';
echo $var4-- . '<br>';

echo '<hr>';
$var5 = null;
echo ++$var5 . '<br>';
echo ++$var5 . '<br>';
?>

