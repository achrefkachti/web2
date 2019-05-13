<?php
include "../core/LivraisonC.php";

$LivreurC=new LivreurC();
if (isset($_POST["idl"]))
	{

	$LivreurC->supprimerLivreur($_POST["idl"]);
	header('location:livreur.php');
}

?>
