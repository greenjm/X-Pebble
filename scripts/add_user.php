<?php 
	header("Access-Control-Allow-Origin: *");

	include 'setdb.php';

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pebbleid = $_POST['pebbleid'];

	$query = $db->prepare('insert into users (firstname,lastname,email,username,password, pebbleid) values(:firstname,:lastname,:email,:username,:password, :pebbleid)');
	$query->bindValue(':firstname', $first_name, PDO::PARAM_STR);
	$query->bindValue(':lastname', $last_name, PDO::PARAM_STR);
	$query->bindValue(':email', $email, PDO::PARAM_STR);
	$query->bindValue(':username', $username, PDO::PARAM_STR);
	$query->bindValue(':password', $password, PDO::PARAM_STR);
	$query->bindValue(':pebbleid', $pebbleid, PDO::PARAM_STR);
	$query->execute();
?>