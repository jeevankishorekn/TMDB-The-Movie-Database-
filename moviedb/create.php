<?php
//create.php
$connect = mysqli_connect("localhost", "root", "", "moviedb");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "
 SELECT title FROM movies WHERE title LIKE '%".$request."%'
";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["title"];
 }
 echo json_encode($data);
}

?>