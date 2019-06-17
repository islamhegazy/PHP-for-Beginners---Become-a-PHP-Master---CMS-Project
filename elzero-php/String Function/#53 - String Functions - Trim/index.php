<?php  
/*
trim(string , "character list"); clean all tabs (remove)
ltrim(string); left trim
rtrim(string); right trim

\0 NULL
\t Tab
\n New Line
\r Carriage Return
\x0B Vertical Tab
" " space
*/

$str = "I Love PHP";
echo var_dump($str) . '<br><br>';

$str = "\x0B \x0B \x0B \x0B I Love PHP \x0B";
echo var_dump($str) . '<br><br>';

$trim = trim($str); 
echo $trim;

echo '<hr>';
$str2 = "I Love PHP";
$trim = trim($str2, 'I Lo P'); 
echo $trim;
?>

