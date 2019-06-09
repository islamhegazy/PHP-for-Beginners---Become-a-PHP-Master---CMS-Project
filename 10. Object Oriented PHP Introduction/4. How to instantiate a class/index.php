<?php 
    class Car {

        function MoveWheels($name)
        {
           echo "{$name}  moves <br>";
        }
    };

   $bmw = new Car();
   $bmw->MoveWheels('bmw');

   $merces_benz = new Car();
   $merces_benz->MoveWheels('merces_benz');

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