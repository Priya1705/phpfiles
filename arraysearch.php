<!DOCTYPE html>
<html>
<head>
	<title>array search</title>
</head>
<body>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$num=$_POST["number"];

			$search=$_POST["search"];
			$a=explode(',', $num);
			$count=0;
			for($i=0;$i<sizeof($a);$i++)
			{
				if($a[$i]==$search)
				{
					$count++;
				}
			}
			if($count>0)
			{
				echo "present".$count;
			}
			
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Enter elements of array<input type="text" name="number">
		Element to search<input type="text" name="search">
		<input type="submit" value="search">
	</form>
</body>
</html>