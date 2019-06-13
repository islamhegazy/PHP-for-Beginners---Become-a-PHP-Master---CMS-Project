<?php  
/*
array_sum($arrayName);
*/

//$ar = array(20, 30, 10, 40, 100);
//$ar = array(20, 30, 'sa', 40, 'saz');

$ar = array(
    'a' => 20,
    1 => 30,
    2 => 'sa',
    3 => 40,
);

$sum = array_sum($ar);

echo '<pre>';
print_r($ar);
echo '</pre>';

echo '<pre>';
print_r($sum);
echo '</pre>';

?>

