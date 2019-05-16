<?php

include "../config7.php";
 
class LivraisonC
{
	function ajouterLivraison($Livraison)
	{
		$sql="insert into livraison (username,nomC,mailC,telC,town,state,zip) values (:username,:nomC,:mailC,:telC,:town,:state,:zip)";
		$db=config7::getConnexion();
		try
		{
			$req=$db->prepare($sql);
            $nomC= $Livraison->getnom();
	     	$mailC=$Livraison->getemailC();
	     	$telC=$Livraison->gettelC();
            $username=$Livraison->getusername();
             $town=$Livraison->gettown();
            $state=$Livraison->getstate();
            $zip=$Livraison->getzip();
	    	$req->bindValue(':username',$username);

	    	$req->bindValue(':nomC',$nomC);
	    	$req->bindValue(':mailC', $mailC);	
	      	$req->bindValue(':telC',$telC);
	    	
	    	
            $req->bindValue(':town',$town);
            $req->bindValue(':state',$state);
            $req->bindValue(':zip',$zip);
	    	$req->execute();
	    	echo $zip;
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
		$db = config7::getConnexion();
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
		$db = config7::getConnexion();
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
		
		$db = config7::getConnexion();
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
		$db = config7::getConnexion();
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
	

	


