<?php 
   
   session_start();
   echo $_SESSION['greeting']; 
    /*Deleting Session
   ========================== */ 
   //unset($_SESSION["greeting"]);
   /*session deleted. if you try using this you've got an error*/
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>

<body>



</body>

</html>