<?php  
/*
string split(as character) 
str_split($stringName ,length);

It is used to convert a string to an array
*/

echo "<pre>";
print_r(str_split("tutorialspoint"));
echo "</pre>";

echo "<pre>";
print_r(str_split("tutorialspoint",2));
echo "</pre>";

echo "<hr>";

/*
String chunk
convert string into small chunks
chunk_split( $stringName ,length(default value [76]) ,end(\n \r) ); 
*/

$str = "tutorialsp oint";
//echo chunk_split($str,3); //default third make space
echo chunk_split($str,3,'-');




?>

