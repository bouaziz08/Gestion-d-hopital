<?php
require('fpdf184/fpdf.php');
include("connection.php");

$pdf=new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->Image('synaose.jpg',50,0,100,100);
$pdf->Ln(80);
$pdf->SetFont('Arial','B',16);
$pdf->setTextColor(252,3,3);

$pdf->Cell(100,10,'My Appointement',"0","1","R");
$pdf->Line(10,100,200,100);
$pdf->Ln(8);

$pdf->setTextColor(0,0,0);

$pdf->SetFont('Arial','',12);
$pdf->Cell(15,10,"AppID","1","0");
$pdf->Cell(40,10,"Date","1","0");
$pdf->Cell(40,10,"Time","1","0");
$pdf->Cell(42,10,"Doctor","1","0");
$pdf->Cell(10,10,"PID","1","0");
$pdf->Cell(30,10,"Name","1","0");
$pdf->Cell(22,10,"CIN","1","1");	

$pdf->Image('qr-code.png',75,150,50,50);
if(isset($_POST['id_appointement'])){	

	$id = $_POST['id_appointement'];
	$query="SELECT * FROM appointement where id_appointement ='$id'";
	$res=mysqli_query($conn,$query);
		while ($data = mysqli_fetch_array($res)) {
				$pdf->Cell(15,10,$data['id_appointement'],"1","0");
				$pdf->Cell(40,10,$data['date'],"1","0");
				$pdf->Cell(40,10,$data['timeslot'],"1","0");
				$pdf->Cell(42,10,$data['name_doctor'],"1","0");
				$pdf->Cell(10,10,$data['id_patient'],"1","0"); 
				$pdf->Cell(30,10,$data['name'],"1","0");
				$pdf->Cell(22,10,$data['CIN'],"1","1");	
				
		}
	}
	

	



	$pdf->Output();

?>