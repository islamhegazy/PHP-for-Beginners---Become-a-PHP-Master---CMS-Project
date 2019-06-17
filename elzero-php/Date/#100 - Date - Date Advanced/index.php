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


/*
format date:
https://www.php.net/manual/en/function.date.php
*/

echo 'This year is ' .date('Y') . "<br>";

echo  date('Y-m-d \of h:i:s') . "<br>";

echo  date('l') . "<br>"; //A full textual representation of the day of the week

echo  date('S') . "<br>"; //English ordinal suffix for the day of the month, 2 characters

echo  date('j') . "<br>"; //Day of the month without leading zeros
echo  date('jS') . "<br>";

echo  date('F') . "<br>"; //A full textual representation of a month, such as January or March

echo date('l jS \of F Y h:i:s a');
?>

