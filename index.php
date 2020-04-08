<?php
	include_once 'includes/class-autoload.inc.php';
	include_once 'classes/dbh.class.php';
	include_once 'classes/test.class.php';
?>
<!DOCTYPE html>
<html lang = "en">
<head>

</head>
<body>
    <?php
        $testObj = new Test();
        $testObj->getOrganization();
    ?>
</body>
</html>
