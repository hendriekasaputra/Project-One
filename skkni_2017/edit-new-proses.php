<?php
 
include 'conf/koneksi.php';
	
$ktp			= $_POST['ktp'];
$nama			= $_POST['nama'];
$tgllahir		= $_POST['tgllahir'];
$nohp			= $_POST['nohp'];
$alamat			= $_POST['alamat'];

$update = mysql_query("UPDATE user SET ktp='$ktp',nama='$nama',tgllahir='$tgllahir',nohp='$nohp',alamat='$alamat'
	WHERE ktp='$ktp' ");

if ($update) {
    echo "<script>alert('Data Berhasil di Ubah'); window.location = 'list-data.php';</script>";
} else {
    echo "<script>alert('Data Gagal di ubah');</script>";
}
?>
