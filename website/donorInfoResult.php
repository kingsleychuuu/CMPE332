<?php
$name = $_POST["name"];
$sql = "SELECT SUM(amount) FROM donations WHERE YEAR(donationDate) = 2018 AND organizationName = ?";
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "animalrescue";
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $pwd);
$pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $pdo->prepare($sql);
$stmt->execute([$name]);
$res = $stmt->fetchAll();

function getDriverInfo($name) {
  $sql = "SELECT * FROM animal WHERE spcaBranchName = ?";
  $host = "localhost";
  $user = "root";
  $pwd = "";
  $dbname = "animalrescue";
  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
  $pdo = new PDO($dsn, $user, $pwd);
  $pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$name]);
  $res = $stmt->fetchAll();
  foreach ($res as $key) {
      echo $key['id'] . $key['type'] . $key['arrivalDate'] . $key['departureDate'] . $key['shelterName'] . $key['driverName'] . $key['familyName'];
  }
}
 ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>

<div class="topnav">
  <a href="/CMPE332/website/index.html">Home</a>
  <a href="/CMPE332/website/spcaAnimalInfo.php">SPCA Animal Info</a>
  <a href="/CMPE332/website/rescueDriverInfo.php">Rescue Driver Info</a>
  <a class="active" href="/CMPE332/website/donorInfo.php">Donor Info</a>
  <a href="/CMPE332/website/recipientInfo.php">Recipient Info</a>
</div>

<div class="slideshow-container">

<div class="mySlidesStatic">
  <img src="/CMPE332/website/images/bunny.jpg" style="width:100%">
</div>

<div class="box">
  <h1> Selected: <?php echo $_POST["name"]; ?> </h1><br>
  <label style="font-size:20px"><?php echo array_values(array_values($res)[0])[0]; ?>

</div>
</div>
<script>

</script>
</body>
</html>
