<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3. Return Values From Functions</title>
</head>
<body>
  <?php 
  	function addNumbers($n1,$n2){
  		$sum = $n1 + $n2;
  		return $sum;
  	}

  	//echo addNumbers(2,4);
  	$result = addNumbers(2,4);
  	echo "result: {$result} <br>";

  	$result = addNumbers(100, $result);
   	echo "result: {$result}";
   	
   ?>

   
</body>
</html>