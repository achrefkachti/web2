<?PHP
include "../core/wishC.php";
$wish=new wishC();
if (isset($_POST["sup"])){
    $wish->supprimer($_POST["sup"]);
header('Location: wishlist.php');
}
