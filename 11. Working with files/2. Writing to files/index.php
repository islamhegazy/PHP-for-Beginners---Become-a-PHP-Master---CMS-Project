<?php 

$file = "newFile.txt";
$handel = fopen($file,"w");
if($handel){
    fwrite($handel, "the file is writble");
    fclose($handel);
}else{
   echo "the file not writable";
}

/*
This might work out of the box for Windows users right away.
You might not have a problem but if you are a Mac user like I am or a Linux user and this is this is
a go for your Windows uses to actually listen to what I'm saying because you would probably have this
problem when you go on line in production.
So make sure that your server has rights to write to the file you are pacis server.
*/

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