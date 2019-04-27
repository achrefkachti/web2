<?php 
include 'dbconfig.php';
class Client{
	private $adresse;
    private $password;
	private $prenom;
    public $conn;	

	public function __construct($adresse,$password,$conn)
	{
		$this->adresse=$adresse;
		$this->password=$password;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->adresse;
	}
    function getPWD()
	{
		return $this->password;
		
	}
	function getPrenom()
	{
		return $this->prenom;
		
	}

	public function Logedin($conn,$adresse,$password)
	{
		$req="select * from clients where adresse='$adresse' && password='$password'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>