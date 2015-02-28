<?php
header("Access-Control-Allow-Origin: *");
include "setdb.php";

$query = $db->prepare('select name from exercise');
$query->execute();

$results = array();
if ($query->execute()){
	$count = 0;
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
		$name = $row["name"];
		$results[$count] = $name;
		$count++;
	}
}

echo json_encode($results);

?>