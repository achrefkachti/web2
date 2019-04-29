<?PHP
class Carte{
	private $id;
	private $code;
	private $delai;
	function __construct($id,$code,$delai){
		$this->id=$id;
		$this->code=$code;
		$this->delai=$delai;
	}
	
	function getId(){
		return $this->id;
	}
	function getCode(){
		return $this->code;
	}
	function getDelai(){
		return $this->delai;
	}
	
       

	function setId($id){
		$this->id=$id;
	}
	function setCode($code){
		$this->code;
	}
	function setDelai($delai){
		$this->delai=$delai;
	}
	
}

?>