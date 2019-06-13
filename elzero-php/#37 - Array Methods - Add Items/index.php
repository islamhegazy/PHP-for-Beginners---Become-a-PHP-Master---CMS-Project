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


