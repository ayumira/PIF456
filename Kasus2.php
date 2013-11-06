<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 2</title>
	</head>

	<body>		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Pendidikan Terakhir
			<input type="checkbox" name="study[]" value="SD"
			/>SD
			
			<input type="checkbox" name="study[]" value="SMP"
			/>SMP
			
			<input type="checkbox" name="study[]" value="SMA"
			/>SMA
			
			<input type="checkbox" name="study[]" value="Sarjana S1"Checked
			/>Sarjana S1
			
			<input type="checkbox" name="study[]" value="Sarjana S2"
			/>Sarjana S2
			
			<input type="checkbox" name="study[]" value="Sarjana S3"
			/>Sarjana S3
			
			<input type="submit" value="OK" />
		</form>
		
		<?php
		//Ekstraksi Nilai
		if (isset($_POST['study'])){
			foreach ($_POST['study'] as $key => $val){
				echo $key . ' -> ' .$val . '<br />';
			}
		}
		?>
	</body>
</html>