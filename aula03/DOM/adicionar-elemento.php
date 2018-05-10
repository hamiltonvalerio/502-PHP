<?php 

$dom = new DOMDocument();
$dom->load('apostilas.xml');

// Localizando Elementos
$apostilas = $dom->getElementsByTagName('apostila');

// Criando novo Elemento
$pagina = $dom->createElement('pagina',140);

// Adiciona o novo elemento
$apostilas->item(0)->appendChild($pagina);

// Criando e adicionando o novo elemento
$apostilas->item(1)->appendChild($dom->createElement('pagina',185));

$dom->save('apostilas.xml');

header('Content-type: text/xml');

echo $dom->saveXML();