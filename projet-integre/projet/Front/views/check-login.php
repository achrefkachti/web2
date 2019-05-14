<?php
include "../config.php";
if(!isset($_SESSION))
{
session_start();
}

$uName = $_POST['username'];
$pWord = $_POST['password'];
$qry = "SELECT * FROM clients WHERE username='".$uName."' and password='".$pWord."'";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row=mysql_fetch_assoc($res);

if( $num_row == 1 ) {
	echo 'true';
	$_SESSION['uname']=$row['username'];
	header('location:chat.php');
}
else {
	echo 'false';
}
?>
