<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body bgcolor="Black">

<div id="style1">
<div id="style2">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return checkForm(this)">
<div id="username">Username <input type ="text" name ="username" /></div>
<div id="password">Password <input type ="password" name ="password" /></div>
<div id="login"><input type ="submit" value="LOGIN" /></div>

</form>
</div>
<div id="style3">
<?php
if (is_string($_POST['username'])){
if (($_POST['password']=='mira')&&($_POST['username']=='mira')){echo 'Selamat Datang ' .$_POST['username'];}
else{echo 'Username dan password yang anda masukkan tidak sesuai, coba lagi!!!';}
}
?>
</div>
</div>
</body>
</html>