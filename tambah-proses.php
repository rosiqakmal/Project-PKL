
<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nis		= $_POST['siswa_nis'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama		= $_POST['siswa_nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$kelas		= $_POST['siswa_kelas'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$jurusan	= $_POST['siswa_jurusan'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$tglap   = $_POST['tanggal_pendaftaran'];
  	
  	

	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO siswa VALUES(NULL,'$nis', '$nama', '$kelas', '$jurusan', '$tglap')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		header("location:tabel_cari.php?pesan=tambah");
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>
