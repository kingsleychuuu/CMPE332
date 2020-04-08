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

$rescuerName = $_POST['submit'];
$submitSql = "SELECT * FROM driver WHERE rescuerName = ?";
$submitStmt = $pdo->prepare($submitSql);
$submitStmt->execute([$rescuerName]);
$submitRes = $submitStmt->fetchAll();
 ?>
