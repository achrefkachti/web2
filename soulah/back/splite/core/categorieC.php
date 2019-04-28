<?PHP
include "../config.php";
class CategorieC {
function afficherCategorie ($categorie){
		
		echo "Refe: ".$categorie->getRefe()."<br>";
		echo "Description: ".$categorie->getDescription()."<br>";
		echo "Affichage: ".$categorie->getAffichage()."<br>";
		
	}
	
	function ajouterCategorie($categorie){
		$sql="insert into categorie (refe,description,affichage) values (:refe,:description,:affichage)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $refe=$categorie->getRefe();
        $description=$categorie->getDescription();
        $affichage=$categorie->getAffichage();
     
		$req->bindValue(':refe',$refe);
		$req->bindValue(':description',$description);
		$req->bindValue(':affichage',$affichage);
	
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherCategories2(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From categorie ORDER BY refe";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function afficherCategories3(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From categorie ORDER BY refe DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function supprimerCategorie($refe){
		$sql="DELETE FROM categorie where refe= :refe";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':refe',$refe);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($categorie,$refe){
		$sql="UPDATE categorie SET   refe=:refee,description=:description,affichage=:affichage WHERE refe=:refe";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $refee=$categorie->getRefe();
        $description=$categorie->getDescription();
        $affichage=$categorie->getAffichage();
      
		$datas = array( ':refee'=>$refee, ':refe'=>$refe,':description'=>$description,':affichage'=>$affichage);
		
		$req->bindValue(':refee',$refee);
		$req->bindValue(':refe',$refe);
		$req->bindValue(':description',$description);
		$req->bindValue(':affichage',$affichage);
		
		
		
            $s=$req->execute();
			 
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($refe){
		$sql="SELECT * from categorie where refe=$refe";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategorie($quantite){
		$sql="SELECT * from categorie where affichage=$affichage";
		$db = config::getConnexion();
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