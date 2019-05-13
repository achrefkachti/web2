<?PHP
include "../core/pictureC.php";
$pictureC=new pictureC();



	$lik=$_POST["likes"]+1;
	$mes=$pictureC->increment_like($_POST["schemaa"],$lik);

?>