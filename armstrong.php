<!DOCTYPE html>
<html>
<head>
	<title>armstrong</title>
</head>
<body>
	<?php
		for($num=100;$num<=1000;$num++)
		{
			$t=$num;
			$sum=0;
			while($t!=0)
			{
				$x=$t%10;
				$sum=$sum+($x*$x*$x);
				$t=$t/10;
			}
			if($sum==$num)
			{
				echo "armstrong".$num."<br>";
			}
		}
	?>
</body>
</html>