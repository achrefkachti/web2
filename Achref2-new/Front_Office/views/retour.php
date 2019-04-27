<?PHP
include "../core/formulaireC.php";
$formulaire1C=new formulaireC();
$listeFormulaires=$formulaire1C->afficherFormulaires();
session_start (); 
//var_dump($listeEmployes->fetchAll());
?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.devitems.com/ee/ee-v1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:52:10 GMT -->
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
                        <a href="track-order.html"><img src="assets/images/icons/car.png" alt="Car Icon"> <span>Track your order</span></a>
                        <a href="store.html"><img src="assets/images/icons/marker.png" alt="Car Icon"> <span>Locate Store</span></a>
                    </div><!-- Header Links End -->
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    <!-- Header Advance Search Start -->
                    <div class="header-advance-search">
                        
                        <form action="#">
                            <div class="input"><input type="text" placeholder="Search your product"></div>
                            <div class="select">
                                <select class="nice-select">
                                    <option>All Categories</option>
                                    <option>Mobile</option>
                                    <option>Computer</option>
                                    <option>Laptop</option>
                                    <option>Camera</option>
                                </select>
                            </div>
                            <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                        </form>
                        
                    </div><!-- Header Advance Search End -->
                </div>

               <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->

                   
                    <a href="login.html"><i class="icofont icofont-login d-none" ></i> <span><?php
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

     echo $_SESSION['r']; 
    echo '<a href="./logout.php" class="btn btn-small btn-circle hover-theme mb-30" >Logout</a>';

}
else { 
    echo "Login/SignUP";
    
      

}   ?></span></a>
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
                            <img src="assets/images/logo.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                            <img class="theme-dark" src="assets/images/logo-light.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                        </a>
                    </div><!-- Logo End -->
                </div>

                 <div class="main-menu">
                        <nav>
                            <ul>

                                <li ><a href="index.php">HOME</a>
                                   
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
                                        <li class="active"><a href="retour.php">Politique du retour</a></li>
                                        <li><a href="ajouterFormulaire.php">Ajouter Réclamation</a></li>
                                        <li><a href="afficherFormulaire.php">Afficher vos Réclamations</a></li>
                                        <li><a href="afficherSuivie.php">Afficher les Suivies</a></li>
                                        <li><a href="ajouterAvis.php">Vos Avis</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div><!-- Main Menu End -->

               
                
                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Bottom End -->

</div><!-- Header Section End -->

<!-- Mini Cart Wrap Start -->                      
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">    
    
        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>
        
    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <li>
            <a class="image"><img src="assets/images/product/product-1.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 02</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="assets/images/product/product-2.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Aquet Drone D 420</a>
                <span class="price">Price: $275</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="assets/images/product/product-3.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Game Station X 22</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">    
    
        <h4 class="sub-total">Total: <span>$1160</span></h4>

        <div class="button">
            <a href="checkout.html">CHECK OUT</a>
        </div>
        
    </div>

</div><!-- Mini Cart Wrap End --> 

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        

        <!-- Banner -->
        

    </div>
</div><!-- Page Banner Section End -->

<!-- Contact Section Start -->
<div class="contact-section section mt-90 mb-40">
    <div class="container">
        <div class="row">
            
            <!-- Contact Page Title -->
            <div class="contact-page-title col mb-40">
                <h1>Politique du retour</h1>
            </div>
        </div>
        <div class="row">
            
            <!-- Contact Tab List -->
            <div class="col-lg-4 col-12 mb-50">
                <ul class="contact-tab-list nav">
                    <li><a class="active" data-toggle="tab" href="#contact-address">Comment retourner un produit ?</a></li>
                    <li><a data-toggle="tab" href="#contact-form-tab">Quel est le délai de retour chez Ariana Scooters ?</a></li>
                    <li><a data-toggle="tab" href="#store-location">Quelles sont les conditions pour retourner un produit et quelle est la procédure ?</a></li>
                </ul>
            </div>
            
            <!-- Contact Tab Content -->
            <div class="col-lg-8 col-12">
                <div class="tab-content">
                    
                    <!-- Contact Address Tab -->
                    <div class="tab-pane fade show active row d-flex" id="contact-address">
                       
                        Vous avez 7 jours ouvrés après réception de l’article pour faire une demande de retour.</br> </br>

                                                        Si votre produit est éligible à un retour, vous pouvez remplir le formulaire ou contacter le service client :</br> </br>

                                                        Téléphone: +216 20154860</br> </br>

                                                        E-mail : customer@arianascooters.com.tn
                        
                    </div>
                    
                    <!-- Contact Form Tab -->
                    <div class="tab-pane fade row d-flex" id="contact-form-tab">
                        Tout produit vendu chez Jumia peut être retourné dans un délai de 7 jours à compter de la date de livraison.</br>
                                                        Exemple: Si je reçois mon produit le 5, je peux le retourner jusqu’au 12.</br></br>

                                                        NB: - Vous avez 7 jours pour faire une demande de retour.</br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  - Si ce délai est dépassé, nous n’acceptons malheureusement plus les retours.
                                                            Nous vous invitons à regarder si &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp votre produit possède une garantie. 
                    </div>
                    
                    <!-- Contact Stores Tab -->
                    <div class="tab-pane fade row d-flex" id="store-location">
            
                       
                    

                      <h4> Prérequis pour une demande de retour valide:</h4></br>
                                              &nbsp&nbsp   Produit éligible au retour (ne peuvent pas être retournés ...), vérifier  
                                                           l'éligibilité de votre produit au retour avec le </br> &nbsp&nbsp service client Jumia.</br>
                                            &nbsp&nbsp     Bon de livraison avec le produit.</br>
                                            &nbsp&nbsp     Emballage en bon état.</br>
                                        &nbsp&nbsp         Condition physique du produit en accord avec la raison de retour.</br></br>
                                                           <!--Méthode de remboursement souhaitée et détails requis-->

                                                        <h4>Tout produit sera sujet à un examen:</h4></br>
            &nbsp&nbsp                                        Si l’examen s’avère positif, nous vous rembourserons selon le mode choisi ( Bon d’achat ou virement).Vous serez </br> &nbsp&nbsp  remboursé dans 72H de la date de fin d'examen par le service qualité Ariana Scooters.</br>
            &nbsp&nbsp                                        Si l’examen s’avère négatif, vous ne serez pas éligible à un remboursement et votre produit vous sera retourné. 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Contact Section End -->

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


<!-- Mirrored from demo.devitems.com/ee/ee-v1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2019 18:52:10 GMT -->
</html>