<?php 

session_start();

if (!isset($_SESSION["nama"])) {
    header("location:login.php");
}
elseif ($_SESSION['type'] !=0) {
    header("location:login.php");
}   


include 'conf/koneksi.php'; 

	$ktp			= $_POST['ktp'];
	$nama			= $_POST['nama'];			
	$tgllahir		= $_POST['tgllahir'];
	$nohp			= $_POST['nohp'];
	$alamat			= $_POST['alamat'];
	

 
$simpan = mysql_query("INSERT INTO user VALUES ('$ktp','$nama','$tgllahir','$nohp','$alamat')");
if($simpan){
  	echo "<script>alert('Data berhasil di tambah.'); window.location = 'list-data.php';</script>";

} else {

	echo "<script>alert('Data gagal di tambah.'); window.location = 'new-input-data.php';</script>";
	
	}
?>