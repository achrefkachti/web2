<?php

class Livreur
{

	private $nom;
    private $mail;
    private $dateA;
    private $tel;
    private $permis;
    
    function __construct($nom,$mail,$tel,$permis,$dateA)
    {
    	$this->nom=$nom;
        $this->mail=$mail;
        $this->tel=$tel;
         $this->permis=$permis;
        $this->dateA=$dateA;
       
        
    }

    function getnom() {return $this->nom ;}
    function getemail() {return $this->mail;}
    function getdate(){return $this->dateA;}
    function gettel() {return $this->tel;}
    function getpermis() {return $this->permis;}
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
    private $card;
 
    private $code;
    
    function __construct($nomC,$mailC,$telC,$card,$code)
    {
        $this->nomC=$nomC;
        $this->mailC=$mailC;
        $this->telC=$telC;
         $this->card=$card;
        $this->code=$code;
       
        
    }

    function getnom() {return $this->nomC ;}
    function getemailC() {return $this->mailC;}
    function gettelC() {return $this->telC;}
function getcard() { return $this->card;}
function getcode() {return $this->code;}
}

?>