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
 	<h1>Show all the information for all drivers associated with a particular rescue organization</h1>
 	<label style="font-size:20px;">Organization:
 		<form action="foo.php" method="post">
 		<select id="option" name="option">
 			<option> select </option>
 			<?php foreach ($res as $output) { ?>
 			<option name="name"> <?php echo $output['name'] ?> </option>
 			<?php } ?>
 		</select>

 		</form>
     <div class="inputDiv">
       <form action="rescueDriverInfoResult.php" method="post">
       <input id="input" type="text" name="name" style="visibility:hidden"><br>
       <input type="submit">
       </form>
     </div>

 	</label>
   <br>

 </div>
 </div>
 <script>
 document.getElementById("option").onchange = submit;
 function submit() {
   var input = document.getElementById("option");
   var inputString = input.options[input.selectedIndex].text;
   document.getElementById("input").value = inputString;
 }
 </script>
 </body>
 </html>
