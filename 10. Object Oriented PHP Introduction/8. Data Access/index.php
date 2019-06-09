<?php 
    class Car {

        public $wheels = 4;
        protected $hood = 1; //avaiable to this class or any subclasses
        private $engine = 1; // this class only
        var $doors = 4; //like public

        function MoveWheels()
        {
           echo $this->hood . "<br>" ;
        }

        function changeEngine(){
            echo $this->engine . "<br>";
        }
    };
  
   $bmw = new Car(); // instance
   //echo $bmw -> hood; //Fatal error can not use outside class
   //echo $bmw -> engine; //Fatal error can not use outside class
   $bmw-> MoveWheels();
   $bmw-> changeEngine();

   class plane extends Car{ //inheretance
   
   }

   $jet = new plane(); 
   //echo $jet-> engine . "<br>";

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