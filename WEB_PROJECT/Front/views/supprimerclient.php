<?PHP
session_start();
include "../core/clientC.php";
$clientC=new clientC();
if (isset($_SESSION['username'])){
	$clientC->supprimerClient($_SESSION['username']);
echo "<META http-equiv='refresh' content='0;URL=login.html'>";
}

?>