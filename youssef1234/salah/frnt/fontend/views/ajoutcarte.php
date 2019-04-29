<?php
include "../core/carteC.php";
include "../entities/carte.php";
if(isset($_POST['id']) && isset($_POST['code']) && isset($_POST['delai']) )
   {    
   $carte1=new Carte($_POST['id'],$_POST['code'],$_POST['delai']);
   

  $carte1c=new carteC();
  $carte1c->ajouterCarte($carte1);
echo "carte ajouté";
}
else {
  echo "non";
}





?>