
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>SIMPKL-WGS</title>

  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="css/material.min.css" >
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/material-icon.css" rel="stylesheet">

  <!-- CSS DATA TABLE -->
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" >

  <!-- <link rel="stylesheet" type="text/css" href="css/rowReorder.dataTables.min.css" > -->
  <link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css" >
  <!-- <link rel="stylesheet" type="text/css" href="css/dataTables.material.min.css" > -->

  <!-- custom css -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="css/material.min.css" >
 
  <!--  JQUERY-->
  <script src="js/jquery-2.1.1.min.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

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

 <CENTER><h2><font face="Bodoni MT Black" >Data Pelatihan Siswa Perjurusan</font></h2></CENTER></br></br>
  
<nav class="white z-depth-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><B></B></a>
      <ul class="right hide-on-med-and-down navigasi">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tambah.php">Tambah Data</a></li>
        <li><a href="tabel_cari.php">Cari Data</a></li>
      </ul>
  </nav></br></br>

  <!-- DAFTAR PESERTA PKL-->
  <div class="container">
    <div class="row">
      <div class="data-table">
        <div class="row center">
        
        </div><!-- end row center -->
          <center><table id="example" class="table table-bordered table-striped" style="margin-top:20px;" >
            <thead>
              <tr>
                <th style=>NO</th>
                <th style="text-align:center">NIS</th>
                <th style="text-align:center">Nama</th>
                <th style="text-align:center">Kelas</th>
                <th style="text-align:center">Jurusan</th>
                <th style="text-align:center">Tanggal Pendaftaran</th>
                
              </tr>
            </thead></center>
            <tbody>

              <?php
                // panggil koneksi db
                include 'koneksi.php';
              
                // eksekusi perintah sql cari semua data pendaftaran
                $sql  = mysql_query("SELECT * FROM siswa order by siswa_nama asc");

                  $no = 1;
                while ($dp = mysql_fetch_array($sql)) {

                  //tampilkan data pendaftaran
                  echo '<tr>';
          echo '<td>'.$no.'</td>';  //menampilkan nomor urut
          echo '<td>'.$dp['siswa_nis'].'</td>'; //menampilkan data nis dari database
          echo '<td>'.$dp['siswa_nama'].'</td>';  //menampilkan data nama lengkap dari database
          echo '<td>'.$dp['siswa_kelas'].'</td>'; //menampilkan data kelas dari database
          echo '<td>'.$dp['siswa_jurusan'].'</td>'; //menampilkan data jurusan dari database
          echo '<td>'.$dp['tanggal_pendaftaran'].'</td>';
          

        
                
                  $no++;

                  
               
                }
              ?>


 <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <!-- jquery data table -->
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.rowReorder.min.js"></script>
  <script src="js/dataTables.responsive.min.js"></script>
  <script src="js/dataTables.material.min.js" type="text/javascript"></script>

  <!-- SCRIPT DATA TABLE RESPONSIV -->
   <script type="text/javascript">
   
    // responsive-table jadwal
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

  </script>


  </body>
</html>