<?php 

	include 'get_total_exercise_attempts.php';

	
	$category = $_GET['category'];



	$query = $db->prepare('select sum(attempts), sum(finished) from statistic where userid=:userid and category=:category');
	$query->bindValue(':userid', $userid, PDO::PARAM_INT);
	$query->bindValue(':category', $category, PDO::PARAM_INT);
	$query->execute();

	$results = array();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	$totalRow = $totalQuery->fetch(PDO::FETCH_ASSOC);
	array_push($results, $row);
	array_push($results, $row);
	array_push($results, $totalRow);
	echo json_encode($results);
?>