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

