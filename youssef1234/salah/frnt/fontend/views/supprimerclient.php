<?PHP
include "../core/clientC.php";
$clientC=new clientC();
if (isset($_POST["id"])){
	$clientC->supprimerClient($_POST["id"]);
echo "<META http-equiv='refresh' content='0;URL=editable.php'>";
}

?>