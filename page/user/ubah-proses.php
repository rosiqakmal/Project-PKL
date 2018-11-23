<?php 
 
include 'koneksi.php';
	$id			= $_POST['siswa_id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$nis		= $_POST['siswa_nis'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama		= $_POST['siswa_nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$kelas		= $_POST['siswa_kelas'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$jurusan	= $_POST['siswa_jurusan'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$tglap   	= $_POST['tanggal_pendaftaran'];
mysql_query("UPDATE siswa SET siswa_nis='$nis', siswa_nama='$nama', siswa_kelas='$kelas', siswa_jurusan='$jurusan', tanggal_pendaftaran='$tglap' WHERE siswa_nis='$nis'");
 
header("location:index.php?pesan=update");
?>