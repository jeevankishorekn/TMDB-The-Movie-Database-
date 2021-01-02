<?php
  if(isset($_GET['done'])){if($_GET['done'] == '1'){
    ?>
    <script type="text/javascript">
      alert("Submitted review");
    </script>
    <?php
}}
?>
<html>
<head>
	<title>TMDB</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Shadows+Into+Light|Special+Elite&display=swap" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> 
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("imgs/4.jpg");
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	h1{
		font-family: 'Special Elite', cursive;
		font-size: 57px;

	}
  .ab{

    width: 570px;
    border-radius: 30px;
    height: 30px;
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
<div class="container" style="width:600px;">
   <h2 class="text-center text-white">Rate A Movie</h2>
   <br /><br />
   <form action="submitreview.php" method="post">
    <div class="form-group">
     <label class="text-white">Enter Name</label>
     <input type="text" name="name" id="name" class="form-control input-lg " autocomplete="off" placeholder="Name" ><br>
   </div>
   <div class="form-group">
     <label class="text-white">Enter Movie Name</label>
     <input type="text" name="movies" id="movies" class="form-control input-lg" autocomplete="off" placeholder="Movie Name"><br>
   </div>
   <div class="form-group">
    <label class="text-white">Rate</label>
     <select class="ab" name="rate">
      <option selected>5</option>
      <option>4</option>
      <option>3</option>
      <option>2</option>
      <option>1</option>
      </select>
  </div>
  <input type="submit" name="submit" class="btn btn-warning btn-block mt-5 py-3">
</form>
  </div>

</body>
</html>
<script>
$(document).ready(function(){
 
 $('#movies').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"create.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>

