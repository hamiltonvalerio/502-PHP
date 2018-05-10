<?php 


$google = file_get_contents('http://www.google.com.br');

echo $google;

// $lucas = fopen('https://www.lucasmarques73.com.br', 'r');

// while (!feof($lucas)) {
// 	$linha = fgets($lucas);
// 	$linha = str_replace('Welcome', 'Bem Vindo', $linha);
// 	echo $linha;
// }