<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4. Global Variable and Scope</title>
</head>
<body>
  <?php 
  	$x = "outside"; //global 

  	function convert(){
  		global $x; //convert global 
  		$x = "inside"; //local
  	}

  	echo "{$x} <br>";

  	convert();

  	echo "{$x} <br>";

   ?>

   
</body>
</html>