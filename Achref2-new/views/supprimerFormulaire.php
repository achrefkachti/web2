<?PHP
include "../core/formulaireC.php";
$formulaireC=new FormulaireC();
if (isset($_POST["id"])){
	$formulaireC->supprimerFormulaire($_POST["id"]);
	//header('Location: afficherFormulaire.php');
	?>
	<script type="text/javascript">
		alert ("Suppression avec succés")
	</script>
	<?PHP
	echo "<META http-equiv='refresh' content='0;URL=supprimerFormulaire1.php'>";
}

?>


