<?php 
	header("Access-Control-Allow-Origin: *");

	include 'setdb.php';

	$userid = $_GET["userid"];

	$totalQuery = $db->prepare('select sum(attempts) from statistic where userid=:userid');
	$totalQuery->bindValue(':userid', $userid, PDO::PARAM_INT);
	$totalQuery-> execute();