<<<<<<< HEAD
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
	 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
	<head> 
		<title>Hapus Cookie</title> 
	</head> 
	 
	<body> 	 
		<?php 		 
			setcookie('nama_cookie', 'nilai_cookie'); 
			 
			if (isset($_COOKIE['nama_cookie'])) { 
				echo 'cookie di-set <br />';
				
				// Menghapus cookie, dengan masa berlaku 3 jam yang lalu 
				setcookie('nama_cookie', '', time() - 3 * 3600); 
				echo 'cookie dihapus';			 
			} else { 
				echo 'unset'; 
			}		 
		?> 
		 
		<p> 
		Tekan Refresh (F5);	 
	</body> 
</html> 
=======
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Identifikasi Metode</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
	Nama
	<input type="text" name="nama" /> <br />
	
	<input type="submit" value="OK" /> <br />
	</form>
	
	<?php
	if (isset($_REQUEST['nama'])){
		echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
}
?>
</body>
</html>
>>>>>>> 96b121ddee1704407c337299ad87c9c0344107fa
