<?php 

echo '<pre>';
echo '<p> Lendo em Partes o CSV </p>';

$arquivo = 'arquivo.txt';
$tamanho = filesize($arquivo);

echo '<p>Tamanho do arquivo em bytes: ' . $tamanho . '</p>';

$stream = fopen($arquivo, 'r');

$csv = [];

while (!feof($stream)) {
	$linha = fgets($stream);
	$csv[] = explode(';', $linha);
}

fclose($stream);

print_r($csv);