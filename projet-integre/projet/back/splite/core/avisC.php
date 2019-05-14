<?PHP
include "../config2.php";
class AvisC {
function afficherAvis ($avis){
	    echo "id: ".$avis->getId()."<br>";
		echo "avis: ".$avis->getAvis()."<br>";
		echo "user: ".$avis->getUser()."<br>";
		
	}
/*	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	} */

	function ajouterFormulaire($avis){
		$sql="insert into avis (id,avis,user) 
		values (:id, :avis,:user)";
		$db = config2::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$avis->getId();
        $avis=$avis->getAvis();
        $user=$avis->getUser();
        
		
		$req->bindValue(':id',$id);
		$req->bindValue(':avis',$avis);
		$req->bindValue(':user',$user);
		

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAviss(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From avis ORDER BY id ";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
	

	

	
	function supprimerAvis($id){
		$sql="DELETE FROM avis where id= :id";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}




	
	function recupererAvis($id){
		$sql="SELECT * from avis where id=$id";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}




	
	
	function rechercherListeAviss($user){
		$sql="SELECT * from avis where user=$user";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


}

?>