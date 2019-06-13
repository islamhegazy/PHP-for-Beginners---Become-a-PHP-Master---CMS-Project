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


