<?php  
/*
//https://www.tutorialspoint.com/php/php_function_array_unique.htm

*/



$input = array(
    "a" => "green",
    "red", 
    "b" => "green",
    "blue",
    "red"
    );
$result = array_unique($input);

echo '<pre>';
print_r($input);
echo '</pre>';

echo '<pre>';
print_r($result);
echo '</pre>';



?>

