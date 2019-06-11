<?php  
/*
sort($arrayName , sorting Type); تصاعدى
sorting Type:
            SORT_REGULAR
            SORT_STRING

*/
$programingLang = array(
    'Html',
    "30",
    'Css',
    10,
    "php",
    15
);

echo '<pre>';
print_r($programingLang);
echo '</pre>';

sort($programingLang); //defult  SORT_REGULAR and "30" come first because it string

echo '<pre>';
print_r($programingLang);
echo '</pre>';

sort($programingLang, SORT_STRING);

echo '<pre>';
print_r($programingLang);
echo '</pre>';

echo '<hr>';

/*
rsort($arrayName , sorting Type); تنازلى
sorting Type:
            SORT_REGULAR
            SORT_STRING

            reverse don't change the index

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