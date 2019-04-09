<?php
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_POST['idcl']) && isset($_POST['nomcl']) && isset($_POST['nomprod']) && isset($_POST['quantite'])&& isset($_POST['prix']))
{

$panier=new panier($_POST['idcl'],$_POST['nomcl'],$_POST['nomprod'],$_POST['quantite'],$_POST['prix']);
$panierC=new panierC();
$panierC->ajouterprod($panier);
//header('Location: panierBE.php');
echo "<META http-equiv='refresh' content='0;URL=panierFE.php'>";

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>