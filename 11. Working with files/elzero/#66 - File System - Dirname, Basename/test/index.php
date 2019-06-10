<?php  

$path = __file__ ;
$dir =  dirname($path);
echo $dir . "<br>";

include $dir . "/../inc/text.php"; //this folder inc is out folder test
echo "<br>";

include __DIR__  . "/../inc/text.php"; // php 5.3.0
echo "<br>";

echo dirname(__FILE__,2); //back two in php 7

echo "<hr>";

//basename(path,suffex) 

echo basename(__FILE__); //index.php
echo "<br>";
echo basename(__FILE__, '.php'); //index
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