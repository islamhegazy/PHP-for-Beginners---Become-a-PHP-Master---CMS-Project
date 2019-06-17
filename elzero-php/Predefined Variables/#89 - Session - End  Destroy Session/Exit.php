<?php

// exit the session 
session_start();

//unset data
session_unset();

//destroy
session_destroy();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
 