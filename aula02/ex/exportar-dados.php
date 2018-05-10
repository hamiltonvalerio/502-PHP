<?php 

$con = new PDO("pgsql:host=localhost;dbname=aula","lucas","123");

$stmt = $con->query('SELECt * FROM users');
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
	// $linha = "{$usuario['name']};{$usuario['email']};{$usuario['pass']}".PHP_EOL;
	$linha = implode(';', $usuario);
	file_put_contents('database.csv', $linha . PHP_EOL, FILE_APPEND);
	echo "{$usuario['name']} Exportado com Sucesso <br>";
}