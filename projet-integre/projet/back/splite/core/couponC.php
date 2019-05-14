<?php


include "../config.php";

class couponC
{
	function ajouter($coupon)
	{
		$sql="insert into coupon (nomc,valeur,affectation,dateA,dateE,etat) values (:nomc,:valeur,:affectation,:dateA,:dateE,:etat)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$nomc=$coupon->getnomc();
			$valeur=$coupon->getvaleur();
			$dateA=$coupon->getdateA();
			$dateE=$coupon->getdateE();
			$etat=$coupon->getetat();
			$affect=$coupon->getaffect();
//$req->bindValue(':idc',$idc);
			$req->bindValue(':nomc',$nomc);
			$req->bindValue(':valeur',$valeur);
			$req->bindValue(':dateA',$dateA);
			$req->bindValue(':dateE',$dateE);
			$req->bindValue(':etat',$etat);
			$req->bindValue(':affectation',$affect);
			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	
	

	function affichercoupon()
	{
		$sql="select * from coupon";
		$db=config::getConnexion();
		try
		{
			$result=$db->query($sql);
			        $result->execute();
        $liste= $result->fetchALL(PDO::FETCH_OBJ);
        return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function supprimercoupon($idc)
	{

		$sql="DELETE FROM coupon where idc=:idc";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idc',$idc);
		try{
            $req->execute();
          //header('Location: panierBE.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifiercoupon($coupon,$idc)
	{

		 $sql="UPDATE coupon SET nomc=:nomc, valeur=:valeur, dateE=:dateE WHERE idc=:idc";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$nomc=$coupon->getnomc();
        $valeur=$coupon->getvaleur();
        $dateE=$coupon->getdateE();
		$datas = array(':nomc'=>$nomc,':valeur'=>$valeur,':dateE'=>$dateE);
		$req->bindValue(':idc',$idc);
		$req->bindValue(':nomc',$nomc);	
		$req->bindValue(':valeur',$valeur);
		$req->bindValue(':dateE',$dateE);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	
}
	function getid($idc){
		$sql="SELECT * from coupon where idc=$idc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getnom($nomc){
		$sql="SELECT * from coupon where nomc=$nomc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
           
        }
	}
	function stat(){
		$sql="SELECT valeur, count(etat) a FROM coupon group by valeur";
		$db = config::getConnexion();
		try{
	$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
           
        }
	}

	function firstfree()
	{

		$sql="SELECT TOP 1 nomc from coupon where etat='0'";
		$db=config::getConnexion();
		try{
			$req=$db->query($sql);
			return $liste;
			

		/*$lol=$db->query($sql);
		return $lol;*/
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	function affecter($user,$idc){
		$sql="UPDATE coupon set affectation=:user where nomc=:nomc'";
		$db=config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomc',$nomc);
			$req->bindParam(':user',$user);
			$req->execute();
			return 1;
			

		/*$lol=$db->query($sql);
		return $lol;*/
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

public function rechercherC($idc)
      {
        $db = config1::getConnexion();
      $sql ="SELECT  * from coupon where  idc=:idc ";

        $req=$db->prepare($sql);//cette fonction permet seulement la lecture ,permet de retourner un tableau de données
        $req->bindValue(':idc',$idc);
        $req->execute();
        $listcoupon= $req->fetchALL(PDO::FETCH_OBJ);
        return $listcoupon;
      }

	public function trier($par)
      {
        $sql="SELECT * FROM coupon order by $par  DESC";
          $db = config1::getConnexion();
          try{
          $result=$db->query($sql);

        $result->execute();
        $liste= $result->fetchALL(PDO::FETCH_OBJ);
        return $liste;

          }
          catch (Exception $e){
            die('Erreur: '.$e->getMessage());
          } 
      }
	
	
}