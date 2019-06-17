<?php  
/*
array_reverse($arrayName,preserve); // preserve الحفاظ

save keys index: true | false
*/

$programingLang = array(
    'Html', 
    'Css',
    "php" 
   );

echo '<pre>';
print_r($programingLang);
echo '</pre>';

$reversed = array_reverse($programingLang, true); //save keys index: true | false


echo '<pre>';
print_r($reversed);
echo '</pre>';

/*
shuffle($arrayName);
تستخدم فى موقع الاسئلة العشوائية
*/
shuffle($programingLang); // خلط index 
 
echo '<pre>';
print_r($programingLang);
echo '</pre>';
?>

