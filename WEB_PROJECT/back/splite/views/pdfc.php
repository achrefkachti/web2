

<?php
require('fpdf/fpdf.php');

include "../core/produitC.php";
include "../entities/produit.php";

$pdf=new FPDF();
$produitC=new ProduitC();
$listeProduits=$produitC->afficherProduits();





                 foreach($listeProduits as $row){

 $n=$row['nom']; 
 $t=$row['refe']; 
$m=$row['couleur'];  
 $c=$row['categorie']; 
  $d=$row['marque']; 
  $q=$row['quantite']; 
  $p=$row['prix']; 
$i=$row['img']; 






$pdf->addPage();
$pdf->SetFont("Arial","B","40");
$pdf->Cell(70,10,"Bienvenue a Ariana Scooter",0,1,"Center"); 
$pdf->Cell(70,10,"",0,1,"Center"); 

$pdf->SetFont("Arial","B","25");
$pdf->Cell(130,10,"PDF FicheProduit   2018/2019",1,1,"Center"); 
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->SetFont("Arial","B","20"); 
$pdf->write( 5 , " Produit :");
$pdf->SetFont("Arial","B","15");
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " Nom  :".$n);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " refe  :".$t);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " couleur :".$m);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " categorie  :".$c);
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->write( 5 , " marque :".$d);
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->write( 5 , " quantite  :".$q);
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->write( 5 , " prix :".$p);
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->write( 5 , " img :".$i);
  } 
$pdf->output();
?>