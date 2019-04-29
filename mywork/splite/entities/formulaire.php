<?PHP
class Formulaire{
	private $cin;
	private $nom;
	private $prenom;
	private $email;
	private $teleph;
	private $catg;
	private $ref;
	private $date;
	private $quant;
	private $demande;
	function __construct($cin,$nom,$prenom,$email,$teleph,$catg,$ref,$date,$quant,$demande){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->teleph=$teleph;
		$this->catg=$catg;
		$this->ref=$ref;
		$this->date=$date;
		$this->quant=$quant;
		$this->demande=$demande;
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
	function getEmail(){
		return $this->email;
	}
	function getTelephone(){
		return $this->teleph;
	}
	function getCategorie(){
		return $this->catg;
	}
	function getReference(){
		return $this->ref;
	}
	function getDate(){
		return $this->date;
	}
	function getQuantite(){
		return $this->quant;
	}
	function getDemande(){
		return $this->demande;
	}

	
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setTelephone($teleph){
		$this->teleph=$teleph;
	}
	function setCategorie($catg){
		$this->catg=$catg;
	}
	function setReference($reference){
		$this->reference=$reference;
	}
	function setDate($date){
		$this->date=$date;
	}
	function setQuantite($quant){
		$this->quantite=$quantite;
	}
	function setDemande($demande){
		$this->demande=$demande;
	}

}

?>