<?php
 
include 'conf/koneksi.php';
	
	$no_surat		= $_POST['no_surat'];
	$ktp			= $_POST['ktp'];	
	$nama			= $_POST['nama'];				
	$tgl_pindah		= $_POST['tgl_pindah'];
	$desa_asal		= $_POST['desa_asal'];
	$desa_tujuan	= $_POST['desa_tujuan'];

$update = mysql_query("UPDATE data_pindah SET no_surat='$no_surat',
	ktp='$ktp', nama='$nama', tgl_pindah='$tgl_pindah', desa_asal='$desa_asal', desa_tujuan='$desa_tujuan'
	WHERE no_surat='$no_surat' ");

if ($update) {
    echo "<script>alert('Data Berhasil di Ubah'); window.location = 'data-pindah.php';</script>";
} else {
    echo "<script>alert('Data Gagal di ubah');</script>";
}
?>
