<?php 
	header("Access-Control-Allow-Origin: *");

	include 'setdb.php';

	$username = $_POST['username'];

	$query = $db->prepare('select username from users where username=:username');
	$query->bindValue(':username', $username, PDO::PARAM_STR);
	$query->execute();
	$rowCount = $checkQuery->rowCount();

	if ($rowCount > 0){
		echo "taken";
	}else {
		echo "available";
	}

?>