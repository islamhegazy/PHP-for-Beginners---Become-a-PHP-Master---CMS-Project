<?php  
$name = 'islam';
//mkdir($name); //make folder 
//rmdir($name); //remove folder

/*
if(is_dir($name)){
    rmdir($name);
    echo "the Directory " . $name . " is Deleted";
}else{
   echo "there is no Directory with this name " . $name;
}
*/

if(is_dir($name)){
    echo "the Directory " . $name . " is Exist";
}else{
   mkdir($name);
   echo "The  Directory name " . $name . " Is Created";
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