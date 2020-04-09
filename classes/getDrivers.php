<?php
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "animalrescue";
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $pwd);
$sql = "SELECT * FROM rescuer";
$stmt = $pdo->query($sql);
$stmt->execute();
$res = $stmt->fetchAll();

//$rescuerName = $_POST['submit'];
$submitSql = "SELECT * FROM driver WHERE rescuerName = ?";
$submitStmt = $pdo->prepare($submitSql);
$submitStmt->execute([$rescuerName]);
$submitRes = $submitStmt->fetchAll();
 ?>

<html>
<center>
	<h1>getting all the drivers woooooo</h1>
	<h2>asdfasd</h2>
	<label>rescue orgs:
		<form>
		<select>
			<option> select </option>
			<?php foreach ($res as $output) { ?>
			<option> <?php echo $output['name'] ?> </option>
			<?php } ?>
		</select>
		</form>
		<button type = "submit" name = "submit"> Submit </button>

		</script>
	</label>
</center>
</html>
