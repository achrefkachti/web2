<?php

class Livraison
{
private $username;
	private $nomC;
    private $mailC;
    private $telC;
    
    private $date;
    
    private $town;
    private $state;
    private $zip;
    
    function __construct($username,$nomC,$mailC,$telC,$town,$state,$zip)
    {
    	$this->username=$username;
        $this->nomC=$nomC;
        $this->mailC=$mailC;
        $this->telC=$telC;
       
        
        $this->town=$town;
        $this->state=$state;
        $this->zip=$zip;
       
        
    }
function getusername() {return $this->username ;}
    function getnom() {return $this->nomC ;}
    function getemailC() {return $this->mailC;}
    function gettelC() {return $this->telC;}


function gettown() {return $this->town;}
function getstate() {return $this->state;}
function getzip() {return $this->zip;}
}

?>