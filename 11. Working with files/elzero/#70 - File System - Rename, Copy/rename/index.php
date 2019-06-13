<?php  
/*
    rename (oldfile, newfile, context);
    //rename can move to new path
    //rename for file and directory
*/

//rename('islam.txt', 'newIslam.txt');
//mkdir('PHP');
//rename('newIslam.txt', __DIR__ . '/PHP/file.txt');

mkdir('Backup');
copy(__FILE__,__DIR__ . '/Backup/2019.bak');
?>

