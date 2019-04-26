<?php

class comment
{
    private $contenu;
    private $utilisateur;
    
    function __construct($utilisateur,$contenu)
    {
        $this->utilisateur=$utilisateur;
        $this->contenu=$contenu;
    }

    function getutilisateur() {return $this->utilisateur ;}
    function getcontenu() {return $this->contenu ;}
    function setutilisateur($utilisateur){
        $this->utilisateur=$utilisateur;
    }
}

?>