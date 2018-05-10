<?php 

$dom = new DOMDocument();
$dom->load('apostilas.xml');

$apostilas = $dom->getElementsByTagName('apostila');

echo $apostilas->item(0)->getAttribute('id');