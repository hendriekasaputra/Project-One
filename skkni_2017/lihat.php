<?php 


include 'conf/koneksi.php';

$id = $_POST['id'];

$Query = mysql_query("SELECT * FROM user WHERE ktp=$id ");
$details = mysql_fetch_assoc($Query);
?>

<table class="table">
	<tr>
		<td class="success">Nama Lengkap</td>
		<td>:</td>
		<td><?php echo $details['nama']; ?></td>
	</tr>
	<tr>
		<td class="success">Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $details['tgllahir']; ?></td>
	</tr>
	<tr>
		<td class="success">Nomor HP</td>
		<td>:</td>
		<td><?php echo $details['nohp']; ?></td>
	</tr>
	<tr>
		<td class="success">Alamat</td>
		<td>:</td>
		<td><?php echo $details['alamat']; ?></td>
	</tr>
</table>