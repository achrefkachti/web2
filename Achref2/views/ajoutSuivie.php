<?PHP
include "../entities/suivie.php";
include "../core/suivieC.php";


if (isset($_POST['cin']) and isset($_POST['exam']) and isset($_POST['remb']) and isset($_POST['dat'])){
$suivie1=new suivie($_POST['cin'],$_POST['exam'],$_POST['remb'],$_POST['dat']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$suivie1C=new SuivieC();
$suivie1C->ajouterSuivie($suivie1);
//header('Location: afficherFormulaire.php');
echo "<META http-equiv='refresh' content='0;URL=ajouterSuivie.php'>";
    ?>
    <script type="text/javascript">
		alert ("Ajout avec succés")
	</script>
	<?PHP
	
}else{
	echo "<META http-equiv='refresh' content='0;URL=ajouterSuivie.php'>";
}
//*/

?>