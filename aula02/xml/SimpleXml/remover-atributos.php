<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml', null,true);

unset($apostilas->apostila[0]->attributes()->ano);

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();