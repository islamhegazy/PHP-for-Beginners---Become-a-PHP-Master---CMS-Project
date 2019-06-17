<?php
/*
filter_var(variable,filter type,option);

Filter Type:
    - Validate filters:
        https://www.php.net/manual/en/filter.filters.validate.php

    - Sanitize filters

*/
$input = $_POST['test'];


if(filter_var($input,FILTER_VALIDATE_INT) !== false){
    echo " good the ". $input . " you entered is int";
}else{
    echo " goof the ". $input . " you entered is not int";
}


