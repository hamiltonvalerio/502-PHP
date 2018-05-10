<?php 

echo '<pre><p>Dificil - 1</p>';

$arquivo = fopen('arquivo.txt', 'r');

$conteudo = fread($arquivo, filesize('arquivo.txt'));
// $conteudo = fread($arquivo, 10);

echo nl2br($conteudo);

fclose($arquivo);

echo '<hr>';

echo '<p>Dificil - 2</p>';

$arquivo = fopen('arquivo.txt', 'r');

while (!feof($arquivo)) {
	$linha = fgets($arquivo);
	echo nl2br($linha);
}

fclose($arquivo);

echo '<hr>';

echo '<p>Fácil</p>';

$arquivo = file_get_contents('arquivo.txt');
echo nl2br($arquivo);

echo '<hr>';

echo '<p> Lendo em Partes </p>';

$arquivo = 'arquivo.txt';
$tamanho = filesize($arquivo);

echo '<p>Tamanho do arquivo em bytes: ' . $tamanho . '</p>';

$stream = fopen($arquivo, 'r');

while (($pedaco = fread($stream, 10)) != false) {
	echo nl2br($pedaco);
}

fclose($stream);