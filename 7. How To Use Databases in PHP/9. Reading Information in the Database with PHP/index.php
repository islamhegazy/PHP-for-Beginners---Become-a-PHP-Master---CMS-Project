
<?php

if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    
    if ($connection) {
        echo "we are connected <br>";
        
    } else {
        
        die("Database connection failed");
    }
    
    
    //Read
    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('Query FAILED' . mysqli_error());
    }
    
    
    
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>9. Reading Information in the Database with PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

  <div class="container">
    <form method="post" action="index.php">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
/*
while ( $row = mysqli_fetch_row($result)) {

$print = print_r($row, true);

echo "<pre> {$print} </pre>";
}
*/

//or 

while ($row = mysqli_fetch_assoc($result)) { //associative array
    
    $print = print_r($row, true);
    
    echo "<pre> {$print} </pre>";
}

?>
 </div>





</body>

</html