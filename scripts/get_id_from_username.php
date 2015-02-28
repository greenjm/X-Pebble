<?php 
	header("Access-Control-Allow-Origin: *");
	include 'setdb.php';

	$username = $_GET['username'];

	$query = $db->prepare('select userid from users where username = :username');
	$query->bindValue(':username', $username, PDO::PARAM_STR);
	$query->execute();

	$row = $query->fetch(PDO::FETCH_ASSOC);

	echo $row["userid"];
?>