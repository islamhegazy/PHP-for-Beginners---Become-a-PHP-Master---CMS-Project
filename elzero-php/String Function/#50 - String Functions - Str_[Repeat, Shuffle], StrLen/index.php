<?php  
/*
string repeat 
str_repeat($stringName[required] ,Nrepeat[required] );

*/

$str = 'islam <br>';

$repeat = str_repeat($str, 20);

echo $repeat;

echo '<hr>';
/*
بيعمل خلط للحروف  
shuffle str_shuffle($stringName );
*/

$str2 = 'islam';

$shuffle = str_shuffle($str2);

echo $shuffle;

echo '<hr>';
/*
طول string
strlen( $stringName );
*/
$str3 = 'islam';

$strlen = strlen($str3);

echo $strlen;

?>

