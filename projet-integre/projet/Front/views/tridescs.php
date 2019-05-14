

<?PHP
session_start ();  
include "../core/produitC.php";
include "../core/etoileC.php";
include '../entities/produit.php';
include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/coupon.php";
include "../core/couponC.php";
include "../core/transC.php";
include "../entities/client.php";
include "../core/clientC.php";
include "../entities/carte.php";
include "../core/carteC.php";
$etoileC=new etoileC();
$produit1C=new produitC();
$listeProduits=$produit1C->afficherProduits();

$panierC=new panierC();
$listepanier=$panierC->afficherprod();
  $qt='';
              $nom='';
               $prix='';
                $img='';
$tot=0;
 $extot=0;
$nb=$panierC->countp();
foreach ($nb as $key ) {
    $foxtrot=$key['a'];
}

$maction='something';

//var_dump($listeEmployes->fetchAll());
?>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM produit WHERE CONCAT(nom, refe) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SElECT * From produit p inner join categorie c  ON  p.refe= c.refe and c.affichage='oui' and p.categorie='scooter' ORDER BY prix DESC";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "web");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.devitems.com/ee/ee-v1/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:50:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    
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

                        <form action="shop.php"  method="post">
                            <div class="input"><input type="text" placeholder="Search your product"  name="valueToSearch"></div>
                            
                            <div class="submit"><button type="submit" name="search"><i class="icofont icofont-search-alt-1"></i></button></div>
                        </form>

                    </div><!-- Header Advance Search End -->
                </div>

                <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                  <?php
                    
                     
                     

  $clientC=new clientC();
  $carteC=new carteC();
 
    


 if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
{  ?>

   <div class="header-account-links">
   <a href="edit.php"><i class= "icofont icofont-user-alt-7" aria-hidden="true"></i><?php echo $_SESSION['username']; ?><span> </span></a>

</div> 
<?php
   $result=$clientC->recherchercd($_SESSION['username']);
    $result1=$carteC->recherchercr($_SESSION['username']);
    
foreach ($result1 as $row ) {


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

else if (!isset($_SESSION['username']) && !isset($_SESSION['password']))  {  ?>
     <div class="header-account-links">
                        <a href="register.html"><i class="icofont icofont-user-alt-7"></i> <span>my account</span></a>
                        <a href="login.html"><i class="icofont icofont-login d-none"></i> <span>Login</span></a>
                    </div>
    
    
      <?php


}  ?>

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
                                        <li class=""><a href="accesoires.php">Accessoires</a>
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
                                <li class="menu-item-has-children"><a href="blog-3-column.html">SAV</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-1-column-left-sidebar.html">Politique de retour</a></li>
                                        <li><a href="blog-1-column-right-sidebar.html">Ajouter Formulaire</a></li>
                                        <li><a href="blog-2-column-left-sidebar.html">Supprimer Formulaire</a></li>
                                        <li><a href="blog-2-column-right-sidebar.html">Afficher vos Suivies</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
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
                <h1>SHOP Grid VIEW</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">SHOP Grid VIEW</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
            <div class="banner"><a href="#"><img src="assets/images/banner/scooter1.jpeg" alt="Banner"></a></div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
            <div class="banner"><a href="#"><img src="assets/images/banner/scooter4.jpeg" alt="Banner"></a></div>
        </div>

    </div>
</div><!-- Page Banner Section End -->

<!-- Feature Product Section Start -->
<div class="product-section section mt-90 mb-40">
    <div class="container">
        <div class="row">
           
            <div class="col-xl-9 col-lg-8 col-12 order-lg-2 mb-50">
                
                <div class="row mb-50">
                    <div class="col">
                       
                        <!-- Shop Top Bar Start -->
                        <div class="shop-top-bar with-sidebar">

                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                            </div>

                            <!-- Product Showing -->
                            <div class="product-showing">
                                <p>Showing</p>
                                <select name="showing" class="nice-select">
                                    <option value="1">8</option>
                                    <option value="2">12</option>
                                    <option value="3">16</option>
                                    <option value="4">20</option>
                                    <option value="5">24</option>
                                </select>
                            </div>

                            <!-- Product Short -->
                            <div class="product-short">
                                <p>Short by</p>
                                <select name="sortby" class="nice-select"  onChange="location.href=''+this.options[this.selectedIndex].value+'.php';">
                                    
                                    <option value="ratings">Best rated</option>
                                    <option value="triascs">Price: low to high</option>
                                    <option value="tridescs">Price: high to low</option>
                                </select>
                            </div>

                            <!-- Product Pages -->
                            <div class="product-pages">
                                <p>Pages 1 of 25</p>
                            </div>

                        </div><!-- Shop Top Bar End -->
                        
                    </div>
                </div>
                
                <!-- Shop Product Wrap Start -->
                <!-- Shop Product Wrap Start -->
                <div class="shop-product-wrap grid with-sidebar row">
                    <?php while($row = mysqli_fetch_array($search_result)): ?>
                    <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                       
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="product-detail.php?id=<?php echo $row['refe'] ?>" class="img"><img src="<?PHP echo $row['img'];?>" alt="Product Image"></a>

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

                                    <a href="#" class="cat"><?PHP echo $row['nom']; ?></a>
                                    <h5 class="title"><a href="single-product.html"><?PHP echo $row['refe']; ?></a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><?PHP echo $row['prix'].",000 DT"; ?></h5>
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
                        
                        <!-- Product List Start -->
                        <div class="ee-product-list">

                            <!-- Image -->
                            <div class="image">

                                <a href="product-detail.php?id=<?php echo $row['refe'] ?>" class="img"><img src="<?PHP echo $row['img'];?>" alt="Product Image"></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="head-content">

                                    <div class="category-title">
                                        <a href="#" class="cat"><?PHP echo $row['refe']; ?></a>
                                        <h5 class="title"><a href="single-product.html"><?PHP echo $row['nom']; ?></a></h5>
                                    </div>
                                    
                                    <h5 class="price"><?PHP echo $row['prix'].",000 DT"; ?></h5>

                                </div>
                                
                                <div class="left-content">
                                   
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    
                                    <div class="desc">
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                                    </div>
                                    
                                    <div class="actions">

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="right-content">
                                    <div class="specification">
                                        <h5>Specifications</h5>
                                        <ul>
                                            <li>Intel Core i7 Processor</li>
                                            <li>Zeon Z 170 Pro Motherboad</li>
                                            <li>16 GB RAM</li>
                                        </ul>
                                    </div>
                                    <span class="availability">Availability: <span>In Stock</span></span>
                                </div>

                            </div>

                        </div><!-- Product List End -->          
                    </div>
<?php endwhile;
                                ?>
                    

                
                    
                </div><!-- Shop Product Wrap End -->
                
                <div class="row mt-30">
                    <div class="col">

                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i>Back</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li> - - - - - </li>
                            <li><a href="#">18</a></li>
                            <li><a href="#">18</a></li>
                            <li><a href="#">20</a></li>
                            <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
                
            </div>
            
            <div class="shop-sidebar-wrap col-xl-3 col-lg-4 col-12 order-lg-1 mb-15">
                
                <div class="shop-sidebar mb-35">
                   
                    <h4 class="title">CATEGORIES</h4>
                    
                    <ul class="sidebar-category">
                        <li><a href="#">2 Roues</a>
                            <ul class="children">
                                <li><a href="scooter.php">Scooter</a></li>
                                <li><a href="velo.php">Velo</a></li>
                            </ul>
                        </li>
                        <li><a href="accesoires.php">Accessoires</a></li>
                        <li><a href="pieces.php">Piéces de rechange </a></li>
                    </ul>
                    
                </div>
                
               
                
                <div class="shop-sidebar mb-35">

                   
                    <h4 class="title">Price</h4>
                    <form name="f" action="shop2.php" method="post">
                    <div class="sidebar-price">

                       <input type="number" name="min" onblur="verifmin(this);">
                        <input type="number" name="max" onblur="verifmax(this);">
                    </div>
                    
                      <div class="col-12 mb-30"><input type="submit" name="rechercher" value="rechercher" ></div>
                    </form>
                </div>
                
                <div class="shop-sidebar mb-35">
                   
                    <div class="banner"><a href="#"><img src="assets/images/banner/banne.jpg" alt="Banner"></a></div>
                    
                </div>
                
                <div class="shop-sidebar mb-35">
                   
                    <h4 class="title">Couleur</h4>
                    
                    <ul class="sidebar-brand">
                        <li><a href="couleurB.php">Bleu</a></li>
                        <li><a href="#">Blanc</a></li>
                        <li><a href="#">Rouge</a></li>
                        <li><a href="#">Noire</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    
                </div>
                
                <div class="shop-sidebar mb-35">
                   
                    <h4 class="title">Marques</h4>
                    
                    <div class="sidebar-tags">
                        <a href="peugeot.php">Peugeot</a>
                        <a href="ipon.php">Ipon</a>
                        <a href="#">Trimer</a>
                        <a href="#">Smart Watch</a>
                        <a href="#">Play Station</a>
                        <a href="#">Oven</a>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div><!-- Feature Product Section End -->

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

</body>


<!-- Mirrored from demo.devitems.com/ee/ee-v1/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:50:30 GMT -->
</html>