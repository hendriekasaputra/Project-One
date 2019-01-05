<?php
include 'conf/koneksi.php'; 
$pass=md5($_POST['pass']);
mysql_query("INSERT INTO login(nama,pass) values ('$_POST[nama]','$pass')");
echo "<script>alert('Data $_POST[nama] berhasil ditambah'); window.location = 'access-account.php';</script>";
 
?>