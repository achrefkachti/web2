<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if ( isset($_POST['refe']) and isset($_POST['description']) and  isset($_POST['affichage'])){
$categorie1=new  categorie($_POST['refe'],$_POST['description'],$_POST['affichage']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new CategorieC();
$categorie1C-> ajouterCategorie($categorie1);
header('Location: categorieprinc.php');
	
}else{
	echo "thabet aaysh khouya  ";
}
?> 
