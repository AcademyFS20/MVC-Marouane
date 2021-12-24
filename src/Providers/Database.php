<?php

namespace Providers;
use \PDO;
use \PDOExceptions;

abstract class Database
{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;
	private $connection;
    private $satement;

public function __construct()
{
	$dsn = 'mysql:host=' . $this->host . ';dbname=' .$this->dbname;

	$options = array (
		PDO::ATTR_PERSISTENT => true,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	);

	try {
		$this->connection = new PDO($dsn,$this->user,$this->pass, $options);
		} catch (PDOExceptions $e) {
		$this->error = $e->getMessage();
		}
}

protected function query($query)
{
	$this->statement = $this-> connection->prepare($query);
}

protected function bind($param, $value, $type = null)
{
	if (is_null($type)){
		switch(true){
			case is_int($value):
				$type = PDO::PARAM_INT;
				break;
			case is_bool($value):
				$type = PDO::PARAM_BOOL;
				break;
			case is_null($value):
				$type = PDO::PARAM_NULL;
				break;
			default:
				$type = PDO::PARAM_STR;
		}
	}
	$this->statement->bindValue($param, $value, $type);
}

protected function exec(){
	return $this->statement->execute();
}

protected function resultSet()
{
	$this->exec();
	$result = $this->statement->fetchAll(PDO::FETCH_OBJ);
	$this-> statement -> closeCursor();
	return $result;
}

protected function single()
{
	$this-> exec();
	$data = $this->statement->fetch(PDO::FETCH_OBJ);
	return $data;
}

protected function Count() 
{
	return $this->statement->rowCount();
}

protected function rowCount()
{
	return $this->statement->rowCount();
}

protected function lastInsertId() 
{
	return $this ->connection->lastInsertId();
}

protected function beginTransaction()
{
	return $this->connection->beginTransaction();
}

protected function endTransaction()
    {
        return $this->connection->commit();
    }

protected function cancelTransaction()
    {
        return $this->connection->rollBack();
    }


}
	





