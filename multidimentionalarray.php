<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$multi=array(array("ram","rohit","rahul"),
				array("sita","mira","pragya"),
				array("dog","cat","mouse")
		);
		for ($i=0; $i <3; $i++) { 
			for ($j=0; $j < 3; $j++) { 
				echo $multi[$i][$j].",";
			}
			echo "<br>";
		}

		function addNumber($num1,$num2)
		{
			return $num1+$num2;
		}

		echo addNumber(5,10);
	?>
</body>
</html>