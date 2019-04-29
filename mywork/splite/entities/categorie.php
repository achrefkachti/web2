<?PHP
class Categorie{
	
	private $refe;
	private $description;
	private $affichage;
	
	function __construct($refe,$description,$affichage){

		$this->refe=$refe;
		$this->description=$description;
		$this->affichage=$affichage;
	}
	

	function getRefe(){
		return $this->refe;
	}
	function getDescription(){
		return $this->description;
	}
	function getAffichage(){
		return $this->affichage;
	}


	
	function setCouleur($description){
		$this->description=$description;
	}
	function setAffichage($affichage){
		$this->affichage=$affichage;
	}
	
	
}

?>