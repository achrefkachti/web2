<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=web;charset=utf8', 'root', '');
   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
      $confirme = (int) $_GET['confirme'];
      $req = $bdd->prepare('UPDATE carte SET confirme = 1 WHERE id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM carte WHERE id = ?');
      $req->execute(array($supprime));
   }
$membres = $bdd->query('SELECT * FROM carte ORDER BY id DESC LIMIT 0,5');

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>Administration</title>
</head>
<body>
   <ul>
      <?php while($m = $membres->fetch()) { ?>
      <li><?= $m['id'] ?> : <?= $m['nom'] ?><?php if($m['confirme'] == 0) { ?> - <a href="demande.php?type=membre&confirme=<?= $m['id'] ?>">Confirmer</a><?php } ?> - <a href="demande.php?type=membre&supprime=<?= $m['id'] ?>">Supprimer</a></li>
      <?php } ?>
   </ul>
  
</body>
</html>