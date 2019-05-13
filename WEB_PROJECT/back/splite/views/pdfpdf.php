<?php 
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=web','root','');

class myPDF extends FPDF{
    function header(){
        //$this->image('logo.png',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'FORMULAIRES DOCUMENTS',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'Street Address of Office',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'cin',1,0,'C');
        $this->Cell(30,10,'nom',1,0,'C');
        $this->Cell(30,10,'prenom',1,0,'C');
        $this->Cell(55,10,'email',1,0,'C');
        $this->Cell(25,10,'teleph',1,0,'C');
        $this->Cell(25,10,'catg',1,0,'C');
        $this->Cell(18,10,'ref',1,0,'C');
        $this->Cell(30,10,'date',1,0,'C');
        $this->Cell(15,10,'quant',1,0,'C');
        $this->Cell(35,10,'demande',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('select * from formulaire');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(20,10,$data->cin,1,0,'C');
            $this->Cell(30,10,$data->nom,1,0,'C');
            $this->Cell(30,10,$data->prenom,1,0,'C');
            $this->Cell(55,10,$data->email,1,0,'C');
            $this->Cell(25,10,$data->teleph,1,0,'C');
            $this->Cell(25,10,$data->catg,1,0,'C');
            $this->Cell(18,10,$data->ref,1,0,'C');
            $this->Cell(30,10,$data->date,1,0,'C');
            $this->Cell(15,10,$data->quant,1,0,'C');
            $this->Cell(35,10,$data->demande,1,0,'C');
            $this->Ln();
        }
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();