<?php 

ini_set('soap.wsdl_cache_enabled', 0);

require 'users.php';

$users = new User();

$soapServer = new SoapServer('users.wsdl');
$soapServer->setObject($users);
$soapServer->handle();