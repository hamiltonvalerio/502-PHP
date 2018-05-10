<?php 

$arquivo = new SplFileObject('../ex/database.csv');

$arquivo->setFlags(SplFileObject::READ_CSV | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);

echo '<pre>';
// foreach ($arquivo as $linha) {
// 	print_r($linha);
// }

while (!$arquivo->eof()) {
	$linha = $arquivo->fgetcsv(';');

	// print_r($linha);

	list($id,$nome,$email,$senha) = $linha;
	echo "Id: {$id} <br>";
	echo "Nome: {$nome} <br>";
	echo "Email: {$email} <br>";
	echo "Senha: {$senha} <hr>";
}