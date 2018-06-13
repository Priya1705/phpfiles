<!DOCTYPE html>
<html>
<head>
	<title>php table</title>
</head>
<body>
	<?php
		$a=array
		(
			array("Montgomery","Alabama","AL",32,-86),
			array("Juneau","Alaska","AK",58,-134),
			array("Phoenix","Arizona","AZ",33,-113),
			array("Little Rock","Arkansas","AR",22,-86)
		);
	?>
	<table border="3">
		<caption>Coordinates of state capitals</caption>
		<tr>
			<th>Capital</th>
			<th>State</th>
			<th>Code</th>
			<th>Latitude</th>
			<th>Longitude</th>
		</tr>
			<?php
				for($i=0;$i<4;$i++)
				{
					echo "<tr>";
					echo "<td>".$a[$i][0]."</td>";
					echo "<td>".$a[$i][1]."</td>";
					echo "<td>".$a[$i][2]."</td>";
					echo "<td>".$a[$i][3]."</td>";
					echo "<td>".$a[$i][4]."</td>";
					echo "</tr>";
				}
			?>
	</table>
</body>
</html>