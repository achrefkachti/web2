<?php

include "../config8.php";
 
class pictureC
{
	function ajouter($picture)
	{
		$sql="insert into picture (event,schemaa) values (:event,:schemaa)";
		$db=config8::getConnexion();
		try
		{
			$req=$db->prepare($sql);
		    $event=$picture->getevent();
		    $schemaa=$picture->getschemaa();
	    	$req->bindValue(':event', $event);
	    	$req->bindValue(':schemaa', $schemaa);    	
	    	$req->execute();
	    	?>
	<script type="text/javascript">
        alert ("Ajout avec succés");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=gerer_gal.php'>";
        }
    
    catch(Exception $e)
	    {
		    echo 'Erreu' .$e->getMessage() ;
		    echo "<META http-equiv='refresh' content='0;URL=gerer_gal.php'>";
	    }
		
	}
	function supprimerpicture($schemaa){
		$sql="DELETE FROM picture where schemaa= :schemaa";
		$db = config8::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':schemaa',$schemaa);
		try{
            $req->execute();
            ?>
	<script type="text/javascript">
        alert ("Suppression avec succés");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=gerer_gal.php'>";
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            echo "<META http-equiv='refresh' content='0;URL=gerer_gal.php'>";
        }
	}
	function increment_like($schemaa,$likes){
		$sql="UPDATE picture SET likes=:likes WHERE schemaa=:schemaa";
		
		$db = config8::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	    	$req->bindValue(':likes', $likes);
	    	$req->bindValue(':schemaa', $schemaa);
		
		
            $s=$req->execute();
			
	    	echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
        }
		
	}
	function afficherpictures(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From picture ORDER BY event";
		$db = config8::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}
	
	function recupererpictures($search){
		$sql="SELECT * from picture where event='$search'";
		$db = config8::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function existencepicture($schemaa){
		$db = config8::getConnexion();
		$req = $db->query("SELECT count(*) as s FROM picture WHERE schemaa = '$schemaa'");
		if($req->fetch()['s'] > 0)
		{
  		 return 1;
		}
		else {return 0;}
	}

	function rechercherListepicture($event){
		$sql="SELECT * from picture where event=$event";
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