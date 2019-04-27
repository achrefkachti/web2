<?PHP
include "../core/formulaireC.php";
$formulaire1C=new FormulaireC();
$listeFormulaires2=$formulaire1C->afficherFormulaires2();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>email</td>
<td>telephone</td>
<td>categorie</td>
<td>reference</td>
<td>date</td>
<td>quantite</td>
<td>demande</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeFormulaires as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['teleph']; ?></td>
	<td><?PHP echo $row['catg']; ?></td>
	<td><?PHP echo $row['ref']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['quant']; ?></td>
	<td><?PHP echo $row['demande']; ?></td>
    <td><form method="POST" action="supprimerFormulaire.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierFormulaire.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


