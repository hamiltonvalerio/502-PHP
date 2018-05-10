<?php 

$dom = new DOMDocument();
$dom->load('apostilas.xml');

$apostilas = $dom->getElementsByTagName('apostila');

$apostilas->item(0)->removeAttribute('ano');

$dom->save('apostilas.xml');

header('Content-type: text/xml');

echo $dom->saveXML();