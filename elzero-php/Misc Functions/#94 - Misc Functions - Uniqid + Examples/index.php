<?php
/*
 Misc functions:
    uniqid(prefix ,more_Entropy ); --> unique identifier 
*/

$random = uniqid();

echo $random . '<br><br>';

var_dump($random);

echo '<hr>';

$random2 = uniqid('script1_');

echo $random2 . '<br><br>';


echo '<hr>';

$random3 = uniqid('','true'); //defult false --> اكثر عشوائية ويزود عدد الحروف من 13 الى 23

echo $random3 . '<br><br>';