<?php
header("Access-Control-Allow-Origin: *");
include "setdb.php";

$query = $db->prepare('select name, id from exercise');
$query->execute();

$results = array();
if ($query->execute()){
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
		$id = $row["id"];
		$name = $row["name"];
		$results[$id] = array();
		$results[$id]["name"] = $name; 
	}
}

echo json_encode($results);

?>