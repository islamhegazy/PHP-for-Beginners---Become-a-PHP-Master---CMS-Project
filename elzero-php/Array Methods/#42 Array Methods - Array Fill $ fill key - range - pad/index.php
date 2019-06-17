<?php  
/*
/*
array_fill(index , lengthNumber ,value);
*/

//$array = array_fill( 2 , 10 ,'js');
//$array = array_fill( -3 , 10 ,'js');
//$array = array_fill( -3 , 3 ,array('a','b','c'));
//$array = array_fill( 1 , 3 , array_fill(1,10,"islam") );


//=================

// array of keys to pass to array_fill_keys
$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 
        'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');

$ar = array_fill_keys($months, 0);

//=================
// range arguments: start value, end value
//$ar = range(1, 10);
//$ar = range('a', 'f');
//$ar = range(5, 1);

// arguments: start value, end value, step
//$ar = range('A', 'M', 3); // 2 mean forget one leterr after a & 3 mean forget two letter after a
//$ar = range(.1, 1, .3); // 01 start , 1 range to one , 0.3 mean add 0.3 every time

//=================

//array_pad
/*
$ar = array('a', 'b', 'c');
// pad $ar to length of 8 with character 'd'
$ar2 = array_pad($ar, 8, 'd');
*/

$ar = array('a', 'b', 'c');
// pass negative size to pad beginning of $ar
$ar2 = array_pad($ar, -6, 'z');

echo '<pre>';
print_r($ar2);
echo '</pre>';


?>
