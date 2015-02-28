<?php
	header("Access-Control-Allow-Origin: *");
	include 'setdb.php';

	$workid = $_POST['workid'];
	$step = $_POST['step'];
	$exercise = $_POST['exercise'];

	$query = $db->prepare('insert into routine (workid, step, exercise) values (:workid, :step, :exercise)');
	$query->bindValue(':workid', $userid, PDO::PARAM_INT);
	$query->bindValue(':step', $name, PDO::PARAM_STR);
	$query->bindValue(':exercise', $exercise, PDO::PARAM_STR);
	$query->execute();

?>