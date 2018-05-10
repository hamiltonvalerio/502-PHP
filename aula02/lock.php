<?php 

$arquivo = fopen('arquivo.txt', 'w+');

// LOCK_SH - Lock compartilhado
// LOCK_EX - Lock exclusivo
// LOCK_UN - Libera Lock

if (flock($arquivo, LOCK_EX)) {
	fwrite($arquivo, 'Olá');
	sleep(10);
	flock($arquivo, LOCK_UN);
} else {
	echo 'Arquivo bloqueado';
}

fclose($arquivo);