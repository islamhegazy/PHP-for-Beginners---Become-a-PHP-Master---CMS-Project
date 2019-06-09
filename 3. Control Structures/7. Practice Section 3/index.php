<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	

	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	//Step1
	echo "Step1:<br>";

	if(5 > 4){
		echo "I love PHP";
	}
	elseif (7<6) {
		echo "I love PHP";
	}
	else{
		echo "not love PHP";
	}

	echo "<hr>";

	//Step 2
	echo "Step2:<br>";

	for ($i=1; $i <= 10; $i++) { 
		echo "{$i} <br>";
	}
	
	echo "<hr>";
	//Step 3
	echo "Step3:<br>";

	$favcolor = "purple";
	switch ($favcolor) {
		case 'red':
			echo "your favorite color is <span style='background: red;'>red</span>";
			break;
		case 'blue':
			echo "your favorite color is <span style='background: blue;'>blue</span>";
			break;
		case 'green':
			echo "your favorite color is <span style='background: green;'>green</span>";
			break;
		case 'yellow':
			echo "your favorite color is <span style='background: yellow;'>yellow</span>";
			break;
		case 'purple':
			echo "your favorite color is <span style='background: purple;'>purple</span>";
			break;
		default:
			echo "your color not found";
			break;
	}
?>
