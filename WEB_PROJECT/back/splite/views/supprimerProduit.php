<?PHP
include "../core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["refe"])){
	$produitC->supprimerProduit($_POST["refe"]);
	header('Location: principal.php');
}

?>