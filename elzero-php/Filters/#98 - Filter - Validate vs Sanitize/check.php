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

    -Sanitize filters     
        https://www.php.net/manual/en/filter.filters.sanitize.php    

        */

$input = $_POST['test'];

$sanitized = filter_var($input,FILTER_SANITIZE_NUMBER_INT);//Remove all characters except digits, plus and minus sign.

echo "main input {$input} <br>";
echo "sanitized input {$sanitized} <br>";

if(filter_var($sanitized, FILTER_VALIDATE_INT) !== FALSE){

    echo "Good";
}else{
    echo "Bad";
}
