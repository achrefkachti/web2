<?PHP
include "../core/suivieC.php";
$suivieC=new SuivieC();
if (isset($_POST["id"])){
	$suivieC->supprimerSuivie($_POST["id"]);
	//header('Location: ajouterSuivie.php');
	
	?>
	<script type="text/javascript">
		alert ("Suppression avec succés")
	</script>
	<?PHP 
	
	echo "<META http-equiv='refresh' content='0;URL=ajouterSuivie.php'>";
}

?>

