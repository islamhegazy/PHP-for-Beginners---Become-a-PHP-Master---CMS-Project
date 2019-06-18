<?php

interface DBConnects{

    public function getUsers();
    public function getArticles();
    public function ShowStats();
}

class mySql implements DBConnects{

    public function getUsers(){
        echo 'SELECT * FROM users<br>';
    }
    public function getArticles(){
        echo 'SELECT * FROM articles<br>';
    }

    public function ShowStats(){
        echo 'SELECT * FROM stats<br>';
    }
}

class oracle implements DBConnects{

    public function getUsers(){
        echo 'SELECT * FROM users2<br>';
    }
    public function getArticles(){
        echo 'SELECT * FROM articles2<br>';
    }

    public function ShowStats(){
        echo 'SELECT * FROM stats2<br>';
    }
}
$row = new mySql ;

$row ->getUsers();
$row ->getArticles();
$row ->ShowStats();

echo '<hr>';

$row2 = new oracle ;

$row2 ->getUsers();
$row2 ->getArticles();
$row2 ->ShowStats();

?>

