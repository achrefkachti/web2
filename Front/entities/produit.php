<?PHP
class Produit{
	private $nom;
	private $refe;
	private $couleur;
	private $quantite;
	private $prix;
	
	function __construct($nom,$refe,$couleur,$quantite,$prix){
		$this->nom=$nom;
		$this->refe=$refe;
		$this->couleur=$couleur;
		$this->quantite=$quantite;
		$this->prix=$prix;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getRefe(){
		return $this->refe;
	}
	function getCouleur(){
		return $this->couleur;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getPrix(){
		return $this->prix;
	}


	function setNom($nom){
		$this->nom=$nom;
	}
	function setCouleur($couleur){
		$this->couleur;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	
}

?>