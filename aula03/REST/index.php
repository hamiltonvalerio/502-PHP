<?php 

require 'users.php';

$users = new User();

$data = file_get_contents("php://input");
$data = json_decode($data,true);


// if (!isset($_SERVER['PHP_AUTH_USER'])) {
// 	header('WWW-Authenticate: Basic realm="Access to API", charset="UTF-8"');
// 	header('HTTP/1.1 401');
// 	die();
// } else {
	
// }


$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
			
			$id = $_GET['id'] ?? null;

			if ($id) {
				$data = $users->find($id);
			} else {
				$data = $users->list();
			}

			if($data){
				header('HTTP/1.1 200');
				$response = [
					'status'  => 'ok',
					'data'    => $data,
					'message' => ''
				];
			} else {
				header('HTTP/1.1 204');
			}
		break;
	case 'POST':
			if ($users->insert($data)) {
				header('HTTP/1.1 201');
				$response = [
					'status'  => 'ok',
					'data'    => '',
					'message' => 'Registered successfully'
				];
			} else {
				header('HTTP/1.1 409');
				$response = [
					'status'  => 'erro',
					'data'    => '',
					'message' => ''
				];
			}
		break;
	case 'PUT':
		if ($users->update($data)) {
				header('HTTP/1.1 200');
				$response = [
					'status'  => 'ok',
					'data'    => '',
					'message' => 'Updated successfully'
				];
			} else {
				header('HTTP/1.1 409');
				$response = [
					'status'  => 'erro',
					'data'    => '',
					'message' => ''
				];
			}
		break;
	case 'DELETE':
		if ($users->delete($data)) {
				header('HTTP/1.1 200');
				$response = [
					'status'  => 'ok',
					'data'    => '',
					'message' => 'Deleted successfully'
				];
			} else {
				header('HTTP/1.1 400');
				$response = [
					'status'  => 'erro',
					'data'    => '',
					'message' => ''
				];
			}
		break;
}

header('Content-type: application/json; charset=UTF-8');
echo json_encode($response);