<?php
/*
DATE:
 time(); --> unix way

 date_default_timezone_set('Africa/Cairo');
 date_default_timezone_get('continent/country');


date(format,timestamp[optional]); --> used to formate the current date and time
    format the date=>('y-m-d h:i:s')
    time stamp (time() +number)

*/




//https://www.php.net/manual/en/timezones.php
date_default_timezone_set('Africa/Cairo');

echo date_default_timezone_get('continent/country'). "<br>";

echo date('Y-m-d') . "<br>";

echo date('Y-M-D') . "<br>";

echo date('Y-m-d h:i:s') . "<br>";

$nextDay = time() + (60*60*24);
echo date('Y-m-d h:i:s' , $nextDay) . "<br>"; 


?>

