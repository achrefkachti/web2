<?PHP
session_start();
    include "../entities/carte.php";
include "../core/carteC.php";
include "../entities/client.php";
include "../core/clientC.php";
include "../entities/produit.php";
include "../core/produitC.php";
include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/coupon.php";
include "../core/couponC.php";
include "../core/transC.php";
include "../core/categorieC.php";
include "../core/commentaireC.php";


$panierC=new panierC();
$listepanier=$panierC->afficherprod();

$tot=0;
 $extot=0;
$produit1C=new produitC();
$listeProduits1=$produit1C->afficherProduits1();

$categorie1C=new categorieC();
$listeCategories=$categorie1C->afficherCategories();

//var_dump($listeEmployes->fetchAll());
?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.devitems.com/ee/ee-v1/single-product-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:50:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    
    <!-- CSS
    ============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/font.css">

    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!-- Header Section Start -->
<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one header-top-border pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-10 mb-10">
                    <!-- Header Links Start -->
                    <div class="header-links">
                        <a href="checkout.php"><img src="assets/images/icons/car.png" alt="Car Icon"> <span>Track your order</span></a>
                        <a href="store.html"><img src="assets/images/icons/marker.png" alt="Car Icon"> <span>Locate Store</span></a>
                    </div><!-- Header Links End -->
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    <!-- Header Advance Search Start -->
                    <div class="header-advance-search">

                        <form action="#">
                            <div class="input"><input type="text" placeholder="Search your product"></div>
                            
                            <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                        </form>

                    </div><!-- Header Advance Search End -->
                </div>

                <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links">
                         <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                     <?php


$clientC=new clientC();
  $carteC=new carteC();
    $result=$clientC->recherchercd($_SESSION['username']);
    $result1=$carteC->recherchercr($_SESSION['username']);

if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
{   
   ?> 
   
   <div class="header-account-links">
 <a href="#"><i class="icofont icofont-user-alt-7"></i> <span><?php echo $_SESSION['username']; ?></span></a>
 </div>

<?php
foreach ($result1 as $row ) {
    # code...

if($row['confirme']==0 ) {?>
<div class="header-account-links">
 <a href="editt.php"><i class="far fa-id-card"></i> <span>Not-confirmed</span></a>
 </div>
<?php } ?>
<?php if($row['confirme']==1) {?>
<div class="header-account-links">
 <a href="pdf_eventt.php"><i class="far fa-id-card"></i> <span>Confirmed</span></a>
 </div>
<?php } }?>
<?php 
foreach ($result as $row ) {
    # code...

if($row['cf']==0) {?>
<div class="header-account-links">
 <a href="crt.php"><i class="icofont icofont-user-alt-7"></i> <span>get cart</span></a>
 </div>
<?php } }?>



  <!-- <a class="btn btn-lg btn-primary m-b-5 m-t-5" href="modifier.php"> <?php echo $_SESSION['username']; ?> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
  <!-- <a id="heading" href="carte.php"><i class="far fa-address-card" aria-hidden="true"></i> <span>carte</span></a>
   &nbsp;&nbsp;&nbsp;&nbsp;-->
   <div class="header-account-links">
   <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span></a>

</div>
  <!-- <a id="heading" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span></a> -->
    <?php 
    
}

