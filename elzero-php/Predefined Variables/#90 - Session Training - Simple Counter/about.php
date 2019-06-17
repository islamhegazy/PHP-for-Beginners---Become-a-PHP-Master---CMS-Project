<?php

// resume the session 
session_start();

echo 'Hello ' .$_SESSION['name'] . ' How are you ?';

include 'c.php';

echo '<a href="index.php">Home</a>';