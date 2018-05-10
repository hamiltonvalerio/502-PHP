<?php 

// Data no padrão brasileiro d/m/Y
// Se data de vencimento > que data atual
// mostrar a msg 'Pode pagar o boleto'
// Senão, boleto está vencido
// mostra a msg 'Boleto vencido em X dias'
// Form ou readline

$data = readline('data de vencimento: ');

$dataVenc = DateTime::createFromFormat('d/m/Y', $data);
$dataAtual = new DateTime(date('Y-m-d') . '00:00:00');

if ($dataVenc->format('l') == 'Saturday') {
	$dataVenc->modify('+2 days');
}
if ($dataVenc->format('l') == 'Sunday') {
	$dataVenc->modify('+1 day');
}

if ($dataVenc > $dataAtual) {
	echo 'Pode Pagar Boleto'. PHP_EOL;
}else {
	$diff = $dataVenc->diff($dataAtual);
	echo 'Boleto vencido à ' . $diff->format('%r%a') . ' dias' . PHP_EOL;
}