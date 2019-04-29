<?php
include "../entities/panier.php";
include "../core/panierC.php";
session_start();

if (($_SESSION['id']) && isset($_SESSION['username']) && isset($_POST['refe']) && isset($_POST['quantite'])&& isset($_POST['prix']))
{

$panier=new panier($_SESSION['id'],$_SESSION['username'],$_POST['refe'],$_POST['quantite'],$_POST['prix']);
$panierC=new panierC();
$panierC->ajouterprod($panier);
//header('Location: panierBE.php');
echo "<META http-equiv='refresh' content='0;URL=panierFE.php'>";

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>