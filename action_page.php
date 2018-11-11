<!DOCTYPE html>
<html>
<head>
	<title>Quicklearn</title>
</head>
<body>
	<?php
		$name = $_GET['uname'];
		$pwd = $_GET['psw'];
		
		$query = "select * from Students where Name = '$name' and Email = '$pwd';";
		//Connect to database
		$conn = mysqli_connect("localhost","root","");
		mysqli_select_db($conn , "testing");

		// Check connection
		if (!$conn) {
	    	die("Connection failed: " . mysqli_connect_error());
		}
		
		$query = mysqli_query($conn , $query);
		$numrows = mysqli_num_rows($query);

		if($numrows > 0)
			echo "Logged In";
		else
			echo "Invalid Username or Password";
		mysqli_close($conn);
	?>
</body>
</html>