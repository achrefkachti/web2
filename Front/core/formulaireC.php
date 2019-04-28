<?PHP
include "../config2.php";
class FormulaireC {
function afficherFormulaire ($formulaire){
	    echo "id: ".$formulaire->getId()."<br>";
		echo "cin: ".$formulaire->getCin()."<br>";
		echo "nom: ".$formulaire->getNom()."<br>";
		echo "prenom: ".$formulaire->getPrenom()."<br>";
		echo "email: ".$formulaire->getEmail()."<br>";
		echo "teleph: ".$formulaire->getTelephone()."<br>";
		echo "catg: ".$formulaire->getCategorie()."<br>";
		echo "ref: ".$formulaire->getReference()."<br>";
		echo "date: ".$formulaire->getDate()."<br>";
		echo "quant: ".$formulaire->getQuantite()."<br>";
		echo "demande: ".$formulaire->getDemande()."<br>";
	}
/*	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	} */

	function ajouterFormulaire($formulaire){
		$sql="insert into formulaire (cin,nom,prenom,email,teleph,catg,ref,date,quant,demande) 
		values (:cin, :nom,:prenom,:email,:teleph,:catg,:ref,:date,:quant,:demande)";
		$db = config2::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$formulaire->getCin();
        $nom=$formulaire->getNom();
        $prenom=$formulaire->getPrenom();
        $email=$formulaire->getEmail();
        $teleph=$formulaire->getTelephone();
        $catg=$formulaire->getCategorie();
        $ref=$formulaire->getReference();
        $date=$formulaire->getDate();
        $quant=$formulaire->getQuantite();
        $demande=$formulaire->getDemande();
		
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':teleph',$teleph);
		$req->bindValue(':catg',$catg);
		$req->bindValue(':ref',$ref);
		$req->bindValue(':date',$date);
		$req->bindValue(':quant',$quant);
		$req->bindValue(':demande',$demande);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherFormulaires(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From formulaire ";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}



   function afficherForm($emaill){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From formulaire WHERE '$emaill' = email   ";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}




	function afficherComf(){
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

    
    


    function trierformulaire(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From formulaire ORDER BY date DESC";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	

	
	function supprimerFormulaire($id){
		$sql="DELETE FROM formulaire where id= :id";
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




	function modifierFormulaire($formulaire,$id){
		$sql="UPDATE formulaire SET id=:idd, cin=:cin, nom=:nom, prenom=:prenom, email=:email, teleph=:teleph, catg=:catg, ref=:ref, date=:date, quant=:quant, demande=:demande WHERE id=:id";
		
		$db = config2::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idd=$formulaire->getId();
		$cin=$formulaire->getCin();
        $nom=$formulaire->getNom();
        $prenom=$formulaire->getPrenom();
        $email=$formulaire->getEmail();
        $teleph=$formulaire->getTelephone();
        $catg=$formulaire->getCategorie();
        $ref=$formulaire->getReference();
        $date=$formulaire->getDate();
        $quant=$formulaire->getQuantite();
        $demande=$formulaire->getDemande();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':teleph'=>$teleph,':catg'=>$catg,
			':ref'=>$ref,':date'=>$date,':quant'=>$quant,':demande'=>$demande);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':teleph',$teleph);
		$req->bindValue(':catg',$catg);
		$req->bindValue(':ref',$ref);
		$req->bindValue(':date',$date);
		$req->bindValue(':quant',$quant);
		$req->bindValue(':demande',$demande);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererFormulaire($id){
		$sql="SELECT * from formulaire where id=$id";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}




	
	
	function rechercherListeFormulaires($tarif){
		$sql="SELECT * from formulaire where catg=$catg";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherdates($date1,$date2){
		$sql="SELECT * from formulaire where date BETWEEN '$date1' AND '$date2'";
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