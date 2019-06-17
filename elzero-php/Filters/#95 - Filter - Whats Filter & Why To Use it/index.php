<?php
/*
i can send html tag and js and php code in input
so use filters
Filter:
    can filter:
            User Input
            Cookies
            Web Service
            Server Variables
            Database query result

    filter_list(); --> array contain all filters
*/
foreach(filter_list() as $filter){
    
    echo $filter . '<br>';
}

?>
<form action="check.php" method="post">
    <input type="text" name="test">
    <input type="submit" name="login">
</form>

