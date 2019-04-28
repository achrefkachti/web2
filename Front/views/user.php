<?php 
include 'dbconfig.php';
class User{
	private $username;
    private $pwd;
	private $role;
    public $conn;	

	public function __construct($username,$pwd,$conn)
	{
		$this->username=$username;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getUser()
	{
		return $this->username;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$username,$pwd)
	{
		$req="select * from clients where username='$username' && password='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>