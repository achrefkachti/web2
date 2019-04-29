<?PHP
include "../core/carteC.php";
$carte1C=new carteC();
$listeCartes=$carte1C->afficherCarte();

//var_dump($listeClients->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>code</td>
<td>delai</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCartes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['code']; ?></td>
	<td><?PHP echo $row['delai']; ?></td>
	<td>
		<form method="POST" action="supprimercarte.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	
	<?PHP
}
?>
</table>


