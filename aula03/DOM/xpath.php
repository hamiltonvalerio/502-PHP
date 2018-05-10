<?php 

$dom = new DOMDocument();
$dom->load('apostilas.xml');

$xpath = new DOMXPath($dom);

$apostila1 = $xpath->query('/apostilas/apostila[@id=1]');

echo '<pre>';
print_r($apostila1->item(0));

echo "<hr>";

$topicos = $xpath->query('/apostilas/apostila/topicos/topico');

print_r($topicos);

echo "<hr>";

$java = $xpath->query('/apostilas/apostila[@id=2]');

print_r($java->item(0));

echo "<hr>";

$ruby = $xpath->query('/apostilas/apostila[./titulo="Dominando Ruby"]');

print_r($ruby->item(0));