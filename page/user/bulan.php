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
<form method="post" action="bulan.php">
Bulan
<select name="bulan">
<option value="01">Januari</option>
<option value="02">Februari</option>
<option value="03">Maret</option>
<option value="04">April</option>
<option value="05">Mei</option>
<option value="06">Juni</option>
<option value="07">Juli</option>
<option value="08">Agustus</option>
<option value="09">September</option>
<option value="10">Oktober</option>
<option value="12">November</option>
<option value="12">Desember</option>
</select>
Tahun
<select name="tahun">
<?php

$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>

<input type="submit" name="cari">
</form>

<?php
			//proses jika sudah klik tombol pencarian data
			if(isset($_POST['cari'])){
			//menangkap nilai form
			$bulan = $_POST['bulan'];
			$tahun = $_POST['tahun'];
			if(empty($bulan) || empty($tahun)){
			//jika data tanggal kosong

			?>
			<script language="JavaScript">
				alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
				document.location='bulan.php';
			</script>
			<?php
			}else{
			?><i><b>Informasi : </b> Hasil pencarian data berdasarkan bulan <b><?php echo $_POST['bulan']?></b> & Tahun <b><?php echo $_POST['tahun']?></b></i>
			<?php
			$query=mysql_query("select * from siswa where month(tanggal_pendaftaran)='$bulan' and year(tanggal_pendaftaran) = '$tahun'");
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
			unset($_POST['cari']);
		}
		?>   
