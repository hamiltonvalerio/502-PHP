<?php 

ini_set('soap.wsdl_cache_enabled', 0);

$soapClient = new SoapClient('users.wsdl');



$user = ['name' => 'Pedro' , 'email' => 'pedro@gmail.com', 'pass' => '234'];

echo $soapClient->insert($user);

$users = json_decode($soapClient->list()) ;
foreach ($users as $user) {
	echo $user->name . '<br>';
}