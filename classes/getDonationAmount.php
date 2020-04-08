<?php
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "animalrescue";
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $pwd);
$sql = "SELECT distinct donor FROM donations";
$stmt = $pdo->query($sql);
$stmt->execute();
$res = $stmt->fetchAll();

//$rescuerName = $_POST['submit'];
$submitSql = "SELECT * FROM donations WHERE donor = ? AND YEAR(donationDate) = 2018";
//show $outout['organizationName'] . $output['amount']
//sql for total amount donated:
//SELECT SUM(amount) FROM donations WHERE donor = ?;

$submitStmt = $pdo->prepare($submitSql);
$submitStmt->execute([$rescuerName]);
$submitRes = $submitStmt->fetchAll();
 ?>

<html>
<center>
	<h1>GETTING THE DONATIONS WOOOOOOOOO</h1>
	<h2>asdfasdfasdfasdfasdfas</h2>
	<label>spcabranches:
		<form action = "php.php" method = "post">
		<select>
			<option> --asdfsd-- </option>
			<?php foreach ($res as $output) { ?>
			<option> <?php echo $output['donor'] ?> </option>
			<?php } ?>
		</select>
		</form>
		<button type = "submit" name = "submit"> Submit </button>

		</script>
	</label>
</center>
</html>
