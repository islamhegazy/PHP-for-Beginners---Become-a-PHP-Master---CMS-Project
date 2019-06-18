<?php

class iphone {
  
    public $name;
    public $ram; 
    private $space;

    /*
    public function __get($prop) {
        echo " the property [" . $prop . "] not found or accessible <br>"; 
    }
    */

    //use set to prevent from set vlaue to prop not found or private
    public function __set($prop, $value) {
        echo " the property [" . $prop . "] not found or accessible <br>"; 
        echo " and you can not assign this value  [" . $value . "] to it<br><br>"; 
    }

}

$iphone6 = new iphone();

//echo $iphone6->color;

echo $iphone6->space ="12gb";

echo $iphone6->price=400;
?>
