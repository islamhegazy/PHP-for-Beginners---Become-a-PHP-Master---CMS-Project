<?php 
    class Car {

        static $wheels = 4; //use in class and we can not use it in instance
       
       static function MoveWheels()
        {
           echo Car::$wheels . "<br>" ;
        }

    
    };
  
   $bmw = new Car(); // instance
   //echo $bmw -> wheels; //we can't do that

   echo Car:: $wheels . "<br>"; // we can use static anywhere while we refer to class
    Car:: MoveWheels();

   class plane extends Car{ //inheretance
   
   }

   $jet = new plane(); 
   // echo $jet -> wheels; //we can't do that
  // echo jet:: $wheels; //we can't do that

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