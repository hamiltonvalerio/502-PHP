<?php 

$json = '[{
	"id": 47,
	"name": "Thiago",
	"email": "thiago@gmail.com",
	"pass": "202cb962ac59075b964b07152d234b70"
}, {
	"id": 277574,
	"name": "Bill Clinton",
	"email": "bill_clinton@ut.com",
	"pass": "pi584xmg"
}, {
	"id": 277575,
	"name": "Quaid-e-Azam Muhammad Ali Jinnah",
	"email": "quaid-e-azammuhammadalijinnah@hac.com",
	"pass": "312kriwa"
}]';

echo '<pre>';

$users = json_decode($json);
// print_r($users);

foreach ($users as $user) {
	echo $user->name . '<br>';
}

$users = json_decode($json,true);
// print_r($users);

foreach ($users as $user) {
	echo $user['name'] . '<br>';
}