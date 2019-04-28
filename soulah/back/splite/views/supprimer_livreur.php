<?php
include "../core/personneC.php";

$LivreurC=new LivreurC();
if (isset($_POST["mailc"]))
	{

	$LivreurC->supprimerLivreur($_POST["mailc"]);
	header('Location:Livreur.php');
}

?>
