<?php

class Test extends Dbh {

	public function getOrganization() {
		$sql = "SELECT * FROM organization";
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()) {
			echo $row['name'] . '<br>';
		}
	}

	public function getOrganizationStmt($name, $ph) {
		$sql = "SELECT * FROM organization WHERE name = ? AND address = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $ph]);
		$res = $stmt->fetchAll();

		foreach ($res as $key) {
				echo $key['name'];
				echo $key['address'];
		}
	}

}
