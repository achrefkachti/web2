<?php 
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=web','root','');

class myPDF extends FPDF{
    function header(){
        //$this->image('logo.png',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'les Comptes',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'Tableau des clients',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'id',1,0,'C');
        $this->Cell(30,10,'username',1,0,'C');
        $this->Cell(55,10,'nom',1,0,'C');
        $this->Cell(30,10,'prenom',1,0,'C');
        
        $this->Cell(50,10,'adresse',1,0,'C');
        $this->Cell(50,10,'telephone',1,0,'C');
        
        $this->Cell(40,10,'password',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('select * from clients');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(20,10,$data->id,1,0,'C');
            $this->Cell(30,10,$data->username,1,0,'C');
            $this->Cell(55,10,$data->nom,1,0,'C');
            $this->Cell(30,10,$data->prenom,1,0,'C');
            $this->Cell(50,10,$data->adresse,1,0,'C');
            $this->Cell(50,10,$data->telephone,1,0,'C');
            
            $this->Cell(40,10,$data->password,1,0,'C');
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