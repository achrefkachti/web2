<?php

class etoile
{

	private $idetoile;
    private $nbetoile;
    private $refe;
    private $username;
    
    function __construct($idetoile,$refe,$username,$nbetoile)
    {
    	$this->idetoile=$idetoile;
        $this->refe=$refe;
        $this->username=$username;
         $this->nbetoile=$nbetoile;
       
        
    }

    function getnom() {return $this->idetoile ;}
    function getemailC() {return $this->refe;}
    function gettelC() {return $this->username;}
function getcard() { return $this->nbetoile;}
}

?>