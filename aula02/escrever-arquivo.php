<?php 

echo '<pre>';

echo '<p> Dificil</p>';

$arquivo = fopen('arquivo.txt', 'a');

// fwrite($arquivo, 'Olá Mundo' . PHP_EOL);

fclose($arquivo);

echo '<hr>';

echo '<p>Facil</p>';

file_put_contents('arquivo2.txt', 'Olá Mundo' . PHP_EOL, FILE_APPEND);