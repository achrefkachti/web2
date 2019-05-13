<?php
include "../entities/comment.php" ;
include "../core/commentC.php" ;
include "../config.php";

	$contenu=$_GET['contenu'];
	$utilisateur='user';
	$e=new comment($_GET['iduser'],$contenu);
	$commentC=new commentC();
if ( empty($_GET['contenu'])) 
{
?>
	<script type="text/javascript">
        alert ("Commentaire vide");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=galerie.php'>";
}

else if ( isset($_GET['contenu'])) 
{
    
	
	if( !empty($_GET['contenu']))
	{
		
		$mes=$commentC->ajouter($e);
		



    }
}
?>