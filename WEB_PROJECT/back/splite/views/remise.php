<?php
include "../core/LivraisonC.php";
$Livraison1C= new LivraisonC();
if (isset($_POST['applyy'])) {
$x           = $_POST['idv'];
$listetat    = $Livraison1C->verifetat($x);
$etat        = 1;
foreach ($listetat as $key) {
$o = $key['etat'];
echo $o;
if ( $o == 0){
$Livraison1C->setetat($x, $etat);
echo "<script type='text/javascript'>";
echo "alert('livraison ajouter pour delivrer');";
echo "</script>";
}

else {
echo "<script type='text/javascript'>";
echo "alert('laivrison deja traitée');";
echo "</script>";
}

}
echo "<META http-equiv='refresh' content='0;URL=livraison.php'>";
}

?>
