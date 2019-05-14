<?php
include "../entities/Livraison.php" ;
include "../core/LivraisonC.php" ;


if(isset($_GET['nomm'])&&isset($_GET['idvv']))
{
	$idv=$_GET['idvv'];
	$nom=$_GET['nomm'];
		$p=new Livreur($idv,$nom);

		$LivreurC=new LivreurC();
		$mes=$LivreurC->ajouter($p);
			header('location:livreur.php');
		if ($mes==true)
		{
			echo "ajout avec succees";
		}

	}
else {
	header('location:livreur.php');
}


?>
