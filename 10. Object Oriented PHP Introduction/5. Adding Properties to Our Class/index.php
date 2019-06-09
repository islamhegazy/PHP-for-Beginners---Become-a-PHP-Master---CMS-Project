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
    //methods
   $bmw = new Car(); // instance
   $bmw->MoveWheels('bmw');

   $merces_benz = new Car();
   $merces_benz->MoveWheels('merces_benz');

    

   //porpertites
   echo $bmw->wheels ."<br>";
   $bmw->wheels = 8 ; //change value
   echo $bmw->engine ."<br>";
   echo $bmw->wheels ."<br>";

   //methods
   $bmw->changeEngine();
   echo $bmw->engine ."<br>";
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