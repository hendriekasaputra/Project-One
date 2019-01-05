<?php
    
include 'conf/koneksi.php';

$passwordlama = md5($_POST['passwordlama']);

$passwordbaru = md5($_POST['passwordbaru']);

$konfirmasipassword = md5($_POST['konfirmasipassword']);

$username = $_POST['username'];

$cekuser = "SELECT * FROM login WHERE nama = '$username' and pass = '$passwordlama'";

$querycekuser = mysql_query($cekuser);

$count = mysql_num_rows($querycekuser);

if ($count >= 1){

$updatepassword = "UPDATE login SET pass = '$passwordbaru' WHERE nama ='$username'";

$updatequery = mysql_query($updatepassword);

if($updatequery)

{

echo "<script>alert('Password Berhasil Di Ubah'); window.location = 'menus-admin.php';</script>";
    }
}
else{

echo "<script>alert('Data Gagal Di Ubah'); window.location = 'change-password.php';</script>";   
    

}

?>