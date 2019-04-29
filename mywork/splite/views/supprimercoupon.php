<?PHP
include "../core/couponC.php";
$coupon=new couponC();

if (isset($_POST["idC"])){
    $coupon->supprimercoupon($_POST["idC"]);
header('Location: panierBE.php');
}

?>