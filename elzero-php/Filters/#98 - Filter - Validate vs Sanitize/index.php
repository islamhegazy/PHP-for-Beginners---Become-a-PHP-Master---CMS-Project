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

?>
<form action="check.php" method="post">
    <h3>enter pin code (only numbers allowed):</h3>
    <input type="text" name="test">
    <input type="submit" name="login">
</form>

