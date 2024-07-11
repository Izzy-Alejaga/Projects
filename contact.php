

<html>
<head>
	<link rel="shortcut icon" type="image" href="sign.png">
	<style>
		*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			background: url(profile.jpeg) no-repeat center fixed;
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
		textarea{
			shape-image-threshold: 50px;
			size: 100px;
			height: 200px;
			width: 500px;
			border-left-style: ridge;

		}
		h3{
			padding: 20px;
			text-align: left;
			color: orange;
			font-size: 20px;
			margin: 10;
		}
		</style>
	<title>Contact Us</title>
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
		<marquee direction = "right" ><font size= "50" color = "yellow">Our contact info</font></marquee>

		<div class="container">
			<text><font size="50"><center>Website Developers</center></font>
			<div class="gallery">
				<img src="bille.jpeg">
				<text><font size="5"><center>Jubille Gallano</font></center></text>
			</div>

			<div class="gallery">
				<img src="leonand.jpeg">
				<text><font size="5"><center>Leonand Rada</font></center></text>			
			</div>

			<div class="gallery">
				<img src="part.jpeg">
				<text><font size="5"><center>John Paul Pabilona</font></center></text>
			</div>

			<div class="gallery">
				<center><img src="photo.jpeg"></center>
				<text><font size="5"><center>Arriel Izzy Alejaga</font></center></text>
			</div>	
		</div>

<br>
<br>
<br>
<br>
<br>
<br>
<text><font size="30" color="yellow">Our Contact List: </font><br>
	<h3>Phone number: 09067392400</h3>
	<h3>Landline : 241-699-21</h3>
</font>
</text>
		<center>
			<?php require_once 'process.php'; ?>
			<?php

			if (isset($_SESSION['message'])): ?>

			 <div class="alert alert-<?=$_SESSION['msg_type']?>">
			 	
			 	<?php
			 		echo $_SESSION['message'];
			 		unset($_SESSION['message']);
			 	?>
			 </div>
			<?php endif ?>
			<div class="container">
			<?php
				$mysqli = new mysqli('localhost', 'root' ,'' , 'foodie') or die (mysqli_error($mysqli));
				$result = $mysqli ->query("SELECT * FROM data") or die ($mysqli-> error );
				//pre_r($result);
				?>

						<div class="row justify-content-center">
					<table class="table">
						<thead>
							<tr>
								<th>Comment</th>
								<th>Phone Number</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
						
							<?php
								while ($row = $result -> fetch_assoc()): ?>
									<tr>
										<td> <?php echo $row['comment']; ?></td>
										<td> <?php echo $row['number']; ?></td>
										<td>
											<a href="contact.php?edit=<?php echo $row ['id']; ?>"
												class="btn btn-info">Edit</a>
												<a href="contact.php?delete=<?php echo $row ['id']; ?>"
												class="btn btn-danger">Delete</a>
										</td>
									</tr>
								<?php endwhile; ?>
							
					</table>
					
				</div>

			<?php
				function pre_r( $array ) {
					echo '<pre>' ;
					print_r($array);
					echo '</pre>';
				}
			?>
		<div class="row justify-content-center">
		<form action="process.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label>Comment</label><br>
				<input type="text" name="comment" class="form-control"
				value = "<?php echo $comment; ?>" placeholder="Enter your comment" required>
			</div>
			<div class="form-group">
				<label>Phone</label><br>
				<input type="text" name="number" class="form-control" 
				value = "<?php  echo $number; ?>" placeholder= "Enter your phone number" required>
			</div>
			<div class="form-group">
				<?php
				if ($update == true): 
				?>
						<button type="submit" class="btn btn-info" name="update">Update</button>
				<?php else: ?>
				<button type="submit" class="btn btn-primary" name="save">Save</button>
				<?php endif; ?>
			</div>
		</form>

		</div>
	</center>


</body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</html>
<footer>
	All rights reserve
</footer>