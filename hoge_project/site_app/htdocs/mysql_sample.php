<?php
$mysqli = new mysqli('mysql', 'root', 'password', 'fuga');
$sql = "select id, name from bar";
$result = $mysqli->query($sql);
$actor = $result->fetch_assoc();
var_dump($actor);

$mysqli = new mysqli('mysql', 'root', 'password', 'fuga2');
$sql = "select id, name from bar2";
$result = $mysqli->query($sql);
$actor = $result->fetch_assoc();
var_dump($actor);
?>
