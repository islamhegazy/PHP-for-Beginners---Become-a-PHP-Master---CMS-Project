<?php 

$admins = array('islam', 'hassan','sayed');

$username =  $_GET['username'];

if(in_array($username, $admins)){
    echo "Welcome ". $username. " to control panel for admin";
}else{
    echo "Sorry This Username is not exist";
}