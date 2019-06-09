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

        function changeEngine(){
            $this->engine = 2;
        }
    };
  
   $bmw = new Car(); // instance
   
   class plane extends Car{ //inheretance
    var $hood = 20; //ovrride the value from class car
   }

   $jet = new plane(); 
   echo $jet -> hood . "<br>";

   $jet->MoveWheels('jet');

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