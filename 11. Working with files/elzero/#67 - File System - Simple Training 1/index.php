<?php  

/*
    [1]  check if directory is exist or no
    [2]  make the directory 
    [3]  assigin the directory to variable
    [4]  create file inside the directory
    [5]  assigin the file to variable
    // wehen make directory the permission is 0777
    [6] change mode file to be read only
    [7] check file is writable
    [8] change mode of the file and make it writable 
    [9] include the file

 */
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo "<br>";
//[1]
if(file_exists(__DIR__. '/PHP')){ // or file_exists('PHP')
    echo "the directory is exist";
}else {
    //[2]
    mkdir('PHP'); // or mkdir(__DIR__. '/PHP');
    echo "the directory is not exist";
}
echo "<br>";
//[3]
$directory = __DIR__ . '\PHP\\';
echo $directory;
//[4]
file_put_contents($directory. 'newfile.php','Hello');
echo "<br>";
//[5]
$file = $directory. 'newfile.php';
echo $file;
echo "<br>";
//[6]
chmod($file,0444);
//[7] 
if(is_writable($file)){
    echo "this is writable";
}else{
    echo "this is not writable";
}
//[8]
chmod($file,0777);
//[9]
echo "<br>";
include $file;
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