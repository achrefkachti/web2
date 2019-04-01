<?php 
class panier
{
	private $idp;
	private $idcl;
	private $nomprod;
	private $nomcl;
	private $dateP;
	private $quantite;
	private $prix;
	private $total;

	function __construct($idcl,$nomcl,$nomprod,$quantite,$prix)
	{	
		$this->idcl=$idcl;
		$this->nomcl=$nomcl;
		$this->nomprod=$nomprod;
		$this->quantite=$quantite;
		$this->dateP=date("Y-m-d");
		$this->prix=$prix;
		$this->total=$prix * $quantite;


	}
    function getidp() {return $this->idp ;}
    function getidcl() {return $this->idcl ;}
    function getnomcl() {return $this->nomcl ;}
    function getnomprod() {return $this->nomprod ;}
    function getqt() {return $this->quantite ;}
    function getprix() {return $this->prix ;}
    function gettot() {return $this->total ;}
    function getdateP() {return $this->dateP ;}

    function setidc($idcl) {$this->idcl=$idcl ;}
    function setnomcl($nomcl) {$this->nomcl=$nomcl ;}
    function setnomprod($nomprod) {$this->nomprod=$nomprod ;}
    function setqt($quantite) {$this->quantite=$quantite ;}   
    function setprix($prix) {$this->prix=$prix ;}


}


 ?>