<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml', null,true);

$apostilas->apostila[0]->addChild('paginas',140);
$apostilas->apostila[1]->addChild('paginas',158);
$apostilas->apostila[2]->addChild('paginas',176);

$capitulos = $apostilas->apostila[0]->addChild('capitulos');

$capitulos->addChild('capitulo', '1 - Inicio');
$capitulos->addChild('capitulo', '2 - Configuracao Ambiente');
$capitulos->addChild('capitulo', '3 - Logica');

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();