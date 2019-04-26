<?PHP
include "../core/commentC.php";
include "../config.php";
$commentC=new commentC();


if (isset($_POST["id"])){
	$mes=$commentC->supprimercomment($_POST["id"]);
}

?>