<?php 
session_start();

if (!isset($_SESSION["nama"])) {
    header("location:login.php");
}
elseif ($_SESSION['type'] !=0) {
    header("location:login.php");
}   

include 'conf/koneksi.php';

$id = $_GET['id'];
$hps = mysql_query("DELETE FROM user WHERE ktp=$id");
if ($hps) {

    header("location:list-data.php");
} else {
    echo "gagal menghapus";
}
?>