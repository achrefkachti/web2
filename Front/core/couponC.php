<?php


include "../config1.php";

class couponC
{
	function ajouter($coupon)
	{
		$sql="insert into coupon (idc,nomc,valeur,dateA,dateE,etat) values (:idc,:nomc,:valeur,:dateA,:dateE,:etat)";
		$db=config1::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$idc=$coupon->getidc();
			$nomc=$coupon->getnomc();
			$valeur=$coupon->getvaleur();
			$dateA=$coupon->getdateA();
			$dateE=$coupon->getdateE();
			$etat=$coupon->getetat();
			$req->bindValue(':idc',$idc);
			$req->bindValue(':nomc',$nomc);
			$req->bindValue(':valeur',$valeur);
			$req->bindValue(':dateA',$dateA);
			$req->bindValue(':dateE',$dateE);
			$req->bindValue(':etat',$etat);
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
		$db=config1::getConnexion();
		try
		{
			$liste=$db->query($sql);
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
		$db=config1::getConnexion();
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
		
		$db=config1::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idc=$coupon->getidc();
		$nomc=$coupon->getnomc();
        $valeur=$coupon->getvaleur();
        $dateE=$coupon->getdateE();
		$datas = array(':idc'=>$idc,':nomc'=>$nomc,':valeur'=>$valeur,':dateE'=>$dateE);
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
		$db=config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getcode($nomc){
		$sql="SELECT valeur from coupon where nomc=:nomc";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomc',$nomc);
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
	function verifetat($nomc){
		$sql="SELECT etat from coupon where nomc=:nomc";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomc',$nomc);
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

	function setetat($nomc,$etat){
		$sql="UPDATE coupon set etat=:etat where nomc=:nomc";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomc',$nomc);
			$req->bindParam(':etat',$etat);
			$req->execute();
			return 1;
			

		/*$lol=$db->query($sql);
		return $lol;*/
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}