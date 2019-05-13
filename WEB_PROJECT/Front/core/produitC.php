<?PHP
include "../config3.php";
class ProduitC {
function afficherProduit ($produit){
		echo "Nom: ".$produit->getNom()."<br>";
		echo "Refe: ".$produit->getRefe()."<br>";
		echo "Couleur: ".$produit->getCouleur()."<br>";
		echo "Quantite: ".$produit->getQuantite()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
		
	}
	


	function ajouterProduit($produit){
		$sql="insert into produit(nom,refe,couleur,quantite,prix) values (:nom, :refe,:couleur,:quantite,:prix)";
		$db = config3::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$produit->getNom();
        $refe=$produit->getRefe();
        $couleur=$produit->getCouleur();
        $quantite=$produit->getQuantite();
         $prix=$produit->getPrix();
        
		$req->bindValue(':nom',$nom);
		$req->bindValue(':refe',$refe);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
	
		
            $req->execute(); 
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit ";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function afficherProduits1(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit limit 4 ";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function afficherProduits2(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit ORDER BY refe";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function affichercom(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From commentaires ORDER BY id";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherProduits3(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit ORDER BY refe DESC";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherProduits4(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit where type= 'velo'";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
function afficherProduits5(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit where type= 'scooter'";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherProduits6(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		
		$sql="SELECT * From produit where type='scooter' || type='velo'";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
		function afficherProduits7(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit where type= 'accesoires'";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function afficherProduits8(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit where couleur= :couleur";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerProduit($refe){
		$sql="DELETE FROM produit where refe= :refe";
		$db = config3::getConnexion();
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
	function modifierProduit($produit,$refe){
		$sql="UPDATE produit SET  nom=:nom, refe=:refee,couleur=:couleur,quantite=:quantite ,prix=:prix WHERE refe=:refe";
		
		$db = config3::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$produit->getNom();
        $refee=$produit->getRefe();
        $couleur=$produit->getCouleur();
        $quantite=$produit->getQuantite();
         $prix=$produit->getPrix();
      
		$datas = array(':nom'=>$nom, ':refee'=>$refee, ':refe'=>$refe,':couleur'=>$couleur,':quantite'=>$quantite,':prix'=>$prix);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':refee',$refee);
		$req->bindValue(':refe',$refe);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
		
		
		
            $s=$req->execute();
			 
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduit($refe){
		$sql="SELECT * from produit where refe=$refe";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduit($quantite){
		$sql="SELECT * from produit where prix=$prix";
		$db = config3::getConnexion();
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