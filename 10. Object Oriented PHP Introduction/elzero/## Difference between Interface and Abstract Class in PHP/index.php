<?php

abstract class device{

    public $ram;

    abstract public function saybye($arg);
}



class apple extends device {

    function saybye($arg){

        echo " bye {$arg}";
    }
}




$iphone6 = new apple;

$iphone6 ->saybye("iphone6");


echo "<br>=====================================================================================<br>";

interface mobile {
    public function presshome();
}


interface mobile2{
    public function pressvloumeup();
}

class iphone implements mobile, mobile2 {
    public $name;
    public function presshome() {
        echo "presshome <br>";
    }
    public function pressvloumeup() {
        echo "pressvloumeup <br>";
    }
}


$iphone4 = new iphone;

echo "<pre>"; print_r($iphone4); echo "</pre>";

$iphone4 ->presshome();
$iphone4 ->pressvloumeup();

?>

