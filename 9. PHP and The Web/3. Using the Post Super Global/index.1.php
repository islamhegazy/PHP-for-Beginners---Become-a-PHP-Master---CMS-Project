

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">

        <input name="person[0][first_name]" value="john" />
        <input name="person[0][last_name]" value="smith" />
       
        <input name="person[1][first_name]" value="jane" />
        <input name="person[1][last_name]" value="jones" />
   
        <input type="submit" name="submit">
    </form>

    
    <?php

if(isset($_POST['submit'])){
    print_r($_POST['person']);
}
//will get you something like:
/*
array (
0 => array('first_name'=>'john','last_name'=>'smith'),
1 => array('first_name'=>'jane','last_name'=>'jones'),
)

*/
?>



</body>

</html>