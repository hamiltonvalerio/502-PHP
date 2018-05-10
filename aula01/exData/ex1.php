<?php 

// Dado um array com 4 pessoas, quero que me mostrem:
// o mais velho
// o mais novo
// diferença de idade entre eles em dias.

$pessoas = [
	[
		'nome' => 'Heath Ledger',
		'data_nasc' => '19/05/1956',
	],
	[
		'nome' => 'Alfie Allen',
		'data_nasc' => '10/07/1993',
	],
	[
		'nome' => 'Taylor Kinney',
		'data_nasc' => '04/09/1979',
	],
	[
		'nome' => 'Audrey Hepburn',
		'data_nasc' => '13/07/1972',
	],
];

echo '<pre>';
foreach ($pessoas as $key => $pessoa) {
	$pessoa['data_nasc'] = DateTime::createFromFormat('d/m/Y', $pessoa['data_nasc']);
	$pessoas[$key] = $pessoa;
}

$novo = $pessoas[0];
$velho = $pessoas[0];

foreach ($pessoas as $pessoa) {
	if ($pessoa['data_nasc'] > $novo['data_nasc']) {
		$novo = $pessoa;
	}
	if ($pessoa['data_nasc'] < $velho['data_nasc']) {
		$velho = $pessoa;
	}
}

echo 'Mais novo: ' . $novo['nome'] . '<br>';
echo 'Mais velho: ' . $velho['nome'] . '<br>';

$diff = $velho['data_nasc']->diff($novo['data_nasc']);

echo $diff->format('%r%a dias de diferença');