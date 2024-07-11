<?php

	session_start();

	$mysqli = new mysqli('localhost', 'root' , '' , 'foodie') or die (mysqli_error($mysqli));

	$id = 0;
	$update = false;
	$comment = '';
	$number = '';

	if (isset($_POST['save'])) {
		$comment = $_POST['comment'];
		$number = $_POST['number'];

		$_SESSION['message'] = "Your suggestion has been sent! ";
		$_SESSION['msg_type'] = "success";

		header("location: contact.php");

		$mysqli ->query ("INSERT INTO data (comment ,number) VALUES('$comment' , '$number')") or die ($mysqli -> error);
	}

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$mysqli -> query ("DELETE FROM data WHERE id=$id") or die ($mysqli -> error ());

		$_SESSION['message'] = "Your record has been Deleted! ";
		$_SESSION['msg_type'] = "Danger";

		header("location: contact.php");
	}

	if (isset($_GET['edit'])){
		$id = $_GET['edit'];
		$update = true;
		$result = $mysqli -> query("SELECT * FROM data WHERE id=$id") or die($mysqli -> error());
		if (isset($result) ==1){
			$row = $result -> fetch_array();
			$comment = $row['comment'];
			$number = $row['number'];
		}
	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$comment = $_POST['comment'];
		$number = $_POST['number'];

		$mysqli -> query ("UPDATE data SET comment = '$comment', number= '$number' WHERE id = $id ") 
		or die ($mysqli -> error);

		$_SESSION['message'] = "Your suggestion is currently updating...";
		$_SESSION['msg_type'] = "warning";

			header('location: contact.php');
	}
?>