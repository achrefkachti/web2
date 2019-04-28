<?php

class wish
{
	private $idw;
	private $idcl;
	private $nomprod;
	private $prix;
	private $img;

	function __construct($idcl,$nomprod,$prix,$img)
	{	
		$this->idcl=$idcl;
		$this->nomprod=$nomprod;
		$this->prix=$prix;
		$this->img=$img;


	}
    function getidw() {return $this->idw ;}
    function getidcl() {return $this->idcl ;}
    function getnomprod() {return $this->nomprod ;}
    function getimg() {return $this->img ;}
    function getprix() {return $this->prix ;}

    function setnomprod($nomprod) {$this->nomprod=$nomprod ;}


}