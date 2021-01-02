<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
<style>
		*{
		margin: 0;
		padding: 0;
	}
	body{
		background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("imgs/4.jpg");
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
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
  <h1 class="display-4 text-white text-center mt-5" style="font-weight: 400;font-family: 'Acme', sans-serif; font-size: 65px;">SEARCH</h1>


<div class="row">
			<div class="col-xl-6 offset-xl-3">	
	<form action="res.php" method="POST" class="my-5">
	<div class="form-group">
    	<label class="text-white">Select Year</label><br>
    	<!-- /<select class="custom-select" name="year" style="width: 100%;">
    		<option value="2005">2005</option>
    		<option value="2006">2006</option>
    		<option value="2007">2007</option>
    		<option value="2008">2008</option>
    		<option value="2009">2009</option>
    		<option value="2010">2010</option>
    	</select> -->
      <input type="number" class="form-control" name="year" max="2019" required>
  </div>
  <div class="form-group">
    	<label class="text-white">Select Language</label><br>
    	<select class="custom-select" name="language">
    		<option value="English">English</option>
    		<option value="Hindi">Hindi</option>
        <option value="Kannada">Kannada</option>
    	</select><br>
    </div>
    <input type="submit" name="submit" class="btn btn-warning btn-block mt-4">
</form>
</div>
</div>
</div>
</body>
</html>