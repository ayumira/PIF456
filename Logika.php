<html>
	<head>
		<title>Operasi Logika</title>
	</head>
	
	<body>
		<?php
			echo " Diketahui: <br>";
			$x=2;
			$y=(-4);
			
			print "x = $x <br>";
			echo "y = $y <br><br>";
			if ($x >=0 && $y>=0) {	
			echo " Kedua bilangan adalah bilangan asli"; }
			else if ($x <=0 && $y<=0) {	
			echo " Kedua bilangan bukan merupakan bilangan asli"; }
			else if ($x >=0 && $y<=0) {	
			echo " x adalah bilangan asli sedangkan y bukan"; }
			else if ($x <=0 && $y>=0) {	
			echo " y adalah bilangan asli sedangkan x bukan"; }
		?>
	</body>
</html>