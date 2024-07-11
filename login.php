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
			
			$query = "select * from users where user_name = '$user_name' limit 1";

			$result = mysqli_query($con,$query);
			if ($result) {
				
			
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				
				if ($user_data['password'] === $password) 
				{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: intro.php");
							die;

				}
			}
							}
			echo "Wrong username or password";
		}else{
			echo "Please enter some valid information";
		}
	}


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		
		<meta charset="utf-8">
		<title>Easy Pizi Foodie Log in</title>
		<link rel="stylesheet" type="text/css" href="background.css">
	</head>
	<body>
		<form class="box"  method="post">
			<h1>login</h1>
			<input type="text" name="username" placeholder="username" required/>
			<input type="password" name="password" placeholder="password" required/>
			<input type="submit" name="" value="login">
			<a href="signup.php">Register</a>
		</form>

	</body>
</html>