<?PHP
class Produit{
	private $nom;
	private $refe;
	private $couleur;
	private $quantite;
	private $prix;
	private $img;
	
	
	function __construct($nom,$refe,$couleur,$quantite,$prix,$img){
		$this->nom=$nom;
		$this->refe=$refe;
		$this->couleur=$couleur;
		$this->quantite=$quantite;
		$this->prix=$prix;
		$this->img=$img;
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
	function getImg(){
		return $this->img;
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
	function setImg($img){
		$this->img=$img;
	}

	
}

?>