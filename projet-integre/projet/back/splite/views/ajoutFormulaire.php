<?PHP
include "../entities/formulaire.php";
include "../core/formulaireC.php";
session_start();

if (strlen($_POST['cin'])!=8)
{
	?>
	<script type="text/javascript">
		alert ("Verifiez votre Catre d identite svp")
	</script>
	<?PHP
	echo "<META http-equiv='refresh' content='0;URL=ajouterFormulaire.php'>";
}

else if (strlen($_POST['teleph'])!=8) 
{
	?>
	<script type="text/javascript">
		alert ("Verifiez votre Numero de Telephone svp")
	</script>
	<?PHP
	echo "<META http-equiv='refresh' content='0;URL=ajouterFormulaire.php'>";
}


else if ( ($_POST['email'])!= $_SESSION['l'] ) 
{
	?>
	<script type="text/javascript">
		alert ("Verifiez votre Adresse Email svp")
	</script>
	<?PHP
	echo "<META http-equiv='refresh' content='0;URL=ajouterFormulaire.php'>";
}


else if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['teleph']) and isset($_POST['catg']) and isset($_POST['ref']) and isset($_POST['date']) and isset($_POST['quant']) and isset($_POST['demande'])){
$formulaire1=new formulaire($_POST['id'],$_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['teleph'],$_POST['catg'],$_POST['ref'],$_POST['date'],$_POST['quant'],$_POST['demande']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$formulaire1C=new FormulaireC();
$formulaire1C->ajouterFormulaire($formulaire1);
//header('Location: afficherFormulaire.php');
echo "<META http-equiv='refresh' content='0;URL=ajouterFormulaire.php'>";
    ?>
	<script type="text/javascript">
		alert ("Ajout avec succés")
	</script>
	<?PHP
	
}else{
	echo "<META http-equiv='refresh' content='0;URL=ajouterFormulaire.php'>";
}
//*/

?>