<?php
session_start();


	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<html>
<head>
	<link rel="shortcut icon" type="image" href="gas.png">
	<style>
	*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			background: url(here.jpeg) no-repeat center fixed;
			-webkit-background-size: cover;
			-moz- background-size:cover;
			-o- background-size: cover;
			background-size: cover;
		}
		nav{
			background: red;
			width: 100%;
			overflow: auto;
		}
		ul{
			margin: 0;
			padding: 0;
			list-style: none;
		}
		li{
			float: left;
		}
		nav a{
			width: 120px;
			display: block;
			text-decoration: none;
			text-align: center;
			background: red;
			font-size: 17px;
			color: white;
			padding: 20px 10px;
			font-family: Arial;
		}
		nav a:hover{
			background: skyblue;
			color: red;
		}
		.container{
			max-width: 1200px;
			margin: auto;
			background: white;
			overflow: auto;
		}
		.gallery{
			margin: 5px;
			border:1px solid #ccc;
			float: left;
			width: 390px;
		}
		.gallery img{
			width: 100%;
			height: auto;
		}
		.desc{
			padding: 15px;
			text-align: center;
		}
		footer{
			padding: 10px;
			font-size:17px;
			font-weight: bold;
			text-align: center;
			background: #594848;
			color: white;
			font-family: Arial;
			letter-spacing: 1px; 
		}
		h1{
			text-shadow: 5px 5px rgba(255,150,150,0.54);
		}
		.gallery:hover{-webkit-box-shadow: #FFF 0 -1px 4px, #ff0 0 -2px 10px, #ff8000 0 -10px 20px, red 0 -18px 40px, 2px 2px 16px 11px rgba(0,0,0,0); 
box-shadow: #FFF 0 -1px 4px, #ff0 0 -2px 10px, #ff8000 0 -10px 20px, red 0 -18px 40px, 2px 2px 16px 11px rgba(0,0,0,0);;
		}
	</style>
	<title size = 50>Main</title>
</head>
<body>
		<nav>
			<ul>
				<li><a href = "intro.php">main</a></li>
				<li><a href = "selection.php">Food Menu</a></li>
				<li><a href = "contact.php">Contact Us</a></li>
				<li><a href = "logout.php">logout</a></li>
			</ul>
		</nav>
		<marquee direction = "left" ><font size= "50" color = "red"> The new Special Seafood Hot Pot is now available for a limited time only!!!!! </font></marquee>
		<br>
		Hello, <?php echo $user_data['user_name']; ?>
		<p><font size="6" color="blue"><center>Welcome to Easy Pizi Foodie<br>
			Here we value fast and easy delivering experience and lot's of amazing food you can ever dream of.<br>
			There's a lot to choose, from mouth watering sandwiches, amazing pasta,relaxing taste of a hotpot<br>
			all the way to our finest dessert to you can all eat in just a touch of your button.
			  </center></font></p>
			  <text><font size="30" color="blue"> Here are some of our best selling dishes:</font><br>

			<div class="container">
			<text><font size="50"><center>Special Feature</center></font>
			<div class="gallery">
				<img src="delux.png">
				<div class="desc">Special seafood Hot pot</div>
			</div>

			<div class="gallery">
				<img src="seaplate.png">
				<div class="desc">Seafood Hotpot</div>
			</div>

			<div class="gallery">
				<img src="buoyantbreeze.png">
				<div class="desc">Buoyant Breeze</div>
</body>
</div>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
	All rights reserve
</footer>
</html>
	