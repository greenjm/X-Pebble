<?php
header("Access-Control-Allow-Origin: *");
include "setdb.php";

$name = $_GET['name'];


$query->prepare('select duration from exercise where name=:name');
$query->bindValue(':name', $name, PDO::PARAM_STR);
$query->execute();

echo "success";
return;

$rowCount = $query->rowCount();

echo $rowCount;

?>