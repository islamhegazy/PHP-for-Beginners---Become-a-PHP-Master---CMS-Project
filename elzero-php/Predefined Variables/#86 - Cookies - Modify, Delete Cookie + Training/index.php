<?php  

/*
Cookies - Modify, Delete Cookie + Training
*/

$mainColor = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mainColor = $_POST['color'];
    setcookie('background', $mainColor, time() + 3600, '/'); // delte --> time() - 3600
}else{
    if(isset( $_COOKIE['background'])){
        $mainColor = $_COOKIE['background'];
    } else{
        $mainColor  = '#fff';
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
<body style="background-color: <?php echo $mainColor ;?>">

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="color" name="color">
            <input type="submit" value="choose" >
        </form>

</body>
</html>