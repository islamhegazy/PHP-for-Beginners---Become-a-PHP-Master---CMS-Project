<?php  
/*

Super Globals:
    Globals['name'] --> can be accessed in any where
*/

$name = "islam";
function testFunc(){
    //func scope
    echo $GLOBALS['name'];
}

testFunc();

echo '<hr>';

function testFunc2(){
    $GLOBALS['name2'] = "islam2";
}

testFunc2();
echo $name2;

echo '<hr>';


function testFunc3(){
    global $name3;1
    $name3 ="islam3" ;
}

testFunc3();

echo $name3 . '<br>';
echo $GLOBALS['name3'];

echo '<hr>';

$name4 = "islam4";

function testFunc4(){
    $name4= "Ali";
    echo "func local name is :". $name4 . '<br>';
    echo "func global name is :". $GLOBALS['name4'] . '<br>';
}
testFunc4();
?>

