<?php
class Database
{   
   
   public function connexion()
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="achref";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		return $conn;
	}
}
?>