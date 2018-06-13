<!DOCTYPE html>
<html>
<head>
	<title>database Assign</title>
</head>
<body>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$name=$_POST["name"];
			$age=$_POST["age"];
			$dob=$_POST["dob"];
			$yof=$_POST["yof"];

			$servername = "localhost";
			$username = "root";
			$password = "password";
			$dbname = "phpAssign";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			// //for inserting in database
			// $sql="insert into student_info(name,age,dob,yof) values('$name',$age,$dob,$yof);";

			// if ($conn->query($sql) === TRUE) 
			// {
			//     echo "New record created successfully";
			// } 
			// else 
			// {
			//     echo "Error: " . $sql . "<br>" . $conn->error;
			// }

			
			// // for selecting from database
			// $sql="select * from student_info where age>=18;";
			// $result = $conn->query($sql);

			// if ($result->num_rows > 0) 
			// {
			//     while($row = $result->fetch_assoc()) 
			//     {
			//         echo "name" . $row["name"]. " - age: " . $row["age"]. " -dob" . $row["dob"]. "-yof".$row["yof"]."<br>";
			//     }
			// } 
			// else 
			// { 
			//     echo "0 results";
			// }


			// for updating from database
			// $sql="update student_info set yof=2014 where yof=2015;";
			// if ($conn->query($sql) === TRUE) 
			// {
			//     echo "Record updates successfully";
			// } 
			// else 
			// {
			//     echo "Error: " . $sql . "<br>" . $conn->error;
			// }



			// // for deleting from database
			// $sql="delete from student_info where age>24;";
			// if ($conn->query($sql) === TRUE) 
			// {
			//     echo "Records deleted successfully";
			// } 
			// else 
			// {
			//     echo "Error: " . $sql . "<br>" . $conn->error;
			// }


		$conn->close();
		} 
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td>Date of birth</td>
				<td><input type="text" name="dob"></td>
			</tr>
			<tr>
				<td>Year of admission</td>
				<td><input type="text" name="yof"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>