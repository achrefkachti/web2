<?PHP
include "../config.php";
class SuivieC {
function afficherSuivie ($suivie){
		echo "cin: ".$suivie->getCin()."<br>";
		echo "exam: ".$suivie->getExam()."<br>";
		echo "remb: ".$suivie->getRemb()."<br>";
		echo "dat: ".$suivie->getDat()."<br>";
		
	}
/*	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	} */

	function ajouterSuivie($suivie){
		$sql="insert into suivie (cin,exam,remb,dat) 
		values (:cin, :exam,:remb,:dat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$suivie->getCin();
        $exam=$suivie->getExam();
        $remb=$suivie->getRemb();
        $dat=$suivie->getDat();
        
		
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
	function supprimerSuivie($cin){
		$sql="DELETE FROM suivie where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierSuivie($suivie,$cin){
		$sql="UPDATE suivie SET exam=:exam, remb=:remb, dat=:dat WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin=$suivie->getCin();
        $exam=$suivie->getExam();
        $remb=$suivie->getRemb();
        $dat=$suivie->getDat();
		$datas = array(':cin'=>$cin, ':exam'=>$exam,':remb'=>$remb,':dat'=>$dat);
		//$req->bindValue(':cinn',$cinn);
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
		$sql="SElECT * From suivie ORDER BY cin DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}




   
	function recupererSuivie($cin){
		$sql="SELECT * from suivie where cin=$cin";
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