<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['nom']) and isset($_POST['refe']) and isset($_POST['couleur']) and  isset($_POST['quantite'])and  isset($_POST['prix'])and  isset($_POST['img'])){
$produit1=new  produit($_POST['nom'],$_POST['refe'],$_POST['couleur'],$_POST['quantite'],$_POST['prix'],$_POST['img']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$produit1C=new ProduitC();
$produit1C-> ajouterProduit($produit1);
header('Location: principal.php');
	
}
else{
	echo "thabet aaysh khouya  ";
}
?>


