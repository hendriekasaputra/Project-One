
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Daftar Gaji</title>
</head>
<script type="text/javascript">
window.print()
</script>

<body>
<?php
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
include "koneksi.php";
$no=1;
$que=mysql_query("SELECT * FROM pegawai inner join jabatan on pegawai.idjabatan = jabatan.idjabatan inner join gaji on pegawai.nik = gaji.nik where bulan = '$bulan' and tahun = '$tahun' order by nama asc");
?>
<table align="center"><tr><td width="870">Dicetak Tanggal : <?php $tgl=date('l, d-m-Y'); echo $tgl;?></td><td><a href="gaji.php">Cancel</a></td></tr>

</table>





<h1 align="center">DAFTAR GAJI BULAN <?php echo $bulan ;?> <?php echo $tahun ;?>   <br />
PT. PRIMA MANDIRI PERKASA <br />
BANGKINANG - KAMPAR - RIAU</h1>
<table width="826" border="1" align="center" bordercolor="#000000">

<tr align="center" bgcolor="#CCCCCC"><td width="32"><font size="+1"><strong>NO</strong></font></td><td width="114"><font size="+1"><strong>NIK</strong></font></td><td width="222"><font size="+1"><strong>NAMA</strong></font></td><td width="194"><font size="+1"><strong>JABATAN</strong></font></td><td width="230"><font size="+1"><strong>GAJI KOTOR</strong></font></td><td width="230"><font size="+1"><strong>POTONGAN</strong></font></td><td width="230"><font size="+1"><strong>GAJI BERSIH</strong></font></td></tr>

<?php
while($isi=mysql_fetch_array($que)) {
?>
<tr>
<h4>
<td><?php echo $no++; ?></td>
<td><?php echo $isi['nik']; ?></td>
<td><?php echo $isi['nama']; ?></td>
<td><?php echo $isi['jabatan']; ?></td>
<td><?php echo $isi['gaji']; ?></td>
<td><?php echo $isi['potongan']; ?></td>
<td><?php echo $isi['gajibersih']; ?></td>


</h4></tr>
 <?php } ?>

</table>

</html>
