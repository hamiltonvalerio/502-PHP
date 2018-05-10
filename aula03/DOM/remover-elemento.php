<?php 

$dom = new DOMDocument();
$dom->load('apostilas.xml');

$paginas = $dom->getElementsByTagName('pagina');

// Remover Elemento
$paginas->item(0)->parentNode->removeChild($paginas->item(0));


header('Content-type: text/xml');

echo $dom->saveXML();