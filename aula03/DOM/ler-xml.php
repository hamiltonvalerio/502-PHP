<?php 

$xml = <<< 'XML'
<?xml version="1.0" encoding="UTF-8"?>
<apostilas>
	<apostila id="1">
		<titulo>PHP</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediario</topico>
			<topico>Avancado</topico>
		</topicos>
	</apostila>
	<apostila id="2">
		<titulo>Java</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediario</topico>
			<topico>Avancado</topico>
		</topicos>
	</apostila>
	<apostila id="3">
		<titulo>Ruby</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediario</topico>
			<topico>Avancado</topico>
		</topicos>
	</apostila>
</apostilas>
XML;

echo '<pre>';

$dom = new DOMDocument();
$dom->loadXML($xml);

var_dump($dom);

echo '<hr>';

$dom = new DOMDocument();
$dom->load('apostilas.xml');

var_dump($dom);