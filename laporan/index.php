<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->image('images/smkn4.png',10,6,30);
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEGERI ',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SEMUA SISWA',0,1,'C');
$pdf->SetFont('Arial','i',8);
$pdf->cell(0,5, 'Alamat : Jl.selontongan 28 Buah Batu, Bandung','0','1','C',false);
$pdf->Ln(5);
$pdf->cell(190,0.6,'','0','1','c',true);
$pdf->Ln(3);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIS',1,0);
$pdf->Cell(30,6,'NAMA SISWA',1,0);
$pdf->Cell(27,6,'KELAS',1,0);
$pdf->Cell(60,6,'JURUSAN',1,0);
$pdf->Cell(50,6,'TANGGAL PENDAFTARAN',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from siswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$row['siswa_nis'],1,0);
    $pdf->Cell(30,6,$row['siswa_nama'],1,0);
    $pdf->Cell(27,6,$row['siswa_kelas'],1,0);
    $pdf->Cell(60,6,$row['siswa_jurusan'],1,0);
    $pdf->Cell(50,6,$row['tanggal_pendaftaran'],1,1); 
}

$pdf->Output();
?>