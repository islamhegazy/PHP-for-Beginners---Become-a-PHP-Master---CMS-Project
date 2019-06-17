<?php

// resume the session 
session_start();

echo  'hello ' .$_SESSION['username'] . '<br>'.
 'your favourite food is ' .$_SESSION['favfood'] . '<br>' ;

 // modify 
$_SESSION['favfood'] = 'chicken'; // and if i go to page 2 it will be chicken

echo '<a href="page4.php">room 4</a>' ;

