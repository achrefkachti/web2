<?php
include("config.php");
session_start();

$uName = $_POST['username'];
$pWord = $_POST['password'];
$qry = "SELECT * FROM user WHERE regusername='".$uName."' and regpassword='".$pWord."'";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row=mysql_fetch_assoc($res);

if( $num_row == 1 ) {
	echo 'true';
	$_SESSION['uname']=$row['regusername'];
	header('location:chat.php');
}
else {
	echo 'false';
}
?>
