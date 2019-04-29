<?PHP
include "../core/carteC.php";
$carteC=new carteC();
if (isset($_POST["id"])){
	$carteC->supprimerCarte($_POST["id"]);
echo "<META http-equiv='refresh' content='0;URL=editcarte.php'>";
}

?>