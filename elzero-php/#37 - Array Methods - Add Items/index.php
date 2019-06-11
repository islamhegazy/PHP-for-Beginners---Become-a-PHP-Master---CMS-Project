<?php  
$programingLang = array(
    'Html',
    'Css',
    "php"
);

echo '<pre>';
print_r($programingLang);
echo '</pre>';

array_push($programingLang, 'js', 'json','xml'); //add  to end

echo '<pre>';
print_r($programingLang);
echo '</pre>';

array_unshift($programingLang, 'ajax', 'mysql','xmls'); //add to start

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