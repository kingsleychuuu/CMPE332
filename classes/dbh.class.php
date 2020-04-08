<?php

class Dbh {
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbname = "animalrescue";

	protected function connect() {
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		//$pdo = new PDO('mysql:host=localhost;dbname=animalrescue', $this->user, $this->pwd);
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}
}
