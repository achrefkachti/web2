<?php

include "../config.php";

class LivreurC
{



  function getid($idv){
      $sql="SELECT idv from livraison where idv=$idv";
      $db = config::getConnexion();
      try{
      $liste=$db->query($sql);
      return $liste;
      }
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          }
    }

  function getname($idl){
  		$sql="SELECT * from livreur where idl=$idl";
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
		$sql="insert into livreur (idv,nom) values (:idv,:nom)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
            $nom=$Livreur->getnom();
        $idv=$Livreur->getidv();
        $req->bindValue(':idv',$idv);
	    	$req->bindValue(':nom',$nom);


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
	function supprimerLivreur($idl){
		$sql="DELETE FROM livreur where idl= :idl";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idl',$idl);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierlivreur($Livreur,$idl){
		$sql="UPDATE livreur SET  nom=:nom WHERE idl=:idl";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
       	$req=$db->prepare($sql);
            $nom=$Livreur->getnom();

	//	$datas = array(':nom'=>$nom);
    $req->bindValue(':idl',$idl);
   	$req->bindValue(':nom',$nom);


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

function modifierdate($dateA,$idl){
$sql="UPDATE livreur SET dateA=:dateA WHERE idl=:idl";

$db = config::getConnexion();
//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
    $req=$db->prepare($sql);
    $req->bindValue(':idl',$idl);

    $req->bindValue(':dateA',$dateA);

        $e=$req->execute();


       // header('Location: index.php');
    }
      catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        echo " Erreur ! ".$e->getMessage();

    }

}



}


class LivraisonC
{

  function consulter($idl)
  {
    $sql="update livreur set etat=1 where idl='$idl'";
    $db=config::getConnexion();
    return $db->query($sql);
  }
  function verifetat($idv)
  {
    $sql="SELECT etat from livraison where idv=$idv";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }

  	function setetat($idv,$etat){
  		$sql="UPDATE livraison set etat=:etat where idv=:idv";
  		$db=config::getConnexion();
  		try{
  			$req=$db->prepare($sql);
  			$req->bindParam(':idv',$idv);
  			$req->bindParam(':etat',$etat);
  			$req->execute();
  			return 1;


  		/*$lol=$db->query($sql);
  		return $lol;*/
  		}
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
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
	function supprimerLivraison($idv){
		$sql=" DELETE FROM livraison where idv= :idv ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idv',$idv);
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
