<?php

class Dbh {
	private $host = "localhost:8080";
	private $user = "root"
	private $pwd = "";
	private $dbName = "animalrescue";

	protected function connect() {
		$dsn = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}
}


