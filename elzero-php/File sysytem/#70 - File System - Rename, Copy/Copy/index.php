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

