<?php  
/*
parse string 
parse_str(string , array); 
convert all words in the string into variables
*/

$link = "name=islam&age=25&year=2019&skill=3";

parse_str($link);

echo $name . '<br>';
echo $age . '<br>';
echo $year . '<br>';
echo $skill . '<br>';

parse_str($link, $arr);

echo '<pre>';
print_r($arr);
echo '</pre>';

/*
new line "\n" 
converted to break tag </br> nl2br(string);
*/

$str = "I Love PHP \n Although I Love Js \n";
echo $str;
echo ' <p></p>';
echo nl2br($str, true);// default true and it make <br/> with self close
// if make it false it will be <br> without self close 

?>

