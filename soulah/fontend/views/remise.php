<?php
include "../entities/coupon.php";
include "../core/couponC.php";
$couponC=new couponC();	

if(isset($_POST['apply'])){


	$x=$_POST['nomc'];

$listecoupon=$couponC->getcode($x);
foreach ($listecoupon as $row ) {
	echo $row['valeur'];

}
//var_dump($listecoupon);
//echo "<META http-equiv='refresh' content='0;URL=panierFE.php'>";
/*if($listecoupon)
{}*/
}

//var_dump($_POST['nomcc']);
?>