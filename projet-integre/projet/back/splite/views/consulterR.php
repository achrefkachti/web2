<?php
include "../entities/Livraison.php" ;
include "../core/LivraisonC.php" ;
if(isset($_GET['idl']))
{
$recc=new LivraisonC();
  $recc->consulter($_GET['idl']);
  var_dump($recc);
  header('location:livreur.php');
}
 ?>
