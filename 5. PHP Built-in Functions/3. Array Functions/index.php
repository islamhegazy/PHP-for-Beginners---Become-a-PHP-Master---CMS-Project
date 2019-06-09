<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3. Array Functions</title>
</head>
<body>
  <?php 
  	$string = "sdsdsd";
  	$list = [343,34,323,23,54,232,453,$string];

  	echo max($list);
  	echo "<br>";
  	echo min($list);
  	echo "<br>";
  	echo print_r($list);
  	echo "<br>";
  	sort($list);
  	echo print_r($list);
		echo "<br>";
		$found = in_array($string, $list);
		if ($found) {
			echo "Wow we find it";
		}else{
			echo "we messed up";
		}
   ?>

   
</body>
</html