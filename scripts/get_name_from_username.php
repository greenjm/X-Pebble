<?php 
	header("Access-Control-Allow-Origin: *");

	include 'setdb.php';

	$username = $_GET['username'];

	$query = $db->prepare('select username, firstname, lastname from users where username=:username');
	$query->bindValue(':username', $username, PDO::PARAM_STR);
	$query->execute();

	$results = array();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	array_push($results, $row['username']);
	array_push($results, $row['firstname']);
	array_push($results, $row['lastname']);

	echo json_encode($results);
?>
