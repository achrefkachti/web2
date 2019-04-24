
<?php
include "../entities/personne.php";
include "../core/personneC.php";
if (isset($_GET['mail'])){
	$LivreurC=new LivreurC();
    $result=$LivreurC->getmail($_GET['mail']);
	foreach($result as $row){
		$nom=$row['nom'];
		$mail=$row['mail'];
		$tel=$row['tel'];
		$permis=$row['permis'];
		$date=$row['$dateA'];

		?>
