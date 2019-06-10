<?php  

/*
    file_put_contents(file, data, mode, context) 
    //context for stream video

    Mode: FILE_APPEND
          LOCK_EX
          FILE_USE_INCLUDE_PATH
    */
    
    file_put_contents('islam.txt', ' php append0',FILE_APPEND); 
    //FILE_APPEND used to add data to old data
    
    file_put_contents('islam.txt', ' php append1',LOCK_EX); 
    //LOCK_EX  --> lock exclusive: delete old and add data only
  
    file_put_contents('islam.txt', ' php append2 ',FILE_APPEND | LOCK_EX ); 
    
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