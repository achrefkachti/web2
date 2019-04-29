<?php

class Livraison
{

	private $nomC;
    private $mailC;
    private $telC;
    private $card;
    private $date;
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