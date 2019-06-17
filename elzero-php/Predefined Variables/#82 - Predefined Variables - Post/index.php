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

*/

?>

<form action="control.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" name="login">
</form>


