<?PHP
session_start();
include "../core/carteC.php";
include "../config.php";
$carteC=new carteC();
if (isset($_SESSION['username'])){
	$carteC->supprimerCarte($_SESSION['username']);
echo "<META http-equiv='refresh' content='0;URL=inde.php'>";
}

?>