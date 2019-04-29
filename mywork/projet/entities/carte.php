<?PHP
class Carte{
	private $cin;
	private $confirme;
	private $username;
	private $nom;
	private $prenom;
	function __construct($username,$nom,$prenom,$cin,$confirme){
		
		$this->username=$username;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->confirme=$confirme;
	}
	function getConfirme(){
		return $this->confirme;
	}

	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getUser(){
		return $this->username;
	}
	
	
       
function setConfirme($confirme){
		$this->confirme=$confirme;
	}
		function setUser($username){
		$this->username=$username;
	}
	function setCin($cin){
		$this->cin=$cin;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	
}

?>