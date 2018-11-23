<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  

  <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
 
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>
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
<body style="
    margin-bottom: 30px;
    margin-top: 30px;
">
	
	<center><h2><font face="Bodoni MT Black">Tambah Data Siswa</font></h2></center></br></br>
	
<nav class="white z-depth-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><B></B></a>
      <ul class="right hide-on-med-and-down navigasi">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tambah.php">Tambah Data</a></li>
        <li><a href="tabel_cari.php">Cari Data</a></li>
      </ul>
  </nav></br></br>
  
	<form action="tambah-proses.php" method="post">
    <center><table  cellpadding="1" cellspacing="0" style="
      width: 700px;" >
      <tr>
        <td style="
             width: 140px;
          ">NIS</td>
        
        <td><input class="form-control" type="text" name="siswa_nis" placeholder="Masukan NIS" required="" style="
    height: 30px;
"></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        
        <td><input class="form-control" type="text" name="siswa_nama" size="2" placeholder="Masukan Nama Lengkap" required=""></td>

      </tr>
      <tr>
        <td>Kelas</td>
        <td>
          <select name="siswa_kelas"  required>
            <option value="">Pilih Jurusan</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Jurusan</br></br></br></br></td>
        <td>
          <select  name="siswa_jurusan" required>
            <option value="">Pilih Jurusan</option>
            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
            <option value="Multimedia">Multimedia</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Perbankan">Perbankan</option>
            <option value="Pemasaran">Pemasaran</option>
          </select></br></br></br>
        </td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td>
        
              <input name="tanggal_pendaftaran" type="text" class="form-control datepicker" placeholder="Tanggal Mulai Pendaftaran" required="">
            </div>
            </div>


    </center>   
    </table>
    <td>&nbsp;</td>
  
        <td><input type="submit" name="tambah" value="simpan" class="btn btn-success"><br></td>
      
      </tr>
	</td>
			
			</tr>
	</form>
</br></br>



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