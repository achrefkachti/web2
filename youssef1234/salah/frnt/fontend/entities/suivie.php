<?PHP
class Suivie{
	private $cin;
	private $exam;
	private $remb;
	private $dat;
	
	function __construct($cin,$exam,$remb,$dat){
		$this->cin=$cin;
		$this->exam=$exam;
		$this->remb=$remb;
		$this->dat=$dat;
		
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