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

// $apostilas = new SimpleXmlElement($xml);

$apostilas = new SimpleXmlElement('../apostilas.xml', null,true);

echo '<pre>';
var_dump($apostilas);