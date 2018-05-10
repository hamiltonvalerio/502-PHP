<?php 

class User
{
	private $con;

	public function __construct()
	{
		$this->con = new PDO("pgsql:host=localhost;dbname=aula","lucas","123");
	}

	public function list()
	{
		$stmt = $this->con->query('SELECT * FROM users');
		$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($users);
	}

	public function find(int $id)
	{
		$stmt = $this->con->query('SELECT * FROM users WHERE id='.$id);
		$users = $stmt->fetch(PDO::FETCH_ASSOC);
		return $users;
	}

	public function insert(array $data)
	{
		$sql = "INSERT INTO users (name,email,pass) VALUES (:name,:email,:pass)";
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(':name',$data['name']);
		$stmt->bindValue(':email',$data['email']);
		$stmt->bindValue(':pass',$data['pass']);
		return $stmt->execute();
	}

	public function update(array $data)
	{
		$sql = "UPDATE users SET name=:name,email=:email,pass=:pass WHERE id=:id";
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(':name',$data['name']);
		$stmt->bindValue(':email',$data['email']);
		$stmt->bindValue(':pass',$data['pass']);
		$stmt->bindValue(':id',$data['id']);
		return $stmt->execute();
	}

	public function delete(array $data)
	{
		$sql = "DELETE FROM users WHERE id = :id";
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(':id',$data['id']);
		return $stmt->execute();
	}
}