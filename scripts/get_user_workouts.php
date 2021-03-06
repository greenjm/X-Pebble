<?php 
	header("Access-Control-Allow-Origin: *");

	include 'setdb.php';

	$userid = $_GET['userid'];

	$query = $db->prepare('select name, workid from workout where userid=:userid order by workid desc');
	$query->bindValue(':userid', $userid, PDO::PARAM_INT);
	$query->execute();

	$results = array();
	if ($query->execute()){
		while($row = $query->fetch(PDO::FETCH_ASSOC)){
			$name = $row["name"];
			$id = $row["workid"];
			array_push($results, $name);
			array_push($results, $id);	
		}
	}

	echo json_encode($results);
?>