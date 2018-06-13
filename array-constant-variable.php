<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php
		//this is a single line comment
		/*
		this is a 
		multi-line comment
		*/
		echo "hello world"."</br>";
		$name="priya";
		echo "\n";
		echo $name."</br>";

		$a=5;
		$b=10;
		$r=$a+$b;
		echo "5 + 10 is $r"."</br>";

		/*scope of variables
		 global- a vairable declared outside a function has a global scope and can only be accessed outside a function. Using it inside a function will generate an error.

		 local- a variable declared within a function has a local scope and can only be accessed within that function.

		 global keyword is used to access a global variable from within a function.
		*/

		 function myTest()
		 {
		 	echo "inside the function ";
		 	global $r;
		 	echo $r."</br>";
		 }
		 myTest();

		 var_dump($a);  //returns the datatype and value
		 echo "</br>";
		 //array

		 $cars=array("volvo","bmw","toyoto");
		 echo $cars[0]."</br>";
		 echo $cars[1]."</br>";
		 echo $cars[2]."</br>";
		 echo strlen($cars[0]);  //length of object
		 echo "</br>";
		 $word="hi this is priya";
		 echo "number of words in 'hi this is priya' is ";
		 echo str_word_count($word); //number of words
		 echo "</br>";
		 echo "it's reverse is=";
		 echo strrev($word);   //reverse
		 echo "</br>";
		 echo "reverse of volvo is=";
		 echo strrev($cars[0]);  //reverse
		 echo "</br>";
		 echo "position of word 'priya' is=";
		 echo strpos("$word","priya");  //position
		 echo "</br>";
		 echo "after replacing priya with 'user' =";
		 echo str_replace("priya", "user","$word");  //replace
		 echo "</br>";

		 //constant is defines using define(name, value, case-insensitive);

		 define("greeting","welcome","true");
		 echo greeting."</br>";
		 echo GREETING."</br>";
		 echo Greeting."</br>";
	?>
</body>
</html>