<?PHP
include "../config.php";
class SuivieC {
function afficherSuivie ($suivie){
	    echo "id: ".$suivie->getId()."<br>";
		echo "cin: ".$suivie->getCin()."<br>";
		echo "exam: ".$suivie->getExam()."<br>";
		echo "remb: ".$suivie->getRemb()."<br>";
		echo "dat: ".$suivie->getDat()."<br>";
		
	}
/*	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	} */

	function ajouterSuivie($suivie){
		$sql="insert into suivie (id,cin,exam,remb,dat) 
		values (:id, :cin, :exam,:remb,:dat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$id=$suivie->getId();
        $cin=$suivie->getCin();
        $exam=$suivie->getExam();
        $remb=$suivie->getRemb();
        $dat=$suivie->getDat();
        
		$req->bindValue(':id',$id);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':exam',$exam);
		$req->bindValue(':remb',$remb);
		$req->bindValue(':dat',$dat);
		

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherSuivies(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From suivie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function afficherall(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From suivie inner join formulaire on suivie.id=formulaire.id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerSuivie($id){
		$sql="DELETE FROM suivie where id= :id";
		$db = config::getConnexion();
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
	
	function modifierSuivie($suivie,$id){
		$sql="UPDATE suivie SET cin=:cin, exam=:exam, remb=:remb, dat=:dat WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id=$suivie->getId();
		$cin=$suivie->getCin();
        $exam=$suivie->getExam();
        $remb=$suivie->getRemb();
        $dat=$suivie->getDat();
		$datas = array(':id'=>$id, ':cin'=>$cin, ':exam'=>$exam,':remb'=>$remb,':dat'=>$dat);
		//$req->bindValue(':cinn',$cinn);
		$req->bindValue(':id',$id);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':exam',$exam);
		$req->bindValue(':remb',$remb);
		$req->bindValue(':dat',$dat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

   }


 function triersuivie(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From suivie ORDER BY id DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}




   
	function recupererSuivie($id){
		$sql="SELECT * from suivie where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
/* function rechercherListeSuivies($exam){
		$sql="SELECT * from suivie where exam=$exam";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>