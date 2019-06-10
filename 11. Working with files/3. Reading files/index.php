<?php 
$file = "newFile.txt";
$handel = fopen($file,"r");
if($handel){
    //$content = fread($handel,4); // 4 -> number of bites
    $content = fread($handel,filesize($file)); // read the whole entire file
    echo $content;
    fclose($handel);
}else{
   echo "the file not writable";
}

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