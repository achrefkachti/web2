<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
//$log="admin";
//$password="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$password'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
	
$c=new Database();
$conn=$c->connexion();
$user=new User($_POST['username'],$_POST['password'],$conn);
$u=$user->Logedin($conn,$_POST['username'],$_POST['password']);

	//var_dump($u);
//$logR=$_POST['login'];
//$passwordR=$_POST['password'];

$vide=false;
if (!empty($_POST['username']) && !empty($_POST['password'])){

	foreach($u as $t){
		$vide=true;
	if ($t['username']==$_POST['username'] && $t['password']==$_POST['password']){
		
		session_start();		


		$_SESSION['username']=$_POST['username'];
		$_SESSION['password']=$_POST['password'];
		$_SESSION['id']=$t['id'];
		
		header("location:indexach.php");

		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=loginach.html">'; 
      } 
}	  
 
else { 
      echo '<meta http-equiv="refresh" content="0;URL=loginach.html">'; 
     ?>  <?php 
}  
if ("admin"==($_POST['username']) && "admin"==($_POST['password'])){ ?>
		<script type="text/javascript">
        alert ("Vous serez connecté en tant qu'admin");</script> <?php
		echo "<META http-equiv='refresh' content='0;URL=../../../../../web2/projet/back/splite/views/panierBE.php'>";
	}
?> 
</body>
</html>