

<?php


include "../config4.php";






class wishC
{
	function ajouter($wish)
	{
		$sql="insert into wish (idcl,nomprod,prix,img) values (:idcl,:nomprod,:prix,:img)";
		$db=config4::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			
			$idcl=$wish->getidcl();
			$nomprod=$wish->getnomprod();
			$img=$wish->getimg();
			$prix=$wish->getprix();
			$req->bindValue(':idcl',$idcl);
			$req->bindValue(':nomprod',$nomprod);
			$req->bindValue(':img',$img);
			$req->bindValue(':prix',$prix);
			$req->execute();

return 1;



		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficher()
	{
		$sql="select * from wish";
		$db=config4::getConnexion();
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

	function supprimer($idw){
		$sql="DELETE FROM wish where idw=:idw";
		$db = config4::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idw',$idw);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifier($wish,$idw){
		$sql="UPDATE wish SET  nom=:nom,prix=:prix,img=:img WHERE idw=:idw";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
       	$req=$db->prepare($sql);
           $idcl=$wish->getidcl();
			$nomprod=$wish->getnomprod();
			$img=$wish->getimg();
			$prix=$wish->getprix();
		$datas = array(':nom'=>$nom, ':prix'=>$prix,':img'=>$img,':idw'=>$idw);
	       $req->bindValue(':idcl',$idcl);
			$req->bindValue(':nomprod',$nomprod);
			$req->bindValue(':img',$img);
			$req->bindValue(':prix',$prix);
	     	$req->bindValue(':idw',$idw);



		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
          catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

}

function chercher($nom){
		$sql="Select * FROM wish where nomprod=:nom";
		$db = config4::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindParam(':nom',$nom);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}




}