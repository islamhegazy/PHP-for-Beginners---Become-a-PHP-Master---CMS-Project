<?php
/*
filter_var(variable,filter type,option);
*/
$string = $_POST['test'];

// اى حجاه تتحط تطلع sTRING
echo filter_var($string, FILTER_SANITIZE_STRING); //SANITIZE تعقيم


