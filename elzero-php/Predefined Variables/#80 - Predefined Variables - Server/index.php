<?php  
/*

Super Globals:
    Globals['name'] --> can be accessed in any where
    $_SERVER -->getting information about the host
    
*/
echo $_SERVER['PHP_SELF']; // الصفحة اللى انا فيها 
echo "<br><br>";

echo $_SERVER['SERVER_ADDR'];// ip addres
echo "<br><br>";

echo $_SERVER['SERVER_NAME'];
echo "<br><br>";

echo $_SERVER['QUERY_STRING']; // ?name=islam in url //print info after ?
echo "<br><br>";

echo $_SERVER['HTTP_REFERER']; //بتقول على اسم الصفحة اللى انت جاى منها
echo "<br><br>";

echo $_SERVER['SERVER_PORT']; 
echo "<br><br>";

echo $_SERVER['DOCUMENT_ROOT']; 
echo "<br><br>";
?>



