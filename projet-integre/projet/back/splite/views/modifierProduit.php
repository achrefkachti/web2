<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['refe'])){
	$produitC=new ProduitC();
    $result=$produitC->recupererProduit($_GET['refe']);
	foreach($result as $row){
		$nom=$row['nom'];
		$refe=$row['refe'];
		$couleur=$row['couleur'];
		$quantite=$row['quantite'];
		$quantite=$row['prix'];
		
?> 
<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Refe</td>
<td><input  readonly type="number" name="refe" value="<?PHP echo $_GET['refe']?>"></td>
</tr>
<tr>
<td>Couleur</td>
<td><input type="text" name="couleur" value="<?PHP echo $couleur?>"></td>
</tr>
<tr>
<td>Quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>

<tr>
<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="refe_ini" value="<?PHP echo $_GET['refe'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit( $_POST['nom'],$_POST['refe'],$_POST['couleur'],$_POST['quantite'],$_POST['prix']  );
	$produitC->modifierProduit($produit,$_POST['refe_ini']);
	echo $_POST['refe_ini'];
	//header('Location: principal.php');
}
?>
</body>
</HTMl>