<?php 
$db=mysqli_connect('localhost','root','','moviedb') or die("could not connect");
if (isset($_POST['submit'])) {
	$year=mysqli_real_escape_string($db,$_POST['year']);
	$language=mysqli_real_escape_string($db,$_POST['language']);
	$query="CALL `res_proc`('$year', '$language');";
	$sql=mysqli_query($db,$query);
	$num=mysqli_num_rows($sql);
	if ($num<1) {
	header("location:search.php?message=not_found");
	}
	else{
?>
<html>
<head>
	<title>Movies</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/dbc0befdc1.js" crossorigin="anonymous"></script>

<style>
		*{
		margin: 0;
		padding: 0;
	}
	body{
		background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("imgs/4.jpg");
	
		background-position: center center;
		background-size: cover;
		background-repeat:no-repeat;
		background-attachment: fixed;
	}
	.fas{
		color:gold;
	}
	.card-body{
		height: 265px;
	}
	.card-img-top{
		height: 340px;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><b>TMDB</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mx-5">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active mr-5">
        <a class="nav-link" href="toprated.php">Top Rated <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active mr-5">
        <a class="nav-link" href="upcoming.php">Upcoming <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active mr-5">
        <a class="nav-link" href="search.php">Search <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active mr-5">
        <a class="nav-link" href="rate.php">Rate a Movie <span class="sr-only">(current)</span></a>
      </li>
 
  </ul>
</div>

</nav>
<div class="container">
	<div class="row">
		<?php while($row=mysqli_fetch_assoc($sql)){ ?>
		<div class="col-xl-4">
			<div class="card mt-5 px-4 mb-3" style="width: 18rem;">
  <img class="card-img-top" <?php echo 'src="'.$row['img'].'"'?> alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo $row['title']; ?></h5>
    <p class="card-text"><b>Genre: </b><?php echo $row['genre']; ?><br><b>Length: </b><?php echo $row['length']; ?><br><b>Actor: </b><?php echo $row['aname']; ?><br><b>Director: </b><?php echo $row['dname']; ?><br><b>Production: </b><?php echo $row['pname']; ?> <br><b>Rating: </b><?php echo $row['rating']; ?> <i class="fas fa-star"></i></p>
  </div>
</div>
</div>
<?php } ?>
	</div>
</div>
</body>
</html>
<?php

	}


	}
	else{
		header("location:search.php");
	}


 ?>