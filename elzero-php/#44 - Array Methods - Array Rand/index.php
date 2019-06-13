<?php  
/*
array_rand($arrayName ,number); Random Values
*/



$ar = array( 'a' , 'b' , 'c' ,'d');

$randomKey = array_rand($ar, 3);

echo '<pre>';
print_r($ar);
echo '</pre>';

echo '<pre>';
print_r($randomKey);
echo $ar[$randomKey[0]] . '<br>';
echo $ar[$randomKey[1]] . '<br>';
echo $ar[$randomKey[2]] . '<br>';
echo '</pre>';

?>

