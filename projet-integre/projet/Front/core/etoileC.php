<?PHP
class etoileC {
function recupererrating($refe){
		$sql="SELECT * from etoile where refe=$refe";
		$db = config3::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}}