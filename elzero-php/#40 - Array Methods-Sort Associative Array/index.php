<?php  
/*
Sort Associative Array:

for value
asort($arrayName ,Sorting type); 
arsort($arrayName , sorting Type); تنازلى for value

for keys
ksort($arrayName ,Sorting type); 
krsort($arrayname ,Sorting type);
*/

$programingLang = array(
    'Html' => 80,
    "30" => 70,
    'Css' => 45,
    "php" => 2,
   );

echo '<pre>';
print_r($programingLang);
echo '</pre>';

ksort($programingLang); //defult  SORT_REGULAR and "30" come first because it string

echo '<pre>';
print_r($programingLang);
echo '</pre>';

ksort($programingLang, SORT_STRING);

echo '<pre>';
print_r($programingLang);
echo '</pre>';

echo '<hr>';

/*

*/

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