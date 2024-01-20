<?php
require('fpdf184/fpdf.php');
include("connection.php");

$sql1 = "SELECT dateconsultation,diagnostique,name,name_doctor FROM dossiermedicale WHERE id_patient = id";
$resul = mysqli_query($conn,$sql1);
while ($diag = mysqli_fetch_assoc($resul)) {
	
	$name = $diag['name'];
	$doctor = $diag['name_doctor'];
	$date = $diag['dateconsultation'];
	$diagnostique = $diag['diagnostique'];
}

$pdf=new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',18);
$pdf->setTextColor(252,3,3);
$pdf->Cell(100,10,'My Ordonance',"0","1","C");


$k = 9;
$var = "";
$pdf->Ln(10);
$pdf->setTextColor(0,0,0);

$pdf->SetFont('Arial','',14);
$pdf->Write($k , $var . "name :");
$pdf->Write($k , $name."\n");


$pdf->Output();

?>