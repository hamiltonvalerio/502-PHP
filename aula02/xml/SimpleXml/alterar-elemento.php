<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml', null,true);

$apostilas->apostila[0]->titulo = 'Dominando PHP';
$apostilas->apostila[1]->titulo = 'Java em 30 dias';
$apostilas->apostila[2]->titulo = 'Desvendando Ruby';

$apostilas->apostila[0]->topicos->topico[0] = 'Introdução ao PHP';

$apostilas->saveXML('../apostilas.xml');

header('Content-type: text/xml');

echo $apostilas->asXML();