<html>
	<head>
		<title>Percabangan</title>
	</head>
	
	<body>
		<?php
			$objek = 'Apel';
			
			print " $objek <br><br>";
			
			switch ($objek)
			{
				case 'Apel':
					echo "itu Buah";
				break;
				case 'Mawar';
					echo "itu Bunga";
				break;
				default:
					echo "???";
				break;
			}
		?>
	</body>
</html>