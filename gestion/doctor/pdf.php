<?php
include("connection.php");
require('fpdf184/fpdf.php');


$pdf=new FPDF('P','mm','A4');

if (isset($_POST['make'])) {
	
	$id_patient = $_POST['id_patient'];

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);

$pdf->Cell(30,10,'ID:',1,0);

$pdf->Output();
}
?>