<?php

 
class commentC
{
	function ajouter($comment)
	{
		$sql="insert into commentairephoto (utilisateur,contenu) values (:utilisateur,:contenu)";
		$db=config8::getConnexion();
		try
		{
			$req=$db->prepare($sql);
		    $utilisateur=$comment->getutilisateur();
		    $contenu=$comment->getcontenu();
	    	$req->bindValue(':utilisateur', $utilisateur); 
	    	$req->bindValue(':contenu', $contenu); 
	    	$req->execute();
	    	
	    	echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
        }
    
    catch(Exception $e)
	    {
		    echo 'Erreu' .$e->getMessage() ;
		    echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
	    }
		
	}
	function supprimercomment($id){
		$sql="DELETE FROM commentairephoto where id= :id";
		$db = config8::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            ?>
	<script type="text/javascript">
        alert ("Suppression avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=list_sig.php'>";
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            echo "<META http-equiv='refresh' content='0;URL=list_sig.php'>";
        }
	}
	


	function affichercomments(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commentairephoto";
		$db = config8::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function signaler($id){
		$sql="UPDATE commentairephoto SET sig=:sigg WHERE id=:id";
		
		$db = config8::getConnexion();
		$sigg=1;
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	    	$req->bindValue(':sigg', $sigg);
	    	$req->bindValue(':id', $id);
		
		
            $s=$req->execute();
			
	    	echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
        }
		
	}
	function increment_like($id,$likes){
		$sql="UPDATE commentairephoto SET likes=:likes WHERE id=:id";
		
		$db = config8::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	    	$req->bindValue(':likes', $likes);
	    	$req->bindValue(':id', $id);
		
		
            $s=$req->execute();
			
	    	echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
        }
		
	}

	function rechercherListecomment(){
		$sql="SELECT * from commentairephoto where sig=1";
		$db = config8::getConnexion();
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