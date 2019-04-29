<?php
include "../entities/panier.php";
include "../core/panierC.php";
session_start();
$_SESSION['id']="3";
$_SESSION['username']="soulah";

if (($_SESSION['id']) && isset($_SESSION['username']) && isset($_POST['nom']) && isset($_POST['quantite'])&& isset($_POST['prix']))
{

$panier=new panier($_SESSION['id'],$_SESSION['username'],$_POST['nom'],$_POST['quantite'],$_POST['prix'],$_POST['img']);
$panierC=new panierC();
$panierC->ajouterprod($panier);
//header('Location: panierBE.php');
echo "<META http-equiv='refresh' content='0;URL=shop.php'>";

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>