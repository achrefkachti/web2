

<?php
require('fpdf/fpdf.php');

include "../core/panierC.php";
include "../entities/panier.php";

$pdf=new FPDF();
$panierC=new panierC();
$liste=$panierC->afficherprod();





                 foreach($liste as $row){

 $n=$row['nomprod']; 
 $t=$row['idp']; 
$m=$row['quantite'];  
 $c=$row['prix']; 







$pdf->addPage();
$pdf->SetFont("Arial","B","40");
$pdf->Cell(70,10,"Facture Panier",0,1,"Center"); 
$pdf->Cell(70,10,"",0,1,"Center"); 

$pdf->SetFont("Arial","B","25");
$pdf->Cell(130,10,"PDF FicheClient   2018/2019",1,1,"Center"); 
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->SetFont("Arial","B","20"); 
$pdf->write( 5 , " Nom produit :".$n);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " Reference  :".$t);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " Quantite  :".$m);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " Prix :".$c);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->Cell(70,10,"",0,1,"Center");
  } 
$pdf->output();
?>