<!DOCTYPE html>
<html>
<head>
	<title>php half diamond</title>
</head>
<body>
	<?php
		for ($i=0; $i <4 ; $i++) 
		{ 
			$sum=1;
			for ($j=0; $j <= $i; $j++) 
			{ 
				echo $sum."&nbsp;";
				$sum+=2;	
			}
			echo "<br>";	
		}
		for ($i=0; $i <3 ; $i++) 
		{ 
			$sum=1;
			for ($j=2; $j >= $i; $j--) 
			{ 
				echo $sum."&nbsp;";
				$sum+=2;	
			}
			echo "<br>";	
		}
	?>
</body>
</html>