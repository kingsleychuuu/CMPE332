<?php
$name = $_POST["name"];
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

function getAnimalInfo($name) {
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
  <a class="active" href="/CMPE332/website/spcaAnimalInfo.php">SPCA Animal Info</a>
  <a href="/CMPE332/website/rescueDriverInfo.php">Rescue Driver Info</a>
  <a href="/CMPE332/website/donorInfo.php">Donor Info</a>
  <a href="/CMPE332/website/recipientInfo.php">Recipient Info</a>
</div>

<div class="slideshow-container">

<div class="mySlidesStatic">
  <img src="/CMPE332/website/images/dog.jpg" style="width:100%">
</div>

<div class="box">
  <h1> Selected: <?php echo $_POST["name"]; ?> </h1><br>

  <table style="color:#ffffff;font-size:10px;margin-left:auto;margin-right:auto;">
    <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Arrival Date</th>
      <th>Departure Date</th>
      <th>Shelter Name</th>
      <th>Driver Name</th>
      <th>Family Name</th>
    </tr>
    <?php foreach ($res as $key) { ?>
    <tr>
      <th> <?php echo $key['id']; ?></th>
      <th> <?php echo $key['type']; ?></th>
      <th> <?php echo $key['arrivalDate']; ?></th>
      <th> <?php echo $key['departureDate']; ?></th>
      <th> <?php echo $key['shelterName']; ?></th>
      <th> <?php echo $key['driverName']; ?></th>
      <th> <?php echo $key['familyName']; ?></th>
    <tr>
    <?php } ?>
  </table>
</div>
</div>
<script>

</script>
</body>
</html>
