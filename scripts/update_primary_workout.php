<?php 
	header("Access-Control-Allow-Origin: *");

	include 'setdb.php';

	$username = $_POST['username'];
	$workid = $_POST['workid'];

	$query = $db->prepare('update users set primarywork=:workid where username=:username');
	$query->bindValue(":workid", $workid, PDO::PARAM_INT);
	$query->bindValue(":username", $username, PDO::PARAM_STR);
	$query->execute();
?>