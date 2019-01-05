<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'sample_web';

/////////
$koneksi = mysql_connect($host , $user , $pass);
if (!$koneksi) {
	die("Error".mysql_error());
}
mysql_select_db($db);
//////////
 ?>