else { ?>
    <div class="header-account-links">
        <a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Login</span></a>
</div>

    
    
      <?php

}   ?>
      


                    </div><!-- Header Account Links End -->
                </div>
            
            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-15 mb-15">
                    <!-- Logo Start -->
                    <div class="header-logo">
                        <a href="index.html">
                          <img id="logo1" src="assets/images/log.png" alt="Ariana Scooters">

                      <!--      <img class="theme-dark" src="assets/images/log.png" alt="Ariana Scooters"> -->
                        </a>
                    </div><!-- Logo End -->
                </div>

                <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                    <!-- Main Menu Start -->

                    <div class="main-menu">
                        <nav>
                            <ul>

                                <li class="active"><a href="index.html">HOME</a>
                                   
                                </li>
                                <li class="menu-item-has-children"><a href="shop.php">Shop</a>
                                    <ul class="sub-menu">
                                        <li class=""><a href="scooter.php">Scooter</a>
                                        </li>
                                        <li class=""><a href="velo.php">Velo</a>
                                        </li>
                                        <li class=""><a href="accessories.php">Accessoires</a>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">EVENEMENTS</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Column One</a>
                                            <ul>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="banner.html">Banner</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                 <li class="menu-item-has-children active" ><a href="blog-3-column.html">SAV</a>
                                    <ul class="sub-menu">
                                        <li><a href="retour.php">Politique du retour</a></li>
                                        <li><a href="ajouterFormulaire.php">Ajouter Réclamation</a></li>
                                        <li class="active"><a href="afficherFormulaire.php">Afficher vos Réclamations</a></li>
                                        <li><a href="afficherSuivie.php">Afficher les Suivies</a></li>
                                        <li><a href="ajouterAvis.php">Vos Avis</a></li>
                                    </ul>
                                </li>
                                <li><a href="aboutus.html">ABOUT US</a></li>
                            </ul>
                        </nav>
                    </div><!-- Main Menu End -->
                </div>
 <div class="col order-2 order-lg-12 order-xl-12">
                    <!-- Header Shop Links Start -->
                    <div class="header-shop-links">

                        <!-- Compare -->
                        <!-- Wishlist -->
                        <a href="wishlist.php" class="header-wishlist"><i class="ti-heart"></i> </a>
                        <!-- Cart -->
                        <a href="cart.php" class="header-cart"><i class="ti-shopping-cart"></i>
                          <span class="number"><?php echo $foxtrot;?></span>

                        </a>

                    </div><!-- Header Shop Links End -->
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Bottom End -->

    <!-- Header Category Start -->
  
</div><!-- Header Section End -->

<!-- Mini Cart Wrap Start -->
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">    
      
        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>
        
    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <?php 

                                                    foreach( $listepanier as $row )
                                                        { 
        
                                                            ?>
        <li>
            <a class="image"><img src="<?php echo $row['img']; ?>" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title"><?php echo $row['nomprod']; ?></a>
                <span class="price"> <?php echo $row['prix']; ?> </span>
                <span class="qty"><?php echo $row['quantite']; ?></span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <?php
                                                            $tot+=$row['total'];
                                                          }
                                            ?>
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">    
    
        <h4 class="sub-total">Total: <span><?php echo $tot."DT"; ?></span></h4>

        <div class="button">
            <a href="checkout.php">CHECK OUT</a>
        </div>
         <div class="button">
            <a href="cart.php">CART</a>
        </div>
        
    </div>     

</div><!-- Mini Cart Wrap End -->

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Product Details</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Product Details</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
            <div class="banner"><a href="#"><img src="assets/images/banner/scooter3.jpeg" alt="Banner"></a></div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
            <div class="banner"><a href="#"><img src="assets/images/banner/banner-14.jpg" alt="Banner"></a></div>
        </div>

    </div>
</div><!-- Page Banner Section End -->

<!-- Single Product Section Start -->
<div class="product-section section mt-90 mb-90">
    <div class="container">

                                        <?PHP

