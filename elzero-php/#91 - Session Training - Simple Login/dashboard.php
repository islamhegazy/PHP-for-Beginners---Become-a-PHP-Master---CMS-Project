<?php  

session_start();

if(isset($_SESSION['username'])){

    echo "Welcome " . $_SESSION['username'] . " in dashboard";

}else{
    echo "your are not permitted to see this page";
}
