<?php
/*
DATE:
strtotime(date , timestamp[now]); -- > now mean the time i want to start from it
convert string(now,week,year,day,month) into time(y:m:d)

*/


//https://www.php.net/manual/en/timezones.php
date_default_timezone_set('Africa/Cairo');

$time = strtotime('now', time() - 3600);
echo $time . '<br>'; //like time()
echo date('Y-m-d h:i:s', $time) . '<br>';

echo '<hr>';

$oldway = time() + (365*24*60*60); // + one year
$newWay = strtotime('+1 year'); // + number [day, week ,month,year]

echo date('Y-m-d h:i:s', $oldway) . '<br>';
echo date('Y-m-d h:i:s', $newWay) . '<br>';

echo '<hr>';

$newWay = strtotime('+1 week 2day'); // + week and 2 days
echo date('Y-m-d h:i:s', $newWay) . '<br>';

echo '<hr>';

$newWay = strtotime('+1 week 2 day 6 hours'); // + week and 2 days
echo date('Y-m-d h:i:s', $newWay) . '<br>';

echo '<hr>';

$newWay = strtotime('next Monday'); 
echo date('Y-m-d h:i:s', $newWay) . '<br>';

echo '<hr>';

$newWay = strtotime('next Monday'); 
echo date('Y-m-d H:i:s', $newWay) . '<br>'; //H > 24hours

echo '<hr>';

$newWay = strtotime('last Friday '); 
echo date('Y-m-d H:i:s', $newWay) . '<br>'; 

?>

