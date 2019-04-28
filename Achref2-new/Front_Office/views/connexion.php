<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$client=new Client($_POST['adresse'],$_POST['password'],$conn);
$u=$client->Logedin($conn,$_POST['adresse'],$_POST['password']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['adresse']) && !empty($_POST['password'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['adresse']==$_POST['adresse'] && $t['password']==$_POST['password']){
		
		session_start();
		$_SESSION['l']=$_POST['adresse'];
		$_SESSION['p']=$_POST['password'];
		
		$_SESSION['r']=$t['prenom'];
		$_SESSION['m']=$t['nom'];
		header("location:index1.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Email or Password incorrect \')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=login.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="login.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>