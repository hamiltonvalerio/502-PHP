<?php 

$con = new PDO("pgsql:host=localhost;dbname=aula","lucas","123");


$sql = "INSERT INTO users (name,email,pass) VALUES (:name,:email,:pass)";
$stmt = $con->prepare($sql);

$arquivo = fopen('dataset.csv', 'r');

while (!feof($arquivo)) {
	$linha = fgets($arquivo);
	if (!empty($linha)) {
		$dados = explode(';', $linha);

		$email =  trim(stripslashes($dados[2]));
		$nome =  trim(stripslashes($dados[1]));
		$senha =  trim(stripslashes($dados[0]));		
		
		$stmt->bindValue(':name',$nome);
		$stmt->bindValue(':email',$email);
		$stmt->bindValue(':pass',$senha);
		$stmt->execute();
		echo "Inserido: {$nome} Com Sucesso. <br>";
	}
}

fclose($arquivo);

