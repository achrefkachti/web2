<?PHP
session_start();
include '../entities/produit.php';
include "../core/produitC.php";
include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/coupon.php";
include "../core/couponC.php";
include "../core/transC.php";



$panierC=new panierC();
$listepanier=$panierC->afficherprod();
  $qt='';
              $nom='';
               $prix='';
                $img='';
$tot=0;
 $extot=0;
$produit1C=new produitC();
$listeProduits=$produit1C->afficherProduits();
$_SESSION['id']="3";
$_SESSION['username']="soulah";
$maction='something';

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
                        <a href="register.html"><i class="icofont icofont-user-alt-7"></i> <span>my account</span></a>
                        <a href="login.html"><i class="icofont icofont-login d-none"></i> <span>Login</span></a>
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
                        <a href="index.php">
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

                                <li class="active"><a href="index.php">HOME</a>
                                   
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
                        <a href="cart.php" class="header-cart"><i class="ti-shopping-cart"></i></a>

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
            <form method="POST" action="supprimerprod.php">
            <button type="submit" class="remove"><i class="fa fa-trash-o"></i></button>
            <input type="hidden" value="<?php echo $row['idp']; ?>" name="idp_supp"></form>
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
            <div class="banner"><a href="#"><img src="assets/images/banner/banner-15.jpg" alt="Banner"></a></div>
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
        $couleur=$row['couleur'];
        $type=$row['type'];
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
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                        <div class="desc">
                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora inform </p>
                        </div>
                        
                        <span class="availability">Availability: <span>In Stock</span></span>
                        
                        <div class="quantity-colors">
                            
                            <div class="quantity">
                                <h5>Quantity</h5>
                                <div class="pro-qty"><input type="text" value="1"></div>
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
                        
                        <div class="tags">
                            
                            <h5>Tags:</h5>
                            <a href="#">Electronic</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Phone</a>
                            <a href="#">Charger</a>
                            <a href="#">Powerbank</a>
                            
                        </div>
                        
                        <div class="share">
                            
                            <h5>Share: </h5>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            
                        </div>

                    </div>

                </div>

            </div>
            
        </div>
        <?php }}?>

        
        <div class="row">
            
            <div class="col-lg-10 col-12 ml-auto mr-auto">
                
                <ul class="single-product-tab-list nav">
                    <li><a href="#product-description" class="active" data-toggle="tab" >description</a></li>
                    <li><a href="#product-specifications" data-toggle="tab" >specifications</a></li>
                    <li><a href="#product-reviews" data-toggle="tab" >reviews</a></li>
                </ul>
                
                <div class="single-product-tab-content tab-content">
                    <div class="tab-pane fade show active" id="product-description">
                        
                        <div class="row">
                            <div class="single-product-description-content col-lg-8 col-12">
                                <h4>Introducing Flex 3310</h4>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in</p>
                                <h4>Stylish Design</h4>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                <h4>Digital Camera, FM Radio & many more...</h4>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                            </div>
                            <div class="single-product-description-image col-lg-4 col-12">
                                <img src="assets/images/single-product/description.png" alt="description">
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="product-specifications">
                        <div class="single-product-specification">
                            <ul>
                                <li>Full HD Camcorder</li>
                                <li>Dual Video Recording</li>
                                <li>X type battery operation</li>
                                <li>Full HD Camcorder</li>
                                <li>Dual Video Recording</li>
                                <li>X type battery operation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-reviews">
                       
                        <div class="product-ratting-wrap">
							<div class="pro-avg-ratting">
								<h4>4.5 <span>(Overall)</span></h4>
								<span>Based on 9 Comments</span>
							</div>
							<div class="ratting-list">
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>(5)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<span>(3)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(1)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(0)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(0)</span>
								</div>
							</div>
							<div class="rattings-wrapper">
							
								<div class="sin-rattings">
									<div class="ratting-author">
										<h3>Cristopher Lee</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
									</div>
									<p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
								</div>
								
								<div class="sin-rattings">
									<div class="ratting-author">
										<h3>Nirob Khan</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
									</div>
									<p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
								</div>
								
								<div class="sin-rattings">
									<div class="ratting-author">
										<h3>MD.ZENAUL ISLAM</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
									</div>
									<p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
								</div>
								
							</div>
							<div class="ratting-form-wrapper fix">
								<h3>Add your Comments</h3>
								<form action="#">
								    <div class="ratting-form row">
										<div class="col-12 mb-15">
											<h5>Rating:</h5>
											<div class="ratting-star fix">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="col-md-6 col-12 mb-15">
                                            <label for="name">Name:</label>
                                            <input id="name" placeholder="Name" type="text">
										</div>
										<div class="col-md-6 col-12 mb-15">
                                            <label for="email">Email:</label>
                                            <input id="email" placeholder="Email" type="text">
										</div>
										<div class="col-12 mb-15">
											<label for="your-review">Your Review:</label>
											<textarea name="review" id="your-review" placeholder="Write a review"></textarea>
										</div>
										<div class="col-12">
											<input value="add review" type="submit">
										</div>
								    </div>
								</form>
							</div>
						</div>
                        
                    </div>
                </div>
                
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

                        <div class="col pb-20 pt-10">
                            <!-- Product Start -->
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">

                                    <a href="single-product.html" class="img"><img src="assets/images/product/product-1.png" alt="Product Image"></a>

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

                        <div class="col pb-20 pt-10">
                            <!-- Product Start -->
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">

                                    <span class="label sale">sale</span>

                                    <a href="single-product.html" class="img"><img src="assets/images/product/product-2.png" alt="Product Image"></a>

                                    <div class="wishlist-compare">
                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                    </div>
                                    <form action="ajouterpanier.php">
                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                    </form>
                                </div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Category & Title -->
                                    <div class="category-title">

                                        <a href="#" class="cat">Drone</a>
                                        <h5 class="title"><a href="single-product.html">Aquet Drone D 420</a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price"><span class="old">$350</span>$275.00</h5>
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

</body>


<!-- Mirrored from demo.devitems.com/ee/ee-v1/single-product-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:50:57 GMT -->
</html>