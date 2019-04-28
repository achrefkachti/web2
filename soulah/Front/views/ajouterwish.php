<?php
include "../entities/wish.php";
include "../core/wishC.php";
session_start();
$_SESSION['id']="3";
$_SESSION['username']="soulah";
$zulu=1;

		$wishC=new wishC();


if ( isset($_GET['nom']) && isset($_GET['prix']) && isset($_GET['quantite']) && isset($_GET['img']) ) 
{
	 $idcl=$_SESSION['id'];
	 $refe=$_GET['refe'];
                $nom=$_GET['nom'];
                $prix=$_GET['prix'];
                $img=$_GET['img'];
               $xray=$wishC->chercher($nom);

                foreach ($xray as $key) {

            
    if( $nom==$key['nomprod'])
    {
    	echo "<script type='text/javascript'>";
            echo "alert('deja exsite');";
            echo "</script>";
            echo "<META http-equiv='refresh' content='0;URL=product-detail.php?id=$refe'>";

$zulu=0;
    }
	}
	if($zulu!=0)
	{
		
		$wish=new wish($idcl,$nom,$prix,$img);
$wishC->ajouter($wish); 
echo "<META http-equiv='refresh' content='0;URL=product-detail.php?id=$refe'>";

		

    }


}
?>