<?php
	defined('_VALID') or die ('not allowed');
	session_start();
	function init_login(){
		//Simulasi data user account dan password
		$user = 'mira';
		$pass = 'ayu';
		if (isset($_POST['user']) && isset ($_POST['pass'])){
			$n = trim($_POST['user']);
			$p = trim($_POST['pass']);
			if(($n===$user) && ($p ===$pass)){
				//Jika sama, set session
				//set session('nlogin', $n);
				//set session('time', time());
				if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){
					$_SESSION['nlogin'] = $n;
					$_SESSION['time'] = time();
				}
				//redireksi
				?>
				<script type="text/javascript">
					document.location.href="./";
				</script>
				<?php
			} else {
				echo 'Username dan Password yang anda inputkan tidak sesuai';
				return false;
			}
		}
	}

	function validate(){
		if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){?>
			<div class="inner">
				<form action="" method="post">
					<table border=0 cellpadding=5>
						<tr>
							<td>Username</td>
							<td><input type="text" name="user" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="pass" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="LOGIN" /></td>
						</tr>
					</table>
				</form>
			</div>
			<?php
			exit;
		}
		if(isset($_GET['m']) && $_GET['m'] == 'logout'){
			//hapus session
			if(isset($_SESSION['nlogin'])){
				unset($_SESSION['nlogin']);
			}
			if(isset($_SESSION['time'])){
				unset($_SESSION['time']);
			}
			//redireksi halaman
			?>
			<script type="text/javascript">
				document.location.href="./";
			</script>
			<?php
		}
	}
?>