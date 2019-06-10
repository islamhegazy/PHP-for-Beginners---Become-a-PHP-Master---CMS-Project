<?php  
/*
    unlink(filename, context);//delete file and must be writble
*/
$file = 'islam.txt';
if(file_exists($file)){

    if(is_writable($file)){
        unlink($file);
    }else{
        echo "File not writable";
        chmod($file, 0777); //change to be writble
    }
   
}else{
    echo "File not found";
   
}

echo "<hr>";

/*
    rmdir(directory);
*/

    rmdir('islam'); // must folder be empty to remove it

    

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