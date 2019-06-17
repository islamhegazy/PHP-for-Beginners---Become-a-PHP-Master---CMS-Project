<?php 

if($_SERVER['REQUEST_METHOD'] === "POST"){

    $admins = array('islam', 'hassan','sayed');
    $username =  $_POST['username'];

    if(in_array($username, $admins)){
        echo "Welcome ". $username. " to control panel for admin";
    }else{
        echo "Sorry This Username is not exist";
    }
}else{
    echo 'Sorry You can\'t browse this page directly must come with request';
}
