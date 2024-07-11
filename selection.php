<!DOCTYPE html>
<html>
<head>
	<title>Food Menu</title>
	<link rel="shortcut icon" type="image" href="clipart.png">
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
		<h1><font size="50" color="white"><center>Food order list</center></font></h1>
		<div class="container">
			<text><font size="50"><center>Special Feature</center></font>
			<div class="gallery">
				<a href="special.html"><img src="delux.png"></a>
				<div class="desc">Special seafood Hot pot</div>
			</div>

			<div class="gallery">
				<a href="Hotpot.html"><img src="seaplate.png"></a>
				<div class="desc">Seafood Hotpot</div>
			</div>

			<div class="gallery">
				<a href="buoyant.html"><img src="buoyantbreeze.png"></a>
				<div class="desc">Buoyant Breeze</div>
			</div>

			<text><font size="50"><center>Fried Chicken</center></font>

			<div class="gallery">
				<a href="fried.html"><img src="friedchicken.jpeg"></a>
				<div class="desc">Dipped fried chicken</div>
			</div>

			<div class="gallery">
				<a href="paw.html"><img src="paw.png"></a>
				<div class="desc">Paw nuggets</div>
			</div>

			<div class="gallery">
				<a href="whole.html"><img src="Whole.jpeg"></a>
				<div class="desc">Whole Chicken</div>
			</div>

			<text><font size="50"><center>Pastas</center></font>

			<div class="gallery">
				<a href="pasta.html"><img src="pasta.jpeg"></a>
				<div class="desc">Mushshroom Pasta</div>
			</div>

			<div class="gallery">
				<a href="carbonara.html"><img src="carbonara.png"></a>
				<div class="desc">Authentic Carbonara</div>
			</div>

			<div class="gallery">
				<a href="somen.html"><img src="somen.png"></a>
				<div class="desc">Special Somen</div>
			</div>

			<text><font size="50"><center>Sandwiches</center></font>

			<div class="gallery">
				<a href="chickenburger.html"><img src="chickenburger.png"></a>
				<div class="desc">Elite Chicken Burger</div>
			</div>

			<div class="gallery">
				<a href="savory.html"><img src="savory.jpeg"></a>
				<div class="desc">Double cheese beef sandwich</div>
			</div>

			<div class="gallery">
				<a href="mora.html"><img src="mora.png"></a>
				<div class="desc">Special chineese meat sandwich</div>
			</div>

			<text><font size="50"><center>Beverages</center></font>

			<div class="gallery">
				<a href="summerdrink.html"><img src="summerdrink.png"></a>
				<div class="desc">Ocean glaze coolaid</div>
			</div>

			<div class="gallery">
				<a href="yellowdrink.html"><img src="yellowdrink.png"></a>
				<div class="desc">Summer breeze drink</div>
			</div>

			<div class="gallery">
				<a href="violetdrink.html"><img src="violetdrink.png"></a>
				<div class="desc">Twisted Grape burst</div>
			</div>

			<text><font size="50"><center>Desserts</center></font>

			<div class="gallery">
				<a href="pancake.html"><img src="pancake.png"></a>
				<div class="desc">Deluxe chocolate Pancake</div>
			</div>

			<div class="gallery">
				<a href="tofu.html"><img src="tofu.png"></a>
				<div class="desc">Almond Tofu</div>
			</div>

			<div class="gallery">
				<a href="pie.html"><img src="pie.png"></a>
				<div class="desc">Mini pumpkin pie</div>
			</div>
		</div>
		<footer>
			All rights reserve
		</footer>
</body>
</html>