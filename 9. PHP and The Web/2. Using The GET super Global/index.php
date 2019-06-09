<?php

print_r($_GET);

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

<?php 
 
    $id = 10;

?>
    <a href="index.php?id=<?php echo $id?>&source=reports"> click here</a>

    <h3>ex:2</h3>
    <a href="index.php?a"> click here 2</a>
   

    <pre>
    <?php
    print_r($_GET);
    if($_GET["a"] === "") echo "a is an empty string\n";
    if($_GET["a"] === false) echo "a is false\n";
    if($_GET["a"] === null) echo "a is null\n";
    if(isset($_GET["a"])) echo "a is set\n";
    if(!empty($_GET["a"])) echo "a is not empty";
    ?>
    </pre>
</body>
</html>     