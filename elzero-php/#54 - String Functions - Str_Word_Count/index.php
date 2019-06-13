<?php  
/*
string word count:
str_word_count(string[required] ,format ,charlist);
format 1 >for indexed arr ,2 >for associative array
*/

$str = "I Love PHP && @"; //& is special char not count
echo $str . '<br><br>';

//$countW = str_word_count($str);
//$countW = str_word_count($str,0); // defult 0
//echo $countW . '<br><br>';

//$countW = str_word_count($str, 1); //1 mean as indexed array

//$countW = str_word_count($str, 2); //1 mean as  associative array
// key = number of letter for ex word php start at 
// letter 7 so his key is 7 

$countW = str_word_count($str, 2,"&@"); // & mean i told to count & as word
echo '<pre>';
print_r($countW);
echo '</pre>';

?>

