<?PHP
include "../core/formulaireC.php";
$formulaireC=new FormulaireC();
if (isset($_POST["cin"])){
	$formulaireC->supprimerFormulaire($_POST["cin"]);
	//header('Location: afficherFormulaire.php');
	?>
	<script type="text/javascript">
		alert ("Suppression avec succés")
	</script>
	<?PHP
	echo "<META http-equiv='refresh' content='0;URL=supprimerFormulaire.html'>";
}

?>