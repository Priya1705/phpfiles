<!DOCTYPE html>
<html>
<head>
	<title>php operators and loops</title>
</head>
<body>
	<?php
		$x=15;
		if($x<10)
		{
			echo "yes"."</br>";
		}
		else if($x>10 && $x<=15)
		{
			echo "maybe"."</br>";
		}
		else
		{
			echo "no"."</br>";
		}

		$n=5;
		switch($n)
		{
			case 1:
				echo $n."</br>";
				break;
			case 2:
				echo $n."</br>";
				break;
			case 3:
				echo $n."</br>";
				break;
			case 4:
				echo $n."</br>";
				break;
			/*case 5:
				echo $n;
				break;*/
			default:
				echo "default"."</br>";
		}

		$s=4;
		while($s>0)
		{
			echo $s;
			$s--;
		}

		do
		{
			echo "hey"."</br>";
		}
		while($s>5);
		$t=4;
		for($y=0;$y<$t;$y++)
		{
			echo "hello"."</br>";
		}

		$colors=array("red","blue","yellow","green");
		foreach($colors as $color)
		{
			echo $color."</br>";
		}

		$arr=array("hi","hello","welcome","greet");
		$arr[4]="yes";
		echo $arr[3];
		$arrlength=count($arr);
		sort($arr);
		for($i=0;$i<$arrlength;$i++)
		{
			echo $arr[$i]."</br>";
		}

		//associative array
		$age=array("peter"=>"20","ben"=>"14","joe"=>"37");
		$age['ram']="30";
		echo "age of ram=".$age['ram']."</br>";
		foreach($age as $x=>$x_values)
		{
			echo $x." "."value = ".$x_values."</br>";
		}




	?>
</body>
</html>