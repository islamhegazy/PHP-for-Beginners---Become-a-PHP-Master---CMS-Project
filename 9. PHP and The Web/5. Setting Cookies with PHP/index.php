<?php 
    $nameCookie = "someThing";
    $valueCookie = 100;
    //time(); //it give all the secinds form 1970
    // (60 * 60 * 24 * 7) == week
    $expiration = time() + (60 * 60 * 24 * 7); 
    print_r($_COOKIE);
    setcookie($nameCookie, $valueCookie, $expiration);

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