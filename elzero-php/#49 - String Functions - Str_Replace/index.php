<?php  
/*
str_replace(search ,replace , $objectName, number of replacing); //replace for string and array
search =array("item1" ,"item2");
may replace=array("item1" , "item2");
*/


$str = "I love php php php php php php js";

echo "{$str} <br>";

$str = str_replace('php', "js", $str, $i);

echo "{$str} <br>";

echo "Replacements count is {$i} <br>";

echo "<hr>";

$str = "I-love|php&and&php@is-famous#languag";

echo "{$str} <br>";

$str = str_replace(array("-","|","@","#","&"), " ", $str, $i);
echo "{$str} <br>";

echo "Replacements count is {$i} <br>";

echo "<hr>";

$str = "I-love|php&and&php@is-famous#languag";

echo "{$str} <br>";

$str = str_replace(array("-","|","@","#","&"), array("1","2","3","4","5"), $str, $i);
echo "{$str} <br>";

echo "Replacements count is {$i} <br>";

echo "<hr>";

$str = "I-love|php&and&php@is-famous#languag";

echo "{$str} <br>";

$str = str_replace(array("-","|","@","#","&"), array("1","2","3","4"), $str, $i);
// there will put empty string insted of &
echo "{$str} <br>";

echo "Replacements count is {$i} <br>";


echo "<hr>";

$str = "Line 1\nLine 2\n Line3\n\r Line 4\r"; // \n make new line in inspect and \r make enter

$order = array("\n", "\n\r","\r");

echo "{$str} <br><br><br>";

$str = str_replace($order , "<br>" , $str);

echo "$str";

echo "Replacements count is {$i} <br>";

?>

