<?php
header("Access-Control-Allow-Origin: *");
include "setdb.php";

$query = $db->prepare('select name from exercise');
$query->execute();

$rowCount = $query->rowCount();

echo $rowCount;

?>