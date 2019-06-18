<?php

class person {

    public $name;
    public $email;

    public function __construct($n,$e) {
        
        $this->name = $n;
        $this->email = $e;
    }

}

$main = new person("islam","islam@info");
echo "<pre>"; print_r($main); echo "</pre>";

/*
$copy = $main; //copy by reference and any change in one effect in another because are interlinked
echo "<pre>"; print_r($copy); echo "</pre>";

$main->name = "ahmed";

echo "<pre>"; print_r($main); echo "</pre>";
echo "<pre>"; print_r($copy); echo "</pre>";

$copy->name = "sayed";

echo "<pre>"; print_r($main); echo "</pre>";
echo "<pre>"; print_r($copy); echo "</pre>";
*/



//  make object not effect by another using clone 
$copy = clone $main; // by clone --> $copy not effected by $main 
echo "<pre>"; print_r($copy); echo "</pre>";

$main->name = "ahmed";

echo "<pre>"; print_r($main); echo "</pre>";
echo "<pre>"; print_r($copy); echo "</pre>";

$copy->name = "sayed";

echo "<pre>"; print_r($main); echo "</pre>";
echo "<pre>"; print_r($copy); echo "</pre>";

?>
