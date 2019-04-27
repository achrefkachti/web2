<?PHP
class Suivie{
	private $id;
	private $cin;
	private $exam;
	private $remb;
	private $dat;
	
	function __construct($id,$cin,$exam,$remb,$dat){
		$this->id=$id;
		$this->cin=$cin;
		$this->exam=$exam;
		$this->remb=$remb;
		$this->dat=$dat;
		
	}
	function getId(){
		return $this->id;
	}
	function getCin(){
		return $this->cin;
	}
	function getExam(){
		return $this->exam;
	}
	function getRemb(){
		return $this->remb;
	}
	function getDat(){
		return $this->dat;
	}
	

	function setCin($cin){
		$this->cin=$cin;
	}
	function setExam($exam){
		$this->exam=$exam;
	}
	function setRemb($remb){
		$this->remb=$remb;
	}
	function setDat($dat){
		$this->dat=$dat;
	}
	

}

?>