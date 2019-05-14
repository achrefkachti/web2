<?PHP
include "../core/avisC.php";
$avisC=new AvisC();
if (isset($_POST["id"])){
	$avisC->supprimerAvis($_POST["id"]);
	//header('Location: afficherFormulaire.php');
	?>
	<script type="text/javascript">
		alert ("Suppression avec succés")
	</script>
	<?PHP
	echo "<META http-equiv='refresh' content='0;URL=gererAvis.php'>";
}

?>