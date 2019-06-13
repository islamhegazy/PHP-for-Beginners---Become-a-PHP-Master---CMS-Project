<?php  
$name = 'islam';
//mkdir($name); //make folder 
//rmdir($name); //remove folder

/*
if(is_dir($name)){
    rmdir($name);
    echo "the Directory " . $name . " is Deleted";
}else{
   echo "there is no Directory with this name " . $name;
}
*/

if(is_dir($name)){
    echo "the Directory " . $name . " is Exist";
}else{
   mkdir($name);
   echo "The  Directory name " . $name . " Is Created";
}

?>

