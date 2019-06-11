<?php  
/*
    Scandir(dir, sort, context);
*/

    $link = __DIR__ . '/islam';

    $files =scandir($link);
    echo "<pre>";
    print_r( $files);
    echo "</pre>";   

    $files2 =scandir($link,1);//or scandir($link,SCANDIR_SORT_DESCENDING)
    echo "<pre>";
    print_r( $files2);
    echo "</pre>";  

   
    foreach($files as $file){

         //remove files
       
        if(is_file($link . "/" . $file)){
            unlink($link . "/" . $file);
           // echo($link . "/" . $file);
            
        }
       
      
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