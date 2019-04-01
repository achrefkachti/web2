<?php
include "../entities/coupon.php";
include "../core/couponC.php";

if (isset($_POST['idc']) && isset($_POST['nomc']) && isset($_POST['valeur']) && isset($_POST['dateE']))
{
$coupon=new coupon($_POST['idc'],$_POST['nomc'],$_POST['valeur'],$_POST['dateE']);
$couponC=new couponC();
$couponC->ajouter($coupon);
//header('Location: panierBE.php');
  echo "<META http-equiv='refresh' content='0;URL=panierBE.php'>";

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>