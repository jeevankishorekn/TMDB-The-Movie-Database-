<?php
	ini_set('memory_limit','-1');
	ini_set('max_execution_time',3000);
	$conn = mysqli_connect('localhost', 'root', '', 'moviedb');
	$data = file_get_contents("sample.json");
	$data = json_decode($data);
	foreach ($data as $key => $value) {
		$value =  json_decode(json_encode($value), True);
		print_r($value);
		$actor = $value['actor'];
		$aname = $actor[0];
		$asex = $actor[1];
		$director = $value['director'];
		$dname = $director[0];
		$dsex = $director[1];
		$dawards = $director[2];
		$producer = $value['producer'];
		$pname = $producer[0];
		$psex = $producer[1];
		$pinvest = $producer[2];
		$genre = $value['genre'][0];
		$rating = $value['rating'][0];
		$movies = $value['movies'];
		$title = $movies[0];
		$len = $movies[1];
		$lang = $movies[2];
		$year = $movies[3];
		$img = $movies[4];
		if($lang == "English"){
			$que = "SELECT *FROM actor WHERE aname = '$aname' AND sex = '$asex'";
			$res = mysqli_query($conn, $que);
			if(mysqli_num_rows($res) > 0){
				$res = mysqli_fetch_assoc($res);
				$aid = $res['act_id'];
			}
			else{
				$que = "INSERT INTO actor(`aname`, `sex`) VALUES ('$aname', '$asex')";
				mysqli_query($conn, $que);
				$aid = mysqli_insert_id($conn);
			}

			$que = "SELECT *FROM director WHERE dname = '$dname' AND sex = '$dsex'";
			$res = mysqli_query($conn, $que);
			if(mysqli_num_rows($res) > 0){
				$res = mysqli_fetch_assoc($res);
				$did = $res['dir_id'];
			}
			else{
				$que = "INSERT INTO director(`dname`, `sex`, `awards`) VALUES ('$dname', '$dsex', '$dawards')";
				mysqli_query($conn, $que);
				$did = mysqli_insert_id($conn);
			}

			$que = "SELECT *FROM production WHERE pname = '$aname' AND sex = '$psex'";
			$res = mysqli_query($conn, $que);
			if(mysqli_num_rows($res) > 0){
				$res = mysqli_fetch_assoc($res);
				$pid = $res['pro_id'];
			}
			else{
				$que = "INSERT INTO production(`pname`, `sex`, `investment`) VALUES ('$pname', '$psex', '$pinvest')";
				mysqli_query($conn, $que);
				$pid = mysqli_insert_id($conn);
			}
			$que = "INSERT INTO movies(`title`, `length`, `year`, `language`, `act_id`, `dir_id`, `pro_id`, `img`) VALUES ('$title', '$len', '$year', '$lang', '$aid', '$did', '$pid', '$img')";
			mysqli_query($conn, $que);
			$mid = mysqli_insert_id($conn);
			$que = "INSERT INTO rating VALUES ('$mid', '$rating')";
			mysqli_query($conn, $que);

			$que = "INSERT INTO genre VALUES ('$mid', '$genre')";
			mysqli_query($conn, $que);			
			print_r("\nDone\n");
		}
	}
?>