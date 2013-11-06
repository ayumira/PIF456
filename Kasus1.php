<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 1</title>
	</head>

	<body>		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Agama
		<select name="agama">
			<option value="Islam"Selected>Islam
			<option value="Kristen">Kristen
			<option value="Katolik">Katolik
			<option value="Hindu">Hindu
			<option value="Budha">Budha
		</select> <br />
		
		<input type="submit" value="OK" />
		</form>
		
		<?php
			if (isset($_POST['agama'])) {
				echo $_POST['agama'];
			}
		?>		
	</body>
</html>