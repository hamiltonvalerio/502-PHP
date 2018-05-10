<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml', null,true);

$apostila1 = $apostilas->xpath('/apostilas/apostila[@id=1]');

echo '<pre>';
print_r($apostila1);

echo '<hr>';

$capitulos = $apostilas->xpath('/apostilas/apostila/capitulos');

print_r($capitulos);

echo '<hr>';