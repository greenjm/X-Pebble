<?php 
	header("Access-Control-Allow-Origin: *");
	include 'setdb.php';

	$userid = $_POST["userid"];
	$name = $_POST["name"];

	$query = $db->prepare('insert into workout (userid, name) values (:userid, :name)');
	$query->bindValue(':userid', $userid, PDO::PARAM_INT);
	$query->bindValue(':name', $name, PDO::PARAM_STR);
	$query->execute();

	$fetchQuery = $db->prepare('select workid from workout where userid = :userid and name = :name order by workid desc');
	$fetchQuery->bindValue(':userid', $userid, PDO::PARAM_INT);
	$fetchQuery->bindValue(':name', $name, PDO::PARAM_STR);
	$fetchQuery->execute();

	$row = $fetchQuery->fetch(PDO::FETCH_ASSOC);

	echo $row["workid"];

?>