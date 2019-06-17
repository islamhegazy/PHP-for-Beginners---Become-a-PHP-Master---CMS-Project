<?php

// resume the session 
session_start();


echo  'hello ' .$_SESSION['username'] . '<br>'.
 'your favourite food now is ' .$_SESSION['favfood']  ;

echo '<pre>';
print_r($_SESSION);
echo '</pre>';