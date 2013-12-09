<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "mysql";
$cnn = mysql_connect($host, $user,$pass);
if ($cnn) {
echo 'sukses';
}
$db = mysql_select_db($database, $cnn);
if($db) {
echo '<br/>';
echo 'berhasil';
}
?>