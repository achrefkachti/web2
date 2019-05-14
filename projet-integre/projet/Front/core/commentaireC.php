<?PHP
class comC {
function recupercom($refe){
		$sql="SELECT * from commentaires where refe=$refe GROUP by user,commentaire";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}}