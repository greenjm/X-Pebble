<?php
header("Access-Control-Allow-Origin: *");
include "setdb.php";

$name = $_GET['name'];

$query = $db->prepare('select duration from exercise where name=:name');
$query->bindValue(':name', $name, PDO::PARAM_STR);
$query->execute();

$row = $query->fetch(PDO::FETCH_ASSOC);

echo $row['duration'];

?>