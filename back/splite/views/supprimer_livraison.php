<?php
include "../core/personneC.php";

$LivraisonC = new LivraisonC();
if (isset($_POST["code"]))
	{

	$LivraisonC->supprimerLivraison($_POST["code"]);
	header('Location:livraison.php');
}

?>
