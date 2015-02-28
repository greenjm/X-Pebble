<?php
header("Access-Control-Allow-Origin: *");
include "setdb.php";

$query = $db->prepare('select name from exercise');
$query->execute();

$row = $query->fetch(PDO::FETCH_ASSOC);

echo $row;

?>