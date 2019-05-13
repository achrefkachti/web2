<?php

class trans
{
	private $idt;
	private $idcl;
	private $nomcl;
	private $dateT;
	private $total;

	function __construct($idcl,$nomcl,$total)
	{	
		$this->idcl=$idcl;
		$this->nomcl=$nomcl;
		$this->dateT=date("Y-m-d");
		$this->total=$total;


	}
    function getidt() {return $this->idt ;}
    function getidcl() {return $this->idcl ;}
    function getnomcl() {return $this->nomcl ;}
    function gettot() {return $this->total ;}
    function getdateT() {return $this->dateT ;}

    function setidc($idcl) {$this->idcl=$idcl ;}
    function setnomcl($nomcl) {$this->nomcl=$nomcl ;}


}