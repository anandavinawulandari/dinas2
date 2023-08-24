<?php
define('DB_SERVER','127.0.0.1');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'dinas');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Memanggil file fpdf yang anda tadi simpan di folder htdoc
require('../fpdf/fpdf.php');
{
date_default_timezone_set('Asia/Jakarta');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
}

// Ukuran kertas PDF
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
//Format tanggal
$pdf->Cell(5,0.7,"Printed On : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
// st font yang ingin anda gunakan
$pdf->SetFont('Arial','B',10);
// queri yang ingin di tampilkan di tabel sehingga ketika diubah tidak akan berpengaruh
// Kode 1, 0, 'C' dan banyak kode di bawah adalah ukuran lebar tabel ubah jika tidak sesuai keinginan anda.
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Room', 1, 0, 'C');
$pdf->Cell(9, 0.8, 'Complaints Details', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Regist Date', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Update Date', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'status', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
// from dan edn ini adalah nama dari form star_filter.php yang berfungsi untuk memanggil tanggal yang di atur
$from=$_POST['from'];
$end=$_POST['end'];
// memanggil database
$query=mysqli_query($con,"select * from tblcomplaints WHERE (regDate BETWEEN '$from' AND '$end')");
while($lihat=mysqli_fetch_array($query)){

// Queri yang ingin ditampilkan yang berada di database
 $pdf->Cell(1, 0.8, $no, 1, 0, 'C');
 $pdf->Cell(4.5, 0.8, $lihat['subcategory'], 1, 0,'C');
 $pdf->Cell(9, 0.8, $lihat['complaintDetails'], 1, 0,'C');
 $pdf->Cell(4.5, 0.8, $lihat['regDate'],1, 0, 'C');
 $pdf->Cell(4.5, 0.8, $lihat['lastUpdationDate'],1, 0, 'C');
 $pdf->Cell(2, 0.8, $lihat['status'], 1, 1,'C');

 $no++;
}
$pdf->ln(1);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40.5,0.7,"Approve",0,10,'C');

$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40.5,0.7,"Technician Name",0,10,'C');
// Nama file ketika di print
$pdf->Output("laporan_all.pdf","I");

?>