<!DOCTYPE html>
<html>
<head>
	<title>php numbers</title>
</head>
<body>
	<?php
		$a=array(450,540,600,675);
		for($i=0;$i<4;$i++)
		{
			$x=0;
			$y=0;

			if($a[$i]%15==0)
            {
                //special
                $x=1;
            }
            if($a[$i]>999)
            {
                //big
            }
            if(($a[$i]%5==0)&&($a[$i]%6==0)&&($a[$i]%18!=0))
            {
                //weird
            }
            if(($a[$i]>999)||(($a[$i]%5==0)&&($a[$i]%6==0)&&($a[$i]%18!=0)))
            {
                //scary
                $y=1;
            }
            if($x==1 && $y!=1)
            {
                echo "special and not scary".$a[$i]."<br>";
            }
		}
	?>
</body>
</html>