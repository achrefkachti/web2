

<?php


include "../config2.php";






class transC
{
	function ajouterT($trans)
	{
		$sql="insert into transaction (idcl,nomcl,dateT,total) values (:idcl,:nomcl,:dateT,:total)";
		$db=config2::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			
			$idcl=$trans->getidcl();
			$nomcl=$trans->getnomcl();
			$total=$trans->gettot();
			$dateT=$trans->getdateT();
			$req->bindValue(':idcl',$idcl);
			$req->bindValue(':nomcl',$nomcl);
			$req->bindValue(':total',$total);
			$req->bindValue(':dateT',$dateT);
			$req->execute();

return 1;



		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherprod()
	{
		$sql="select * from transaction";
		$db=config2::getConnexion();
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
	function count($nomcl){
		$sql="SELECT count(*)  a from transaction where nomcl=:nomcl";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomcl',$nomcl);
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
}