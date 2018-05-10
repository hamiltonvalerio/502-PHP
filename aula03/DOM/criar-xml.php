<?php 

$con = new PDO("pgsql:host=localhost;dbname=aula","lucas","123");

$stmt = $con->query('SELECt * FROM users');
$usersdb = $stmt->fetchAll(PDO::FETCH_ASSOC);

$xml = '<?xml version="1.0" encoding="UTF-8"?><users></users>';

$dom = new DOMDocument();
$dom->loadXML($xml);


$users = $dom->getElementsByTagName("users");

foreach ($usersdb as $user) {
	$userItem = $dom->createElement('user');	
	$nameItem = $dom->createElement('name',$user['name']);
	$emailItem = $dom->createElement('email',$user['email']);
	$passItem = $dom->createElement('pass',$user['pass']);

	$userItem->setAttribute('id',$user['id']);

	$userItem->appendChild($nameItem);
	$userItem->appendChild($emailItem);
	$userItem->appendChild($passItem);

	$users->item(0)->appendChild($userItem);
}

$dom->save('users.xml');

header('Content-type: text/xml');

echo $dom->saveXML();