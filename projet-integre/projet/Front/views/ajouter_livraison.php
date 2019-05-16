<?php

session_start();
include "../entities/personne.php" ;
include "../core/personneC.php" ;






if ( isset($_GET['nomC']) && isset($_GET['mailC']) && isset($_GET['telC'])&& isset($_GET['town']) && isset($_GET['state'])  && isset($_GET['zip']))
{
    $nomC=$_GET['nomC'];
	$mailC=$_GET['mailC'];
	$telC=$_GET['telC'];
	$town=$_GET['town'];
	$state=$_GET['state'];
  $zip=$_GET['zip'];
  if( !empty($_GET['nomC'])  )
	{
		
	$c=new Livraison($_SESSION['username'],$nomC,$mailC,$telC,$town,$state,$zip);
		$LivraisonC=new LivraisonC();
		$LivraisonC->ajouterLivraison($c);
//		echo "<META http-equiv='refresh' content='0;URL=checkout.php'>";


    }
		

}

?>
