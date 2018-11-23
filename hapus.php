<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM siswa WHERE siswa_nis='$id'")or die(mysql_error());
 
header("location:tabel_cari.php?pesan=hapus");
?>
