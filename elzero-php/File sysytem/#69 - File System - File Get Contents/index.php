<?php  

/*
    file_get_contents(file, include_path, context, offset, max_length) 
    //context for stream video
    //offset mean start read from
    */
    
    //echo file_get_contents('https://elzero.org/');
     
    //echo file_get_contents('read.txt',false, Null, 6, 10);
    //var_dump( file_get_contents('read.txt',false, Null, 6, 10));
    
    $name = file_get_contents('read.txt',false, Null, 6, 10);
    file_put_contents('write.txt', $name);
?>

