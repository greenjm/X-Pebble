<?php 
	header("Access-Control-Allow-Origin: *");

	include 'setdb.php';

	$query = $db->prepare('select id from exercise order by id asc');
	$query->execute();

	$results = array();
	if ($query->execute()){
		while($row = $query->fetch(PDO::FETCH_ASSOC)){
			$id = $row["id"];
			array_push($results, $id);
		}
	}

	echo json_encode($results);
?>