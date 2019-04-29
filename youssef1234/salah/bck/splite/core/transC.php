

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

	function afficherT()
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
}