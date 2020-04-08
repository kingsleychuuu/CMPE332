<?php
include_once('php.php')
 ?>
<html>
<center>
	<h1>asdlfkajdls;fkaj</h1>
	<h2>asdfasdfasdfasdfasdfas</h2>
	<label>country:
		<form action = "php.php" method = "post">
		<select>
			<option> --asdfsd-- </option>
			<?php foreach ($res as $output) { ?>
			<option> <?php echo $output['name'] ?> </option>
			<?php } ?>
		</select>
		</form>
		<button type = "submit" name = "submit"> Submit </button>
		<?php foreach ($submitRes as $output) { ?>
		<?php echo $output['name']	 ?>
		<?php } ?>
		</script>
	</label>
</center>
</html>
