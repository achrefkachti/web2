<?PHP
include "../config.php";
class clientC {
function afficherClient ($Client){
		echo "identifiant: ".$Client->getUser()."<br>";
		echo "Nom: ".$Client->getNom()."<br>";
		echo "Prénom: ".$Client->getPrenom()."<br>";
		echo "téléphone: ".$Client->getTelephone()."<br>";
		echo "adresse mail: ".$Client->getAdresse()."<br>";
                echo "mot de passe: ".$Client->getPassword()."<br>";
                
	}

	function ajouterClient($Client){
		$sql="insert into clients (username,nom,prenom,adresse,telephone,password) values (:username, :nom, :prenom, :adresse, :telephone, :password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $username=$Client->getUser();
        $nom=$Client->getNom();
        $prenom=$Client->getPrenom();
        $adresse=$Client->getAdresse();
        $password=$Client->getPassword();
        $telephone=$Client->getTelephone();
	
		$req->bindValue(':username',$username);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':password',$password);
		
            $req->execute(); 
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClients1(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SELECT * From Clients ORDER BY telephone";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherClients2(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SELECT * From Clients ORDER BY telephone DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherClients(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SElECT * From Clients";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($username){
		$sql="DELETE FROM Clients where username= :username";
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
	function modifierClient($Client,$username){
		$sql="UPDATE Clients SET username=:usernamee, nom=:nom,prenom=:prenom,adresse=:adresse,telephone=:telephone,password=:password WHERE username=:username";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $usernamee=$Client->getUser();
        $nom=$Client->getNom();
        $prenom=$Client->getPrenom();
        $adresse=$Client->getAdresse();
        $telephone=$Client->getTelephone();
        $password=$Client->getPassword();
        

           $datas = array(':usernamee'=>$usernamee, ':username'=>$username, ':nom'=>$nom,':prenom'=>$prenom,':adresse'=>$adresse,':telephone'=>$telephone, ':password'=>$password);
		$req->bindValue(':usernamee',$usernamee);
		$req->bindValue(':username',$username);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':password',$password);
		
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function setcf($username){
		$sql="UPDATE Clients SET cf='1' WHERE username='$username'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        

           
		$req->bindValue(':username',$username);
		
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
        }
		
	}
	function recupererClient($id){
		$sql="SELECT * from Clients where username='".$id."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeClients($tarif){
		$sql="SELECT * from Client where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}
	function recherchercd($username){
		$sql="SELECT cf from Clients where username='$username'";
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