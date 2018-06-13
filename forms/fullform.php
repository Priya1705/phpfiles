<!DOCTYPE html>
<html>
<head>
	<title>form using php</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
			<tr>
				<td><a href="register.php">Register</a></td>
			</tr>
		</table>
	</form>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "password";
		$dbname = "fullform";

		$name = $pass ="";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$uname=trim($_POST["uname"]);
			$pass=trim($_POST["pass"]);

			$sql = "SELECT id FROM register WHERE name = '$uname' and password = '$pass'";
			$result = mysqli_query($conn,$sql);
	
			//Check whether the query was successful or not
			if($result) 
			{
				if(mysqli_num_rows($result) > 0) 
				{
					//Login Successful
					session_regenerate_id();
					$member = mysqli_fetch_assoc($result);
					$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
					$_SESSION['SESS_FIRST_NAME'] = $member['username'];
					$_SESSION['SESS_LAST_NAME'] = $member['password'];
					session_write_close();
					header("location: welcome.php");
					exit();
				}
				else 
				{
					//Login failed
					$errmsg_arr[] = 'user name and password not found';
					$errflag = true;
					if($errflag) 
					{
						$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
						session_write_close();
						header("location: fullform.php");
						exit();
					}
				}
			}
			else
			{
				die("Query failed");
			}
						
		}
		$conn->close();
	?>
</body>
</html>