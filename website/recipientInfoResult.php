<?php
$name = $_POST["name"];
$sql = "SELECT * FROM donations WHERE donor = ?";
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

function getDonorInfo($name) {
  $sql = "SELECT SUM(amount) FROM donations WHERE donor = ?";
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
      echo array_values($key)[0];
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
  <a href="/CMPE332/website/donorInfo.php">Donor Info</a>
  <a class="active" href="/CMPE332/website/recipientInfo.php">Recipient Info</a>
</div>

<div class="slideshow-container">

<div class="mySlidesStatic">
  <img src="/CMPE332/website/images/dog.jpg" style="width:100%">
</div>

<div class="box">
  <h1> Selected: <?php echo $_POST["name"]; ?> </h1><br>
  <table style="color:#ffffff;font-size:10px;margin-left:auto;margin-right:auto;">
    <tr>
      <th>Amount</th>
      <th>Donation Date</th>
      <th>Organization Name</th>
    </tr>
    <?php foreach ($res as $key) { ?>
    <tr>
      <th> <?php echo $key['amount']; ?></th>
      <th> <?php echo $key['donationDate']; ?></th>
      <th> <?php echo $key['organizationName']; ?></th>
    <tr>
    <?php } ?>
  </table>

  <label style="font-size: 20px;">Total Amount Donated: <?php getDonorInfo($_POST["name"]) ?>

</div>
</div>
<script>

</script>
</body>
</html>
