<?php 

$con = new PDO("pgsql:host=localhost;dbname=aula","lucas","123");

$stmt = $con->query('SELECt * FROM users');
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$xml = new SimpleXmlElement('<?xml version="1.0" encoding="UTF-8"?><users></users>');

foreach ($users as $user) {
	$item = $xml->addChild('user');
	$item->addAttribute('id', $user['id']);
	$item->addChild('name',$user['name']);	
	$item->addChild('email',$user['email']);	
	$item->addChild('pass',$user['pass']);
}

$xml->saveXML('users.xml');

header('Content-type: text/xml');

echo $xml->asXML();