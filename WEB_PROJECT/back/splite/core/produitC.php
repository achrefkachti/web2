<?PHP
include "../config.php";
class ProduitC {
function afficherProduit ($produit){
		echo "Nom: ".$produit->getNom()."<br>";
		echo "Refe: ".$produit->getRefe()."<br>";
		echo "Couleur: ".$produit->getCouleur()."<br>";
		echo "Categorie: ".$produit->getCategorie()."<br>";
		echo "Marque: ".$produit->getMarque()."<br>";
		echo "Quantite: ".$produit->getQuantite()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
		echo "img: ".$produit->getImg()."<br>";
		
		
	}
	


	function ajouterProduit($produit){
		$sql="insert into produit(nom,refe,couleur,categorie,marque,quantite,prix,img) values (:nom,:refe,:couleur,:categorie,:marque,:quantite,:prix,:img)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$produit->getNom();
        $refe=$produit->getRefe();
        $couleur=$produit->getCouleur();
        $categorie=$produit->getCategorie();
         $marque=$produit->getMarque();
        $quantite=$produit->getQuantite();
         $prix=$produit->getPrix();
          $img=$produit->getImg();
              
        
		$req->bindValue(':nom',$nom);
		$req->bindValue(':refe',$refe);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':img',$img);
		
	
		
            $req->execute(); 
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From produit ";
		$db = config::getConnexion();
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
		$sql="SELECT * From produit ORDER BY prix";
		$db = config::getConnexion();
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
		$sql="SELECT * From produit ORDER BY prix DESC";
		$db = config::getConnexion();
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
		$sql="SELECT * From produit where categorie= :scooter";
		$db = config::getConnexion();
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
	function modifierProduit($produit,$refe){
		$sql="UPDATE produit SET  nom=:nom, refe=:refee,couleur=:couleur,categorie=:categorie,marque=:marque,quantite=:quantite ,prix=:prix,img=:img  WHERE refe=:refe";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$produit->getNom();
        $refee=$produit->getRefe();
        $couleur=$produit->getCouleur();
        $categorie=$produit->getCategorie();
         $marque=$produit->getMarque();
        $quantite=$produit->getQuantite();
         $prix=$produit->getPrix();
          $img=$produit->getImg();
          
      
		$datas = array(':nom'=>$nom, ':refee'=>$refee, ':refe'=>$refe,':couleur'=>$couleur,':categorie'=>$categorie,':marque'=>$marque,':quantite'=>$quantite,':prix'=>$prix,':img'=>$img);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':refee',$refee);
		$req->bindValue(':refe',$refe);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':img',$img);
			
		

		
		
		
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
		$db = config::getConnexion();
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