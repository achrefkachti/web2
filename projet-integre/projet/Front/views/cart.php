<?PHP 
session_start();

include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/coupon.php";
include "../core/couponC.php";
include "../core/transC.php";

                              $couponC=new couponC();



$panierC=new panierC();
$listepanier=$panierC->afficherprod();
$nb=$panierC->countp();
foreach ($nb as $key ) {
    $foxtrot=$key['a'];
}
$tot=0;
 $extot=0;?>



<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.devitems.com/ee/ee-v1/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:51:15 GMT -->
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

<?PHP 
                        if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
{  ?>
                    <div class="header-account-links">
                        <a href="#"><i class="icofont icofont-user-alt-7"></i> <span><?php echo $_SESSION['username']; ?></span></a>
                        <a href="logout.php"><i class="icofont icofont-login d-none"></i> <span>Logout</span></a>
                    </div><!-- Header Account Links End -->
<?PHP } ?>


<?PHP if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) 
                        { ?>
                               <div class="header-account-links">
                        <a href="register.html"><i class="icofont icofont-user-alt-7"></i> <span>my account</span></a>
                        <a href="login.html"><i class="icofont icofont-login d-none"></i> <span>Login</span></a>
                    </div>
                            <?PHP } ?>
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
                          <img src="assets/images/log.gif" alt="Ariana Scooters">

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
                                        <li><a href="afficher_event.php">A venir</a>
                                            <ul>
                                                <li><a href="galerie.php">Galerie</a></li>
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

<!-- Mini Cart Wrap End --> 

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Page Banner Section Start -->


<!-- Cart Page Start -->
<div class="page-section section pt-90 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
               
                    <!-- Cart Table -->
                    <div class="cart-table table-responsive mb-40">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">ID Panier</th>
                                    <th class="pro-price">Produit</th>
                                    <th class="pro-quantity">Prix</th>
                                    <th class="pro-subtotal">Quantite</th>
                                    <th class="pro-remove">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody> <?php 

                                                    foreach( $listepanier as $row )
                                                        { 
        
                                                            ?>
                                <form method="POST">
                                
                           
                                <tr>
                                    
                                    <td class="pro-thumbnail"><img src="<?php echo $row['img']; ?>" alt="Product" style="width:200px;height:200px;" ></td>
                                    <td class="pro-title"><?php echo $row['idp']; ?></td>
                                    <td class="pro-price"><?php echo $row['nomprod']; ?></td>
                                    <td class="pro-quantity"><div class="pro-qty"><input type="text" name="quantitee" value="<?php echo $row['quantite'];?>"></div></td>
                                    <?php?>
                                    <td class="pro-subtotal"><?php echo $row['prix']; ?></td>
                                    <td >
                                 
                                        <input type="submit" style="background-color: white;" class="btn btn-small btn-circle hover-theme mb-30" name="Supprimer"  value="Supprimer">
                                        <input type="hidden" value="<?php echo $row['idp']; ?>" name="idp_supp">
                                    </td>
                                <td> 
                                    <input name="modifier" type="submit" value="Modifier" style="background-color: white;" class="btn btn-small btn-circle hover-theme mb-30" >
                                    <input type="hidden" value="<?php echo $row['idp']; ?>" name="btata">             
                                 </td>
                                     

                                


</tr>
</form>

                                                 <?php

                                     if(isset($_POST['Supprimer']))
                                     {
                                            $panierC->supprimerprod($_POST["idp_supp"]);
                                            echo "<META http-equiv='refresh' content='0;URL=cart.php'>";


                                     }
                                         

        else if (isset($_POST['modifier'])){
                            $hotel=$_POST['quantitee'];


$x=$hotel*$row['prix'];
    $panierC->modifierpanier($hotel,$x,$_POST['btata']);
 echo "<META http-equiv='refresh' content='0;URL=cart.php'>";
}
                                          
                                                            $tot+=$row['total'];
                                                          }
                                            ?>
                                       
                            </tbody>
  



                                      
                           
                        </table>
                    </div>

              
                    
                <div class="row">

                    <div class="col-lg-6 col-12 mb-15">
                        <!-- Calculate Shipping -->
                        <div class="calculate-shipping">
                            <h4>Demander un coupon</h4>
                            
                            <form method="POST">
                                <div class="row">
                                    
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="submit" name="demander" value="Demander">
                                    </div>
                                </div>
                            </form>
                            <?php
                             $what="empty";
                               $zulu = 5;
if (isset($_POST['demander'])) {
                        
  $transC = new transC();
  $x = $transC->count($_SESSION['username']);
  foreach($x as $row) {
    $xray = $row['a'];

    if ($xray <$zulu ) {
    echo "<script type='text/javascript'>";
            echo "alert('Vous ne beneficiez pas d un coupon');";
            echo "</script>";
    } else {
      $z = 0;
      $couponf = $couponC->firstfree($z);

      foreach($couponf as $row) {
        
        $what= $row['nomc'];
        $zulu=$zulu*2;
      }

    }
  }

}
?>

                        </div>


                        <!-- Discount Coupon -->

                        <div class="discount-coupon">
                            <h4>Discount Coupon Code</h4>
                            <form method="POST">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="text" value="<?php echo $what;?>" name="nomc" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="submit" name="apply" value="Apply Code">
                                    </div>
                                </div>
                            </form>
                              <?php
                                                               $extot=$tot;

if (isset($_POST['apply'])) {
    
    $x           = $_POST['nomc'];
    $listetat    = $couponC->verifetat($x);
    $etat        = 1;
    $listecoupon = $couponC->getcode($x);
    foreach ($listetat as $key) {
        $o = $key['etat'];
        //echo $o;
        if ( $o != 0) /*|| (!empty($listecoupon)) )*/ {
            //var_dump($o);
            echo "<script type='text/javascript'>";
            echo "alert('Coupon utilisé ou bien inexistant');";
            echo "</script>";
        }
        
        else {
            foreach ($listecoupon as $row) {
                $tot = $tot - ($tot * $row['valeur']);
                
                echo $tot;
            }
            $couponC->setetat($x, $etat);
            
            //var_dump($listecoupon);
            //echo "<META http-equiv='refresh' content='0;URL=panierFE.php'>";
            /*if($listecoupon)
            {}*/
        }
    }
}
?>

                        </div>


                    </div>

                    <!-- Cart Summary -->
                    <div class="col-lg-6 col-12 mb-40 d-flex">
                     <form method="POST" action="ajoutertrans.php">
                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4>Cart Summary</h4>
                                <p>Sub Total <span><?php echo $extot ?>DT</span></p>
                                <h2>Grand Total <span><?php echo $tot ?>DT</span></h2>
                            </div>
                            <form method="POST" action="ajoutertrans.php">
                            <div class="cart-summary-button">
                                <button class="checkout-btn" type="submit">Payer</button>
                                <input type="hidden" name="alo" value="<?php echo $tot ?>">
                                <a href="pdfc.php" class="btn center btn-circle hover-theme ml-50 mt-10 mr-30 mb-30">Imprimer</a>
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
<!-- Cart Page End --> 

<!-- Banner Section Start -->
<div class="banner-section section mb-90">
    <div class="container">
        <div class="row">
            
            <!-- Banner -->
            <div class="col-12">
                <div class="banner"><a href="#"><img src="assets/images/banner/banner-10.jpg" alt="Banner"></a></div>
            </div>
            
        </div>
    </div>
</div><!-- Banner Section End -->

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


<!-- Mirrored from demo.devitems.com/ee/ee-v1/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:51:15 GMT -->
</html>