<?php

class Humans
{
	public function __construct(Pdo $connection)
	{
		$this->connection = $connection;
	}
	
	public function find($id)
	{
		$sql = 'SELECT * FROM humans WHERE id=?';
		$statement = $this->connection->prepare($sql);
		$statement->bindValue(1, $id, PDO::PARAM_INT);
		$statement->execute();
		return $statement->fetchAll();
	}
}