<?PHP
include "../core/suivieC.php";
$suivieC=new SuivieC();
if (isset($_POST["cin"])){
	$suivieC->supprimerSuivie($_POST["cin"]);
	//header('Location: ajouterSuivie.php');
	
	?>
	<script type="text/javascript">
		alert ("Suppression avec succés")
	</script>
	<?PHP 
	
	echo "<META http-equiv='refresh' content='0;URL=ajouterSuivie.php'>";
}

?>

