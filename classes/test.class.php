<?php

class Test extends Dbh {

	public function getOrganization() {
		$sql = "SELECT * FROM organization";
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()) {
			echo $row['name'] . '<br>';
		}
	}

	public function getOrganizationStmt($name) {
		$sql = "SELECT * FROM organization WHERE name = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name]);
		$res = $stmt->fetchAll();
		foreach ($res as $key) {
				echo $key['postalCode'] . $key['address'];
		}
	}

}
