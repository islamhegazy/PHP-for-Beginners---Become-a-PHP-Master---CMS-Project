<?php  
$programingLang = array(
    'Html',
    'Css',
    "php"
);

echo '<pre>';
print_r($programingLang);
echo '</pre>';

$lastLang = array_pop($programingLang);

echo '<pre>';
print_r($programingLang);
echo '</pre>';


echo $lastLang;

array_shift($programingLang);
echo '<pre>';
print_r($programingLang);
echo '</pre>';
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