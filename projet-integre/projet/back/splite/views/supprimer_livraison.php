<?php
include "../core/LivraisonC.php";

$LivraisonC = new LivraisonC();
if (isset($_POST["idv"]))
	{

	$LivraisonC->supprimerLivraison($_POST["idv"]);
	header('Location:livraison.php');
}

?>
