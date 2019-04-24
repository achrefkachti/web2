<?php
include "../entities/personne.php" ;
include "../core/personneC.php" ;

if ( isset($_GET['nomC']) && isset($_GET['mailC']) && isset($_GET['telC'])&& isset($_GET['card']) && isset($_GET['code']) ) 
{
    $nomC=$_GET['nomC'];

	$mailC=$_GET['mailC'];
	$telC=$_GET['telC'];
	$card=$_GET['card'];
	$code=$_GET['code'];
	
if ( isset($_GET['nomC']) && isset($_GET['mailC']) && isset($_GET['telC'])&& isset($_GET['card']) && isset($_GET['code']) ) 
	{
		$c=new Livraison($nomC,$mailC,$telC,$card,$code);
		$LivraisonC=new LivraisonC();
		$mes=$LivraisonC->ajouterLivraison($c);
		if ($mes==true) 
		{			
			//header('Location:livraison.php');
				


		}
		else
		//	
//echo "nnnnnnn";
				header('Location:livraison.php');
    }
}
?>