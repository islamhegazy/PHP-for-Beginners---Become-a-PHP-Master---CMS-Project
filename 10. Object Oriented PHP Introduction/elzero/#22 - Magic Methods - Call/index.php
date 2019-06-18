<?php

class iphone {
  
    public function __call ($method,$prams){
        echo "The  method [" . $method ."] not found and The prams [" . $prams[0]. "] not found too<br>" ;
        print_r($prams);
    }

}

$iphone6 = new iphone();

$iphone6->sayhellow("islam","ali");
?>