if (isset($_GET['id'])){

    $result=$produit1C->recupererProduit($_GET['id']);
    foreach($result as $row){
        
        $nom=$row['nom'];
        $refe=$row['refe'];
       $com1C=new comC();
$listeCommentaires1=$com1C->recupercom($refe);

        $couleur=$row['couleur'];
        $categorie=$row['categorie'];
        $quantite=$row['quantite'];
        $prix=$row['prix'];
        $img=$row['img'];
        
?>
        
        <div class="row mb-40">
                    
            <div class="col-lg-6 col-12 mb-50">

                <!-- Image -->
                <div class="single-product-image thumb-left">

                    <div class="tab-content">
                        <div id="single-image-1" class="tab-pane fade show active big-image-slider">
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-1.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-2.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-3.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                        <div id="single-image-2" class="tab-pane fade big-image-slider">
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-7.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-9.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-9.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                        <div id="single-image-3" class="tab-pane fade big-image-slider">
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-13.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-14.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="<?php echo $img ?>" alt="Big Image"><a href="assets/images/single-product/big-15.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                    </div>
                    
                <!--    <div class="thumb-image-slider nav" data-vertical="true">
                        <a class="thumb-image active" data-toggle="tab" href="#single-image-1"><img src="assets/images/single-product/thumb-1.png" alt="Thumbnail Image"></a>
                        <a class="thumb-image" data-toggle="tab" href="#single-image-2"><img src="assets/images/single-product/thumb-2.png" alt="Thumbnail Image"></a>
                        <a class="thumb-image" data-toggle="tab" href="#single-image-3"><img src="assets/images/single-product/thumb-3.png" alt="Thumbnail Image"></a>
                    </div>-->

                </div>

            </div>
                    
            <div class="col-lg-6 col-12 mb-50">

                <!-- Content -->
                <div class="single-product-content">

                    <!-- Category & Title -->
                    <div class="head-content">

                        <div class="category-title">
                            <a href="#" class="cat"><?php echo $refe;?></a>
                            <h5 class="title"><?php echo $nom;?></h5>
                        </div>

                        <h5 class="price"<?php echo $prix.',000DT';?></h5>

                    </div>
 
                    <div class="single-product-description">

            <div class="ratting">

                           
                            
                 <?php 
                    $bdd = new PDO('mysql:host=127.0.0.1;dbname=web;charset=utf8','root','');
                    
        if(isset($_POST['noter'])) {
                
     
            $rating =$_POST['rating'];
            $ins = $bdd->prepare('INSERT INTO etoile (refe, username, nbetoile) VALUES (?,?,?)');
              
if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
{   
   
            $ins->execute(array($refe,$_SESSION['username'],$rating));
        }
            $i = 1;?>
                            Your Rating
            <span class="wrap-rating fs-18 cl11 pointer">
                <?php
while ($i <= $rating) {
    $i++;
    
    ?>
                
    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                <?php
        }
        }  else{    
            ?>
                </span>
                                    
                    
                        
                                <form action="#" method="POST">
                                                        Your Rating
                                                    
                                                    <span class="wrap-rating fs-18 cl11 pointer">
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <input class="dis-none" type="number" name="rating" >
                                                        <input type="submit" value="Noter" name="noter" />

 </span>
                                </form>
                               
                            
                    <?php }  
                    
                   
   $result=$categorie1C->recupererCategorie($_GET['id']);
    foreach($result as $row){
        
        
                                                     

                                                        $description=$row['description'];
        
        ?>               
                                                          
                        <div class="desc">
                           <input type="text" value="<?php echo $description;?>"></div>
                        </div>
                        

 <?php                       
} ?> 

                        <span class="availability">Availability: <span>In Stock</span></span>
                        
                        <div class="quantity-colors">
                            
                            <div class="quantity">
                                <h5>Quantity</h5>
                                <div class="pro-qty"><input type="text" value="<?php echo $quantite;?>"></div>
                            </div>                            
                            
                            <div class="colors">
                                <h5>Color</h5>
                                <select class="nice-select">
                                    <option><?php echo $couleur;?></option>
                                    <option>red</option>
                                    <option>black</option>
                                    <option>yellow</option>
                                    <option>grey</option>
                                </select>
                            </div>                            
                            
                        </div> 

                        <div class="actions">
                                <div class="cart">

                                <input type="hidden" name="nomp" value="<?php echo $nom ;?>">
                                            <input type="hidden" name="prixp" value="<?php echo $prix ;?>">
                                            <input type="hidden" name="imgp" value="<?php echo $img ;?>">
                                            <input type="hidden" name="quantitep" value="1">
                           <a style="background-color: white;" href="ajouterpanier.php?refe=<?php echo $refe ;?>&nom=<?php echo $nom ;?>&prix=<?php echo $prix ;?>&img=<?php echo $img ;?>&quantite=<?php echo $quantite ;?>"  class="btn btn-circle hover-theme ml-0 mb-10"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                             <a href="ajouterwish.php?refe=<?php echo $refe ;?>&nom=<?php echo $nom ;?>&prix=<?php echo $prix ;?>&img=<?php echo $img ;?>&quantite=<?php echo $quantite ;?>" class="btn btn-small btn-circle hover-theme mb-0"><i class="ti-heart"></i></a>
                 </div>

                           <div class="wishlist">
                              
                            </div>

                        </div>

                        </div>





          </div>

                </div>
        
    </div>
<?php }}?>
</div>
                                    <div class="mt-4 product-spec">
    <?php
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=web;charset=utf8','root','');
        if(isset($_POST['submit_commentaire'])) {

 if( isset ($_SESSION['username']) ){

      if(isset($_POST['commentaire'])  AND !empty($_POST['commentaire'])) {
        
           $commentaire = htmlspecialchars($_POST['commentaire']);
        
        
            $ins = $bdd->prepare('INSERT INTO  commentaires (commentaire,user,refe) VALUES (?,?,?)'); 
            $ins->execute(array($_POST['commentaire'],$_SESSION['username'],$refe));
            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
            echo "<META http-equiv='refresh' content='0;URL=page.php?id=$refe'>";
            
         } 
       else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }
}
else
                echo "<script >alert('connectiiiiii')</script>";

  }
   $commentaires = $bdd->prepare('SELECT * FROM commentaires ORDER BY id DESC');
  
   
   ?>




                            <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Commentaires</h4>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST" action="#">
                                                
                                                
                                                <div class="form-group">
                                                    <div class="row ">
                                                        <label class="col-sm-3">Message</label>
                                                        <div class="col-sm-9">
                                                            <textarea rows="5" class="form-control" name="commentaire"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="btn-list text-right">
                                                    
                                                    <input type="submit" class="btn btn-primary btn-space m-t-5" name="submit_commentaire"> 
                                                    <input type="hidden" name="refe" value="<?php echo $refe;?>">

                                                </div>

            <?php if(isset($c_msg)) { echo $c_msg; } ?>
