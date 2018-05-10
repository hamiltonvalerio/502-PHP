<?php 

$con = new PDO("pgsql:host=localhost;dbname=aula","lucas","123");

$stmt = $con->query('SELECt * FROM users');
$usersdb = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-type: text/json');

echo json_encode($usersdb);

