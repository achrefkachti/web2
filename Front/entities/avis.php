<?PHP
class Avis{
	private $id;
	private $avis;
	private $user;
	;
	function __construct($id,$avis,$user){
		$this->id=$id;
		$this->avis=$avis;
		$this->user=$user;
		
	}
	
	function getId(){
		return $this->id;
	}
    function getAvis(){
		return $this->avis;
	}
	function getUser(){
		return $this->user;
	}
	

	
	function setAvis($avis){
		$this->avis=$avis;
	}
	function setUser($user){
		$this->user=$user;
	}
	

}

?>