<br /><br />
<?php
foreach($listeCommentaires1 as $row){?>

   <b><?php echo $row['user']; ?>:</b> <?php echo $row['commentaire'];?><br /> 
<?php } ?>




                                            </form>
                                        </div>
                                       

                                       
                                    </div>
                                </div>
                                        </div><!-- Single Product Section End -->

<!-- Related Product Section Start -->
<div class="product-section section mb-70">
    <div class="container">
        <div class="row">
            
            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="RELATED PRODUCT"><h1>RELATED PRODUCT</h1></div>
            </div><!-- Section Title End -->
            
            <!-- Product Tab Content Start -->
            <div class="col-12">
                        
                <!-- Product Slider Wrap Start -->
                <div class="product-slider-wrap product-slider-arrow-one">

                    <!-- Product Slider Start -->
                    <div class="product-slider product-slider-4">
 <?php foreach ($listeProduits1 as $row ) {?>
                        <div class="col pb-20 pt-10">
                           

                            <!-- Product Start -->
                            <div class="ee-product">
                                

                                <!-- Image -->
                                <div class="image">

                                    <a href="single-product.html" class="img"><img src=" <?PHP echo $row['img'];?>" alt="Product Image"></a>

                                    <div class="wishlist-compare">
                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                    </div>

                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                </div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Category & Title -->
                                    <div class="category-title">

                                        <a href="#" class="cat">Laptop</a>
                                        <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price">$295.00</h5>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                    </div>

                                </div>

                            </div><!-- Product End -->
                           
                        </div>
                         <?php
                             }    ?>

                       


                        

                    </div><!-- Product Slider End -->
                </div><!-- Product Slider Wrap End -->
                        
            </div><!-- Product Tab Content End -->
            
        </div>
    </div>
