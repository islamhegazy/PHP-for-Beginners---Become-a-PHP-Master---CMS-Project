<?php
session_start();

$admins =array('islam', 'ahmed','hassan');

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(in_array($username,$admins)){

        $_SESSION['username'] = $username ;

        echo "Welcome " . $_SESSION['username'] . " you will be redirected to control panel area";

      /*
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
      */

      header('REFRESH:2;URL=dashboard.php');

    }else{
        echo "no account with this username";
    }


}else{
    echo "You can not browse this page directly";
}