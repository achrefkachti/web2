<?php 
include 'dbconfig.php';
class User{
	private $username;
    private $password;
	private $role;
    public $conn;	

	public function __construct($username,$password,$conn)
	{
		$this->username=$username;
		$this->password=$password;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->username;
	}
    function getPWD()
	{
		return $this->password;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$username,$password)
	{
		$req="select * from clients where username='$username' && password='$password'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>