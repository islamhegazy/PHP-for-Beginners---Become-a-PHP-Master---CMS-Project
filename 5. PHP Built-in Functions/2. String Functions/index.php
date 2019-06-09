<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2. String Functions</title>
</head>
<body>
  <?php 
  	
  	$string = "Hellow student do you like the class";
  	echo "String length: " . strlen($string);
  	echo "<br>";
  	echo "String to upper: " . strtoupper($string);
  	echo "<br>";
  	echo "String to lower: " . strtolower($string);
  	echo "<br>";
  	$number = 9;
	$str = "Beijing";
	printf("There are %u million bicycles in %s.",$number,$str);
	/*
	%% - Returns a percent sign
	%b - Binary number
	%c - The character according to the ASCII value
	%d - Signed decimal number (negative, zero or positive)
	%e - Scientific notation using a lowercase (e.g. 1.2e+2)
	%E - Scientific notation using a uppercase (e.g. 1.2E+2)
	%u - Unsigned decimal number (equal to or greather than zero)
	%f - Floating-point number (local settings aware)
	%F - Floating-point number (not local settings aware)
	%g - shorter of %e and %f
	%G - shorter of %E and %f
	%o - Octal number
	%s - String
	%x - Hexadecimal number (lowercase letters)
	%X - Hexadecimal number (uppercase letters)
	*/
   ?>

   
</body>
</html