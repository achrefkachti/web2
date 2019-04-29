<?PHP
include "../core/clientC.php";
$client1C=new clientC();
$listeClients=$client1C->afficherClient();

//var_dump($listeClients->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>Nom</td>
<td>Prenom</td>
<td>adresse</td>
<td>password</td>
<td>telephone</td>
<td>date</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeClients as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td>
		<form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	
	<?PHP
}
?>
</table>


