<?PHP
class Produit{
	private $nom;
	private $refe;
	private $couleur;
	private $categorie;
	private $marque;
	private $quantite;
	private $prix;
	private $img;
	
	
	function __construct($nom,$refe,$couleur,$categorie,$marque,$quantite,$prix,$img){
		$this->nom=$nom;
		$this->refe=$refe;
		$this->couleur=$couleur;
		$this->categorie=$categorie;
		$this->marque=$marque;
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
	
		function getCategorie(){
		return $this->categorie;
	}
		function getMarque(){
		return $this->marque;
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
	function setType($categorie){
		$this->categorie;
	}
	function setMarque($marque){
		$this->marque;
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