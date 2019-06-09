<?php 
    class Car {

        function MoveWheels()
        {
           echo " it move";
        }
    }

    if(method_exists("Car", "MoveWheels")){
        echo "yes this method MoveWheels exist";
    }else{
        echo "no";
    }

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