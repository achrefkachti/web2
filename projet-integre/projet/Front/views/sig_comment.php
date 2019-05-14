<?PHP
include "../core/commentC.php";
include "../config.php";

$commentC=new commentC();



	$mes=$commentC->signaler($_POST["id"]);

?>