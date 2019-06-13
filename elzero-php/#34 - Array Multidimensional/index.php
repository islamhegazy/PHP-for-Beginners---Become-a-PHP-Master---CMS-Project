<?php  
$diet = array (
    array('Apple', 'Banana', 'Milk'),
    array('Meat', 'Egg'),
    array('Rice', 'Apple'),
    array('Bread', 'Apple', 'Banana'),
    array(
        array(1,2,3),
        array(145,662,311)
    )
);

echo '<pre>';
print_r($diet);
echo '</pre>';

echo $diet[0][2];

echo '<br>';
echo $diet[4][0][2];


echo '<br>';
echo $diet[4][1][2];
?>


