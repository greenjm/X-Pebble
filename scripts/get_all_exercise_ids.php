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

	$results = "$rowCount,";
	$count = 0;
	if ($query->execute()){
		while($row = $query->fetch(PDO::FETCH_ASSOC)){
			$id = $row["id"];
			$results .= "$id,";
			$count++;
		}
		$results .="$count";
	}
	//$results = substr($results, 0, strlen($results)-1);
	echo $results;
?>