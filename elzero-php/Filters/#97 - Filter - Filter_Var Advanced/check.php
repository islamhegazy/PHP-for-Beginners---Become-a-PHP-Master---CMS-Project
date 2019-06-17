<?php
/*
filter_var(variable,filter type,option);

Filter Type:
    - Validate filters:
        https://www.php.net/manual/en/filter.filters.validate.php

Option:
https://www.php.net/manual/en/filter.filters.validate.php
for int 
        default,
        min_range,
        max_range	
Flags
     FILTER_FLAG_ALLOW_OCTAL,   
      FILTER_FLAG_ALLOW_HEX
*/

$input = $_POST['test'];

$option = array (
    'options' => array(
        'min_range' =>1,
        'max_range' => 999
    ),
    'flags' => FILTER_FLAG_ALLOW_OCTAL
);

if(filter_var($input,FILTER_VALIDATE_INT, $option) !== false){
    echo " good the ". $input . " you entered is int and it from 1 to 999";
}else{
    echo " goof the ". $input . " you entered is not int and it must between 1 to 999";
}


echo '<hr>';

$input = $_POST['test'];

$option = array (
    'options' => array(
       
    ),
    'flags' => FILTER_FLAG_IPV6
);

if(filter_var($input,FILTER_VALIDATE_IP, $option) !== false){
    echo " good the ". $input . " you entered is ip version 4";
}else{
    echo " goof the ". $input . " ou entered is not ip version 4";
}


echo '<hr>';

$input = $_POST['test'];


//use flag direct 

if(filter_var($input,FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false){
    echo " good";
}else{
    echo "bad ";
}


