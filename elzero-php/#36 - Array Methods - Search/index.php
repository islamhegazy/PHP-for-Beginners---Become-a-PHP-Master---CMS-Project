<?php  
$programingLang = array(
    'Html',
    'Css',
    "php",
    5
);
/*
in_array(الابره , القض , النوع)
*/

if(in_array('5', $programingLang )){ 
    echo ' yes it is exist';
}else{
    echo ' no it is not exist';
}

echo '<hr>';

if(in_array('5', $programingLang, true)){ //defult false and true make to check identical
    echo ' yes it is exist';
}else{
    echo ' no it is not exist';
}
echo '<hr>';

/*
array_search(الابره , القض , النوع)
*/
$lang = array_search('php',$programingLang, true );
echo 'yes it found in index ' . $lang . " and the value is {$programingLang[$lang]}"; //index in array 


echo '<hr>';

if(array_key_exists("Html", $programingLang )){
    echo ' yes it is exist'; //it not echo because it index array and we need associative array
}

if(array_key_exists(2, $programingLang )){
    echo ' yes it is exist'; //it  echo because it index array and we check for index 2
   // index must be in array to search on it 
}
echo '<br>';
$numbers = array(
    'n1' => 1,
    'n2' => 2,
    'n3' => 3,
    'n4' => 4,

);
if(array_key_exists('n2', $numbers )){
    echo ' yes it is exist'; //it  echo because it associative array and we check for key
}
?>

