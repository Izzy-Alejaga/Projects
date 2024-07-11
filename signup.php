<?php
session_start();

	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	 {
		$user_name = $_POST ['username'];
		$password = $_POST ['password'];

		if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			//header("Location: login.php");
			//die;

		}else{
			echo "Please enter some valid information";
		}
	}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="background.css">
	</head>
	<body>
		<form class="box"  method="post">
			<h1>Register</h1>
			<input type="text" name="username" placeholder="username" required/>
			<input type="password" name="password" placeholder="password" required/>
			<input type="submit" value="Register">
			<a href="login.php">Log in</a>
		</form>

	</body>
</html>