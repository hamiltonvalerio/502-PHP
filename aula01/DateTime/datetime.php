<?php 

echo '<pre>';
$atual = new DateTime();
var_dump($atual);

echo '<hr>';

$especifico = new DateTime('1993-07-25');
var_dump($especifico);

echo '<hr>';

$texto = new DateTime('+1 month');
var_dump($texto);

echo '<hr>';

echo $texto->format('d/m/Y H:i:s');

echo '<hr>';

$especifico->modify('22-12-2005');
echo $especifico->format('d/m/y H:i:s');

echo '<hr>';

$especifico->modify('+1 year');
echo $especifico->format('d/m/y H:i:s');

echo '<hr>';

$fev = new DateTime('2020-02-29');
$fev->modify('+1 year');
echo $fev->format('d/m/y H:i:s');

echo '<hr>';

$marco = new DateTime('2018-03-31');
$marco->modify('+1 month');
echo $marco->format('d/m/y H:i:s');

echo '<hr>';

$marco->setDate(2000,01,01);
echo $marco->format('d/m/y H:i:s');

echo '<hr>';

$marco->setTime(15,01,01);
echo $marco->format('d/m/y H:i:s');

echo '<hr>';

$fuso = new DateTimeZone('America/New_York');
$atual->setTimeZone($fuso);
print_r($atual);
echo $atual->format('d/m/y H:i:s');

echo '<hr>';

$fuso = new DateTimeZone('Europe/Moscow');
$atual->setTimeZone($fuso);
print_r($atual);
echo $atual->format('d/m/y H:i:s');

echo '<hr>';

//P2Y - Anos
//P2D - Dias
//P2M - Meses
//P2W - Semanas

//PT2H - Horas
//PT2M - Minutos
//PT2S - Segundos

// P2D - Periodo de dois dias
// P3M - Periodo de tres meses
// PT5S- Periodo de cinco segundos
// P3YT8M - Periodo de tres anos e oito  minutos
$intervalo = new DateInterval('P2Y');
print_r($intervalo);

echo '<hr>';

$intervalo = new DateInterval('P2Y3M1DT5H10M23S');
print_r($intervalo);

echo '<hr>';

$dataAtual = new DateTime();
$dataNasc = new DateTime('1993-07-25');
// $intervalo = $dataAtual->diff($dataNasc);
$intervalo = $dataNasc->diff($dataAtual);
// var_dump($intervalo);

echo $dataAtual->format('d/m/Y');
echo "<br>";
echo $dataNasc->format('d/m/Y');
echo "<br>";
echo $intervalo->format('%R%a dias de intervalo');
echo "<br>";
echo $intervalo->format('%y anos de diferenca');

echo '<hr>';

var_dump($dataAtual >= $dataNasc);
var_dump($dataAtual < $dataNasc);
var_dump($dataAtual == $dataNasc);

echo '<hr>';

$dataAtual->add(new DateInterval('P7D'));
echo $dataAtual->format('d/m/Y');

echo '<hr>';

$dataAtual->add($intervalo);
echo $dataAtual->format('d/m/Y');

echo '<hr>';

$dataAtual->sub($intervalo);
echo $dataAtual->format('d/m/Y');

echo '<hr>';

$dataAtual->sub(new DateInterval('P7D'));
echo $dataAtual->format('d/m/Y');

echo '<hr>';

echo (new DateTime())->format('d/m/Y H:i:s');
date_default_timezone_set('Asia/Tokyo');
echo '<br>';
echo (new DateTime())->format('d/m/Y H:i:s');

echo '<hr>';

echo strftime('%A ,%e de %B de %Y');
echo '<br>';
setlocale(LC_TIME, 'pt_BR.utf8');
echo strftime('%A ,%e de %B de %Y');
echo '<br>';
setlocale(LC_TIME, "nl_NL.utf8");
echo strftime('%A ,%e de %B de %Y');