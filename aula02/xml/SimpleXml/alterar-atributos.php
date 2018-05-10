<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml', null,true);

// $apostilas->apostila[0]->attributes()->id = 10;

$apostila = $apostilas->apostila[0]->attributes();
$apostila->id = 30;

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();