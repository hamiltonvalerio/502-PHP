<?php 

$apostilas = new SimpleXmlElement('../apostilas.xml', null,true);


echo '<pre>';
print_r($apostilas->apostila[0]->attributes());