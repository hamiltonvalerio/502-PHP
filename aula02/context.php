<?php 

$opt = [
	'http' => [
		'method' => 'POST'
	]
];

$context = stream_context_create($opt);

$google = fopen('http://www.google.com.br', 'r', null,$context);

while (!feof($google)) {
	$linha = fgets($google);
	echo $linha;
}