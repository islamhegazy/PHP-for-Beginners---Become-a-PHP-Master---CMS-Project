<?php  
/*
explode
split the string into array
explode(separator , $stringName ,limit);
*/

$str = "Hello I Love PHP";

echo $str . '<br>';

//$array = explode(" ", $str,4); 

//1 return all in one array
//2 return two index and other in last one 

//$array = explode(" ", $str,-1); 
// -1 return all without lasr index

//$array = explode(" ", $str,0); 
//0 return all in one array

/*
echo '<pre>';
print_r($array);
echo '</pre>';
*/


echo '<hr>';

$array = explode(" ", $str); 


for ($i=0; $i < count($array); $i++) { 
 echo "<link  rel='stylesheet' href='css/{$array[$i]}.css'/>";
}




?>

