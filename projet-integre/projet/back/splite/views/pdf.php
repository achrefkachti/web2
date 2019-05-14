<?php
require('fpdf/fpdf.php');
include "../core/LivreurC.php";
include "../entities/Livreur.php";

$panier1C=new LivreurC();
$listelivreur=$panier1C->afficherLivreur();
$panierC=new LivreurC();
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',30);
$pdf->Cell(60	,5,'',0,0);
$pdf->Cell(100,5,0,0);
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);
//Cell(width , height , text , border , end line , [align] )
$pdf->Cell(130	,20,'',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);
$pdf->Cell(130	,5,' ',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$date= date('Y-m-d');
$pdf->Cell(5	,5,$date,0,1);//end of line
$pdf->Cell(130	,5,'Phone       ',0,0);
$pdf->Cell(130	,5,'Fax         ',0,0);
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,30,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50	,5,'nom',1,0);
$pdf->Cell(50	,5,'mail',1,0);
$pdf->Cell(50	,5,'tel',1,0);
$pdf->Cell(30	,5,'date',1,0);//end of line

$pdf->Cell(30	,5,'permis',1,1);//end of line

foreach ($listelivreur as $row) {
	$nom=$row['nom'];
	$mail=$row['mail'];
	$tel=$row['tel'];
	$pdf->Cell(50 ,5,$nom,1,0);
	$pdf->Cell(50 ,5,$mail ,1,0);
	$pdf->Cell(50 ,5,$tel ,1,0);
	$pdf->Cell(50 ,5,$date ,1,0);

}


$pdf->Output();
?>