</div><!-- Related Product Section End -->

<!-- Brands Section Start -->
<div class="brands-section section mb-90">
    <div class="container">
        <div class="row">
            
            <!-- Brand Slider Start -->
            <div class="brand-slider col">
                <div class="brand-item col"><img src="assets/images/brands/brand-1.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-2.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-3.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-4.png" alt="Brands"></div>
                <div class="brand-item col"><img src="assets/images/brands/brand-5.png" alt="Brands"></div>
            </div><!-- Brand Slider End -->
            
        </div>
    </div>
</div><!-- Brands Section End -->

<!-- Subscribe Section Start -->
<div class="subscribe-section section bg-gray pt-55 pb-55">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Mailchimp Subscribe Content Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">
                <div class="subscribe-content">
                    <h2>SUBSCRIBE <span>OUR NEWSLETTER</span></h2>
                    <h2><span>TO GET LATEST</span> PRODUCT UPDATE</h2>
                </div>
            </div><!-- Mailchimp Subscribe Content End -->
            
            
            <!-- Mailchimp Subscribe Form Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">
                
                <form id="mc-form" class="mc-form subscribe-form" >
                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email here" />
                    <button id="mc-submit">subscribe</button>
                </form>
                <!-- mailchimp-alerts Start -->
                <div class="mailchimp-alerts text-centre">
                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                </div><!-- mailchimp-alerts end -->
                
            </div><!-- Mailchimp Subscribe Form End -->
            
        </div>
    </div>
</div><!-- Subscribe Section End -->

<!-- Footer Section Start -->
<div class="footer-section section bg-ivory">
   
    <!-- Footer Top Section Start -->
    <div class="footer-top-section section pt-90 pb-50">
        <div class="container">
            
            <div class="row">
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">CONTACT INFO</h4>
                        
                        <p class="contact-info">
                            <span>Address</span>
                            You address will be here <br>
                             Lorem Ipsum text                        </p>
                        
                        <p class="contact-info">
                            <span>Phone</span>
                            <a href="tel:01234567890">01234 567 890</a>
                            <a href="tel:01234567891">01234 567 891</a>
                        </p>
                        
                        <p class="contact-info">
                            <span>Web</span>
                            <a href="mailto:info@example.com">info@example.com</a>
                            <a href="#">www.example.com</a>
                        </p>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">CUSTOMER CARE</h4>
                        
                        <ul class="link-widget">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Cart</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">INFORMATION</h4>
                        
                        <ul class="link-widget">
                            <li><a href="#">Track your order</a></li>
                            <li><a href="#">Locate Store</a></li>
                            <li><a href="#">Online Support</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Payment</a></li>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="#">Gift coupon</a></li>
                            <li><a href="#">Special coupon</a></li>
                        </ul>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-md-6 col-12 mb-40">
                    <div class="footer-widget">
                       
                        <h4 class="widget-title">LATEST TWEET</h4>
                        
                        <div class="footer-tweet"></div>
                        
                    </div>
                </div><!-- Footer Widget End -->
                
            </div>
            
        </div>
    </div><!-- Footer Bottom Section Start -->
   
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section">
        <div class="container">
            <div class="row">
                
                <!-- Footer Copyright -->
                <div class="col-lg-6 col-12">
                    <div class="footer-copyright"><p>&copy; Copyright, All Rights Reserved by <a href="#">E&E</a></p></div>
                </div>
                
                <!-- Footer Payment Support -->
                <div class="col-lg-6 col-12">
                    <div class="footer-payments-image"><img src="assets/images/payment-support.png" alt="Payment Support Image"></div>
                </div>
                
            </div>
        </div>
    </div><!-- Footer Bottom Section Start -->
    
</div><!-- Footer Section End -->


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
    <script src="vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function(){
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    
    </script>
<!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>


</body>


<!-- Mirrored from demo.devitems.com/ee/ee-v1/single-product-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:50:57 GMT -->
</html>