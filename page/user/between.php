
<!DOCTYPE html>
<html>
<head>
		

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/material-icon.css" rel="stylesheet">

  <!-- CSS CUSTOM  -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 
  <!-- Scripts -->
  <script src="js/jquery-2.1.1.min.js"></script>
	<title>SIMPLE PROJECT</title>
</head>
<body>
	<CENTER><h2>Data Pelatihan Siswa Perjurusan</h2></CENTER></br></br>

	<!-- MENU HEADER -->
  <nav class="white z-depth-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><B></B></a>
      <ul class="right hide-on-med-and-down navigasi">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tambah.php">Tambah Data</a></li>
        <li><a href="tabel_cari.php">Cari Data</a></li>
    
      </ul>

</style>
  </nav>
<?php
			$Open = mysql_connect("localhost","root","");
				if (!$Open){
				die ("Koneksi ke Engine MySQL Gagal !");
				}
			$Koneksi = mysql_select_db("latihan");
				if (!$Koneksi){
				die ("Koneksi ke Database Gagal !");
				}

?>
	<form action="between.php" method="post">

	<input type="date" name="tanggalawal" > 
	<input type="date" name="tanggalakhir" > 
	<p>
		<input type="submit" name="cari">

<?php
			//proses jika sudah klik tombol pencarian data
			if(isset($_POST['cari'])){
			//menangkap nilai form
			$tanggal_awal=$_POST['tanggalawal'];
			$tanggal_akhir=$_POST['tanggalakhir'];
			if(empty($tanggal_awal) || empty($tanggal_akhir)){
			//jika data tanggal kosong
			?>
			?>
			<script language="JavaScript">
				alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
				document.location='index.php';
			</script>
			<?php
			}else{
			?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggalawal']?></b> s/d <b><?php echo $_POST['tanggalakhir']?></b></i>
			<?php
			$query=mysql_query("select * from siswa where tanggal_pendaftaran between '$tanggal_awal' and '$tanggal_akhir'");
			}
			?>
	<center><table cellpadding="2" cellspacing="0" border="5">
		<tr bgcolor="#BCC">
			<th>No.</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Tanggal Pendaftaran</th>
			
		</tr></br></br>
		
	
			<?php

			for ($no= 1; $no <= 200; $no++)
			//menampilkan pencarian data
			while($row=mysql_fetch_array($query)){
			?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td align="center"><?php echo $row['siswa_nis']; ?></td>
				<td align="center"><?php echo $row['siswa_nama'];?></td>
				<td align="center"><?php echo $row['siswa_kelas'];?></td>
				<td align="center"><?php echo $row['siswa_jurusan'];?></td>
				<td align="center"><?php echo $row['tanggal_pendaftaran'];?></td>
			</tr>
			<?php
			}
			?> 
			  
			
				<?php
				//jika pencarian data tidak ditemukan
				if(mysql_num_rows($query)==0){
					echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
				}
				?>
				</td>
			</tr> 
		</table>
		<?php
		}
		else{
			unset($_POST['search']);
		}
		?>   
	</table>
</center>


</body>
</html>