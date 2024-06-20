<?php

// Connect to Mysql using PDO

class Database {

	public $connection;

	public function __construct($config, $username = 'root', $password = '') {

		// $dsn = "mysql:host=localhost;port=3306;dbname=intermediate;charset=utf8mb4";
		$dsn = 'mysql:'.http_build_query($config, '', ';');

		$this->connection = new PDO($dsn, $username, $password, [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}

	public function query($query_string, $params = []) {
		$statement = $this->connection->prepare($query_string);

		$statement->execute($params);

		return $statement;
	}
}

?>
