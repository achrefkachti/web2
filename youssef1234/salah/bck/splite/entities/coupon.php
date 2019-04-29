<?php 
class coupon
{
	private $idc;
	private $valeur;
	private $nomc;
	private $dateA;
	private $dateE;
	private $etat;

	function __construct($nomc,$valeur,$dateE)
	{
		
		$this->nomc=$nomc;
		$this->valeur=$valeur;
		$this->dateA=date("Y-m-d");
		$this->dateE=$dateE;
		$this->etat=0;

	}

    function getnomc() {return $this->nomc ;}
    function getvaleur() {return $this->valeur ;}
    function getdateE() {return $this->dateE ;}
    function getdateA() {return $this->dateA ;}
    function getetat() {return $this->etat ;}

    function setnomc($nomc) {$this->nomc=$nomc ;}
    function setvaleur($valeur) {$this->valeur=$valeur ;}
    function setdateE($dateE) {$this->dateE=$dateE ;}
    function setetat($etat) {$this->etat=$etat ;}


}


 ?>