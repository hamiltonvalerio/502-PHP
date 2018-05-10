<?php 

$dom = new DOMDocument();
$dom->load('apostilas.xml');

$apostilas = $dom->getElementsByTagName('apostila');

// Alterar Atributo existente
$apostilas->item(0)->setAttribute('id',20);

// Adicionar Atributo
$apostilas->item(0)->setAttribute('ano',2018);

$dom->save('apostilas.xml');

header('Content-type: text/xml');

echo $dom->saveXML();