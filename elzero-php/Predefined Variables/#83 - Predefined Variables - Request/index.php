<?php  
/*

Super Globals:
    Globals['name'] --> can be accessed in any where
    $_SERVER -->getting information about the host
    $_GET['name']; --> getting inforamtion from database
    $_POST['name'] --> Sending information to database
    الفرق بين get and post
    ان post مش بتبعت فى اللينك المتغيرات 
    لكن زيها زى get
    بتقدر تسحب البيانات

    $_REQUEST['name']; --> collect data from the form

*/

?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="username">
    <input type="submit" name="send">
</form>


<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        echo " you are using post process data <br>";
        echo $_SERVER['REQUEST_METHOD'] . '<br>';
        echo $_REQUEST['username']. '<br>';

    }else{
        echo "error";
    }

?>