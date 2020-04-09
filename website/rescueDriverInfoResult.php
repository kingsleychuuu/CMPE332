<?php
$name = $_POST["name"];
$sql = "SELECT * FROM driver WHERE rescuerName = ?";
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
  <a class="active" href="/CMPE332/website/rescueDriverInfo.php">Rescue Driver Info</a>
  <a href="/CMPE332/website/donorInfo.php">Donor Info</a>
  <a href="/CMPE332/website/recipientInfo.php">Recipient Info</a>
</div>

<div class="slideshow-container">

<div class="mySlidesStatic">
  <img src="/CMPE332/website/images/cat.jpg" style="width:100%">
</div>

<div class="box">
  <h1> Selected: <?php echo $_POST["name"]; ?> </h1><br>

  <table style="color:#ffffff;font-size:10px;margin-left:auto;margin-right:auto;">
    <tr>
      <th>Name</th>
      <th>PhoneNumber</th>
      <th>Plate Number</th>
      <th>Driver License</th>
    </tr>
    <?php foreach ($res as $key) { ?>
    <tr>
      <th> <?php echo $key['name']; ?></th>
      <th> <?php echo $key['phoneNumber']; ?></th>
      <th> <?php echo $key['plateNumber']; ?></th>
      <th> <?php echo $key['driverLicense']; ?></th>
    <tr>
    <?php } ?>
  </table>
</div>
</div>
<script>

</script>
</body>
</html>
