<?php  
/*
    copy (oldfile, newfile);
*/
//copy('islam.txt', 'compy_islam.txt')

/*
if(!copy('islam.txt', 'compy_islam.txt')){
    echo "sorry file not copied";
}else{
   echo 'file has been copied';
}
*/
function copyMe($extention){
    $original = __FILE__;

    return copy($original, $original . '.' . $extention);
}
copyMe('bal');
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