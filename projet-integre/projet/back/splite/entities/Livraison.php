<?php

class Livreur
{

	private $nom;
    private $mail;
    private $tel;
    private $permis;
		private $dateA;
private $idv;
    function __construct($idv,$nom)
    {
    	$this->nom=$nom;
			$this->idv=$idv;



    }

    function getnom() {return $this->nom ;}
    function getemail() {return $this->mail;}
    function getdate(){return $this->dateA;}
    function gettel() {return $this->tel;}
    function getpermis() {return $this->permis;}
		  function getidv() {return $this->idv;}
     function setnom() {$this->nom=$nom ;}
     function setemail() {$this->mail=$mail;}
 function setdate() {$this->dateA=$dateA;}
 function settel(){$this->tel=$tel;}
 function setpermis(){$this->permis=$permis;}
}



class Livraison
{

	private $nomC;
    private $mailC;
    private $telC;
    private $town;
    private $state;
    private $zip;

    function __construct($nomC,$mailC,$telC,$town,$state,$zip)
    {
    	$this->nomC=$nomC;
        $this->mailC=$mailC;
        $this->telC=$telC;
         $this->town=$town;
        $this->state=$state;
        $this->zip=$zip;

    }

    function getnom() {return $this->nomC ;}
    function getemailC() {return $this->mailC;}
    function gettelC() {return $this->telC;}
function gettown() { return $this->town;}
function getstate() {return $this->state;}
function getzip() { return $this->zip;}
}

?>
