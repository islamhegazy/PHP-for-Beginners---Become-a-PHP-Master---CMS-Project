<?php 
    class Car {

        var $wheels = 4,
         $hood = 1,
         $engine = 1,
         $doors = 4;

        function MoveWheels($name)
        {
           echo "{$name}  moves <br>";
        }

        //every time we create instance this construct get executed 
        function __construct(){ 
         echo   $this->engine = 2 . "<br>";
        }
    };
  
   $bmw = new Car(); // instance
   


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