<?php 

require 'users.php';

$user = new User();

$data = file_get_contents("php://input");

$data = json_decode($data,true);

switch ($data['method']) {
	case 'list':
			$response = [
					'result' => $user->list(),
					'error'  => null,
					'id'     => $data['id']
			];
			header('Content-type: application/json; charset=UTF-8');
			echo json_encode($response);
		break;
	case 'insert':
			$response = [
				'result' => $user->insert($data['params']),
				'error'  => null,
				'id'     => $data['id']
			];
			header('Content-type: application/json; charset=UTF-8');
			echo json_encode($response);
		break;
}