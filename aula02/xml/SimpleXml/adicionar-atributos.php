<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml', null,true);

$apostilas->apostila[0]->attributes()->addAttribute('ano',2018);


// $apostilas->apostila[0]->titulo->attributes()->addAttribute('ano',2018);

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();