<?php  
//echo dirname(__file__);
/*
$file = "islam.txt";
if (file_exists($file)){
    echo 'the file exist';
    file_put_contents($file,'add content');
}else{
    echo 'the file not exist';
    file_put_contents($file,'created by php'); //if there is no file it create file and put content
}
*/

$file = "islam.txt";
if (is_writable($file)){
    echo 'the file is writable';
    file_put_contents($file,' is writable');
}else{
    echo 'the file is not writable';
    file_put_contents($file,'created by php'); //if there is no file it create file and put content
}
?>

