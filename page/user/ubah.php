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


	<center><title>SIMPLE PROJECT</title></center>
</head>

	<h2><center>Ubah Data Pelatihan Siswa</center></h2>
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
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM siswa WHERE siswa_nis='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="ubah-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<center><table cellpadding="3" cellspacing="0" style="
    	width: 700px;
			">
				<td>NIS</td>
				<td><input type="text" name="siswa_nis" value="<?php echo $data['siswa_nis']; ?>" required="" style="
    height: 30px;
"></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="siswa_nama" size="30" value="<?php echo $data['siswa_nama']; ?>" required="" style="
    height: 30px;
"></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<select name="siswa_kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="X" <?php if($data['siswa_kelas'] == 'X'){ echo 'selected'; } ?>>X</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="XI" <?php if($data['siswa_kelas'] == 'XI'){ echo 'selected'; } ?>>XI</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="XII" <?php if($data['siswa_kelas'] == 'XII'){ echo 'selected'; } ?>>XII</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
					<select name="siswa_jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Komputer dan Jaringan" <?php if($data['siswa_jurusan'] == 'Teknik Komputer dan Jaringan'){ echo 'selected'; } ?>>Teknik Komputer dan Jaringan</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Multimedia" <?php if($data['siswa_jurusan'] == 'Multimedia'){ echo 'selected'; } ?>>Multimedia</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Akuntansi" <?php if($data['siswa_jurusan'] == 'Akuntansi'){ echo 'selected'; } ?>>Akuntansi</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Perbankan" <?php if($data['siswa_jurusan'] == 'Perbankan'){ echo 'selected'; } ?>>Perbankan</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Pemasaran" <?php if($data['siswa_jurusan'] == 'Pemasaran'){ echo 'selected'; } ?>>Pemasaran</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>

				<td>Tanggal</td>
				<td>
				<div class="input-field col s6">
              <input name="tanggal_pendaftaran" type="text" class="datepicker" placeholder="Tanggal Mulai Pendaftaran" value="<?php echo $data['tanggal_pendaftaran']; ?>" required="" style="
    		height: 30px;
				">
            </div>
            </table>
		
				<td>&nbsp;</td>
				
				<td><input class="btn btn-s waves-effect waves-light green accent-4" type="submit" name="simpan" value="Simpan" style="
    padding-left: 12px;
    padding-top: 3px;
    padding-bottom: 12px;
    padding-right: 12px;
	"></td>
			</tr>
		</center>
	</form>
	<?php } ?>
	<!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <!-- <script src="js/jquery-2.1.1.min.js"></script> -->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <!-- script form -->
  <script type="text/javascript">
    
      // select
      $(document).ready(function() {
        $('select').material_select();
      });

      // textarea
      $(document).ready(function() {
      $('input#input_text, textarea#textarea1').characterCounter();
    });

    //DATEPPICKER
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year
      format: 'yyyy/mm/dd' });
    </script>
</body>
</html>