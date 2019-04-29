<?PHP

class carteC {
function afficherCarte ($Carte){
		echo "identifiant: ".$Carte->getId()."<br>";
		echo "username: ".$Carte->getUser()."<br>";
		echo "nom: ".$Carte->getNom()."<br>";
		echo "prenom: ".$Carte->getPrenom()."<br>";
                
	}

	function ajouterCarte($Carte){
		$sql="insert into carte (username,nom,prenom,cin,confirme) values (:username, :nom, :prenom, :cin, :confirme)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$confirme=$Carte->getConfirme();
        $cin=$Carte->getCin();
        $username=$Carte->getUser();
        $nom=$Carte->getNom();
        $prenom=$Carte->getPrenom();
	
		$req->bindValue(':username',$username);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':confirme',$confirme);
		
		
            $req->execute(); 
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCartes(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SElECT * From carte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCarte($username){
		$sql="DELETE FROM carte where username= :username";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':username',$username);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCarte($Carte,$username){
		$sql="UPDATE carte SET username=:usernamee, nom=:nom,prenom=:prenom,cin=:cin,confirme=:confirme WHERE username=:username";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$usernamee=$Carte->getUser();
        $nom=$Carte->getNom();
        $prenom=$Carte->getPrenom();
        $cin=$Carte->getCin();
        $confirme=$Carte->getConfirme();

           $datas = array(':usernamee'=>$usernamee, ':username'=>$username,':nom'=>$nom,':prenom'=>$prenom, ':cin'=>$cin, 'confirme'=>$confirme);
		$req->bindValue(':usernamee',$usernamee);
		$req->bindValue(':username',$username);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cin',$cin);
$req->bindValue(':confirme',$confirme);
				
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function recupererCarte($username){
		$sql="SELECT * from  clients inner join  carte on clients.username=carte.username ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererCartee($username){
		$sql="SELECT * from  carte    where username='$username'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererCarteClient($username){
		$sql="SELECT * from  clients inner join  carte on  clients.username=carte.username and carte.confirme='0' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercheruserflcarte($username){
		$sql="SELECT * from   carte where carte.confirme!='1' AND carte.confirme!='0'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function verif($username){
		$sql="SELECT confirme from carte where username=:username";
		$db=config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':username',$username);
			$req->execute();
			$x=$req->fetchALL();
			return $x;

		/*$lol=$db->query($sql);
		return $lol;*/
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());

        }
	}
	function recherchercr($username){
		$sql="SELECT confirme from carte where username='$username'";
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