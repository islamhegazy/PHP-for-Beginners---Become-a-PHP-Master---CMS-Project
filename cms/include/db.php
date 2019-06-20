<?php 

$db = array(
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'cms'  
);

foreach($db as $key => $value){
    $constName = strtoupper($key);
    define($constName, $value);
}

/*
echo  $constName . "<br>";
DB_HOST
DB_USER
DB_PASS
DB_NAME
*/
$connection = @mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die('there\'s some thing wrong with connection');




?>