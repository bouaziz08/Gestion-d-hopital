<?php
require('fpdf184/fpdf.php');
include("connection.php");

$pdf=new FPDF('P','mm','A4');


$pdf->AddPage();
$pdf->Image('synaose.jpg',50,0,100,100);
$pdf->Ln(80);

$pdf->SetFont('Arial','B',16);
$pdf->Image('qr-code.png',120,210,40,40);

if (isset($_POST['id_patient'])) {
	

	$id = $_POST['id_patient'];
	$query="SELECT id_patient,name_doctor,name,dateconsultation,diagnostique FROM dossiermedicale where id_patient ='$id'";
	$res=mysqli_query($conn,$query);
		while ($data = mysqli_fetch_array($res)) {
				$pdf->cell(50,10,"ID",0,0);
				$pdf->Cell(50,10,$data['id_patient'],"0","0");
				$pdf->Line(10,100,200,100);
				$pdf->Ln(10);
				$pdf->cell(50,10,"Name doctor",0,0);
				$pdf->Cell(50,10,$data['name_doctor'],"0","0");
				$pdf->Line(10,110,200,110);
				$pdf->Ln(10);
				$pdf->cell(50,10,"Name",0,0);
				$pdf->Cell(50,10,$data['name'],"0","0");
				$pdf->Line(10,120,200,120);
				$pdf->Ln(10);
				$pdf->cell(50,10,"Date",0,0);
				$pdf->Cell(50,10,$data['dateconsultation'],"0","0");
				$pdf->Line(10,130,200,130);
				$pdf->Ln(25);

				$pdf->cell(50,10,"Diagnostique:",0,0);
				$pdf->Ln(10);
				$pdf->Cell(100,10,$data['diagnostique'],"0","1");	
				
				$pdf->Ln(10);

				
		

	}
}
$pdf->Ln(90);
$pdf->cell(50,10,"Signature",0,0);
$pdf->Line(10,275,40,275);
$pdf->Output();
		


?>