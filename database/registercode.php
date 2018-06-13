<?php
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	$contact=$_POST["contact"];
	$id=$_POST["id"];

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "fullform";

	//connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 



	$sql = "INSERT INTO register(id,name, password, mobile) VALUES('$id','$name', '$pass','$contact')";

	if(mysqli_query($conn,$sql))
	{
		echo "Registerd Successfully";
	}
	else
	{
		echo mysqli_error($conn);
	}



?>