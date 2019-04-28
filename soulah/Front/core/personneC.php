<?php

include "../config.php";
 
class LivraisonC
{
	function ajouterLivraison($Livraison)
	{
		$sql="insert into livraison (nomC,mailC,telC,card,code) values (:nomC,:mailC,:telC,:card,:code)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
            $nomC= $Livraison->getnom();
	     	$mailC=$Livraison->getemailC();
	     	$telC=$Livraison->gettelC();
            $card=$Livraison->getcard();
            $code=$Livraison->getcode();

	    	$req->bindValue(':nomC',$nomC);
	    	$req->bindValue(':mailC', $mailC);	
	      	$req->bindValue(':telC',$telC);
	    	$req->bindValue(':card',$card);
	    	$req->bindValue(':code',$code);

	    	$req->execute();
	    	echo 'ok';
        }
    
    catch(Exception $e)
	    {
		    echo 'Erreur' .$e->getMessage() ;
	    }
		
	}

function afficherLivraison(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerLivreur($code){
		$sql="DELETE FROM livraison where code= :code";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code',$code);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

/*		function modifierlivraison($Livraison,$code){
		$sql="UPDATE livraison SET  nomC=:nom,telC=:telC,mail=:mail,card=:card WHERE code=:code";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
       	$req=$db->prepare($sql);
            $nomC= $Livraison->getnom();
	     	$mailC=$Livraison->getemailC();
	     	$telC=$Livraison->gettelC();
            $card=$Livraison->getcard();
            $code=$Livraison->getcode();
		$datas = array(':nomC'=>$nomC, ':mailC'=>$mailC, ':telC'=>$telC,':card'=>$card,':code'=>$code);
	$req->bindValue(':nomC',$nomC);
	    	$req->bindValue(':mailC', $mailC);	
	      	$req->bindValue(':telC',$telC);
	    	$req->bindValue(':card',$card);
	     	$req->bindValue(':code',$code);



		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
          catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

}
*/
/*function getcode($code){
		$sql="SELECT * from livraison where code=:code";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



*/
}
	?>
	

	


