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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>

<body>




</body>

</html>