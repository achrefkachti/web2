<?PHP
include "../core/categorieC.php";
$categorieC=new CategorieC();
if (isset($_POST["refe"])){
	$categorieC->supprimerCategorie($_POST["refe"]);
	header('Location: categorieprinc.php');
}

?>