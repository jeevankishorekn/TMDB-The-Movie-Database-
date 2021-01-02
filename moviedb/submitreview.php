<?php
	$conn = mysqli_connect('localhost', 'root', '', 'moviedb');
	$movie = $_POST['movies'];
	$name = $_POST['name'];
	$rating = $_POST['rate'];
	print_r($_POST);
	$que = "INSERT INTO review VALUES('$name', '$movie', '$rating')";
	$res = mysqli_query($conn, $que);
	print_r($res);
	if($res)
		header('location: rate.php?done=1');
	else
		header('location: rate.php?done=0');
?>