<?php  
/*
    pathinfo(path, options);
*/
echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r(pathinfo(__FILE__, PATHINFO_DIRNAME));
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r(pathinfo(__FILE__, PATHINFO_FILENAME));
echo "</pre>";

echo "<hr>";

$links = pathinfo(__FILE__);
echo $links['dirname'];
echo "<hr>";

if($links['extension'] === 'php'){
    echo "done";
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