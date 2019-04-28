<?php

include "../config.php";

class LivreurC
{
  function getname($nom){
  		$sql="SELECT * from livreur where tel=tel";
  		$db = config::getConnexion();
  		try{
  		$liste=$db->query($sql);
  		return $liste;
  		}
        catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          }
  	}

	function ajouter($Livreur)
	{
		$sql="insert into livreur (nom,mail,tel,permis,dateA) values (:nom,:mail,:tel,:permis,:dateA)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
            $nom=$Livreur->getnom();
	     	$mail=$Livreur->getemail();
	     	$dateA=$Livreur->getdate();
	     	$tel=$Livreur->gettel();
	     	$permis=$Livreur->getpermis();
	    	$req->bindValue(':nom',$nom);
	    	$req->bindValue(':mail', $mail);
	      	$req->bindValue(':tel',$tel);
	    	$req->bindValue(':permis',$permis);
	     	$req->bindValue(':dateA',$dateA);

	    	$req->execute();
	    	echo 'ok';
        }

    catch(Exception $e)
	    {
		    echo 'Erreur' .$e->getMessage() ;
	    }

	}
	function afficherLivreur(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerLivreur($mail){
		$sql="DELETE FROM livreur where mail= :mail";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':mail',$mail);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierlivreur($Livreur,$tel){
		$sql="UPDATE livreur SET  nom=:nom,tel=:tel,permis=:permis,dateA=:dateA WHERE tel=:tel";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
       	$req=$db->prepare($sql);
            $nom=$Livreur->getnom();
	     	$mail=$Livreur->getemail();
	     	$dateA=$Livreur->getdate();
	     	$tel=$Livreur->gettel();
	     	$permis=$Livreur->getpermis();
		$datas = array(':nom'=>$nom, ':mail'=>$mail, ':tel'=>$tel,':permis'=>$permis,':dateA'=>$dateA);
	$req->bindValue(':nom',$nom);
	    	$req->bindValue(':mail', $mail);
	      	$req->bindValue(':tel',$tel);
	    	$req->bindValue(':permis',$permis);
	     	$req->bindValue(':dateA',$dateA);

            $e=$req->execute();

           // header('Location: index.php');
        }
          catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            echo " Erreur ! ".$e->getMessage();
echo " Les datas : " ;
print_r($datas);
        }

}




}


class LivraisonC
{

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
	function supprimerLivraison($idl){
		$sql="DELETE FROM livraison where idl= :idl ";
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

}
?>
