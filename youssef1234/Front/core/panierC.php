<?php


include "../config.php";

class panierC
{
	function ajouterprod($panier)
	{
		$sql="insert into cart (idp,idcl,nomcl,nomprod,quantite,prix,total,dateP,img) values (:idp,:idcl,:nomcl,:nomprod,:quantite,:prix,:total,:dateP,:img)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$idp=$panier->getidp();
			$idcl=$panier->getidcl();
			$nomcl=$panier->getnomcl();
			$nomprod=$panier->getnomprod();
			$prix=$panier->getprix();
			$total=$panier->gettot();
			$dateP=$panier->getdateP();
			$img=$panier->getimg();
			$quantite=$panier->getqt();
			$req->bindValue(':idp',$idp);
			$req->bindValue(':idcl',$idcl);
			$req->bindValue(':nomcl',$nomcl);
			$req->bindValue(':nomprod',$nomprod);
			$req->bindValue(':quantite',$quantite);
			$req->bindValue(':prix',$prix);
			$req->bindValue(':total',$total);
			$req->bindValue(':dateP',$dateP);
			$req->bindValue(':img',$img);
			$req->execute();




		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherprod()
	{
		$sql="select * from cart";
		$db=config::getConnexion();
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

	function supprimerprod($idp)
	{

		$sql="DELETE FROM cart where idp=:idp";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idp',$idp);
		try{
            $req->execute();
          //header('Location: panierBE.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierpanier($panier,$idcl)
	{

		 $sql="UPDATE cart SET  nomcl=:nomcl,nomprod=:nomprod,quantite=:quantite,prix=:prix,dateP=:dateP,total=:total WHERE idcl=:idcl";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        
			$idcl=$panier->getidcl();
			$nomcl=$panier->getnomcl();
			$nomprod=$panier->getnomprod();
			$prix=$panier->getprix();
			$dateP=$panier->getdateP();
			$quantite=$panier->getqt();
			$total=$panier->gettot();
		$datas = array(':idcl'=>$idcl,':nomcl'=>$nomcl,':nomprod'=>$nomprod,':quantite'=>$quantite,':prix'=>$prix,':dateP'=>$dateP,':total'=>$total);
		    $req->bindValue(':idcl',$idcl);
			$req->bindValue(':nomcl',$nomcl);
			$req->bindValue(':nomprod',$nomprod);
			$req->bindValue(':quantite',$quantite);
			$req->bindValue(':prix',$prix);
			$req->bindValue(':total',$total);
			$req->bindValue(':dateP',$dateP);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function getid($idcl){
		$sql="SELECT * from cart where idcl=$idcl";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function getsomme(){
		$sql="SELECT SUM(total) from cart";
		$db = config::getConnexion();
		try{
		$sum=$db->query($sql);
		return $sum;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            
        }
	}
	function setprix($tot)
	{
		$sql="UPDATE cart  Set total=:total";
		$db = config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindParam(':total',$tot);
			$req->execute();
		}
		 catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}


