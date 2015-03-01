<?php 
	header("Access-Control-Allow-Origin: *");

	include 'setdb.php';

	$pebbleid = $_GET['pebbleid'];

	$query = $db->prepare('select e.id from exercise e
	join routine r on r.exercise = e.name
	join workout w on w.workid = r.workid
	join users u on u.userid = w.userid
	where u.pebbleid=:pebbleid');
	$query->bindValue(':pebbleid', $pebbleid, PDO::PARAM_STR);
	$query->execute();

	$rowCount = count($query->fetch(PDO::FETCH_BOTH));

	$results = "$rowCount,";
	if ($query->execute()){
		while($row = $query->fetch(PDO::FETCH_ASSOC)){
			$id = $row["id"];
			$results .= "$id,";
		}
	}
	$results = substr($results, 0, strlen($results)-1);
	echo $results;
?>