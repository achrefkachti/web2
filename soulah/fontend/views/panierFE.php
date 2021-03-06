<?PHP 
include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/coupon.php";
include "../core/couponC.php";
$panierC=new panierC();
$listepanier=$panierC->afficherprod();

$tot=0;?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.spruko.com/demo/splite/emptypage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:07 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Splite-Admin Dashboard</title>

    <!--favicon -->
    <link rel="icon" href="favicon.html" type="image/x-icon" />

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Icons css-->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!--Style css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--mCustomScrollbar css-->
    <link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

    <!--Sidemenu css-->
    <!--<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">-->
    <!-- Horizontal-menu Css -->
    <link href="assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="assets/plugins/horizontal-menu/webslidemenu.css" rel="stylesheet">
</head>

<body class="app ">
    <div class="wave -three"></div>

    <div id="spinner"></div>

    <!--app open-->
    <div id="app" class="page">
        <div class="main-wrapper">


            <!--official nav open-->


            <nav>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header header-2">
                                <div class="container">
                                    <nav class=" navbar header-nav navbar-expand-lg main-navbar  py-4">
                                        <a id="horizontal-navtoggle1" class="animated-arrow"><span></span></a>
                                        <a class="header-brand" href="index-2.html">
                                            <img src="assets/img/brand/logo.png" class="header-brand-img" alt="Splite-Admin logo">
                                        </a>
                                        <ul class="navbar-nav navbar-right mr-auto">
                                            <li class="dropdown dropdown-list-toggle envelope"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><span class="badge badge-danger nav-link-badge">5</span><i class="fa fa-envelope-o"></i></a>
                                                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                                    <div class="dropdown-header">Messages
                                                        <div class="float-right">
                                                            <a href="#" class="text-white">View All</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-list-content">
                                                        <a href="#" class="dropdown-item dropdown-item-unread">
                                                            <img alt="image" src="assets/img/avatar/avatar-3.jpg" class="rounded-circle dropdown-item-img">
                                                            <div class="dropdown-item-desc">
                                                                <div class="dropdownmsg d-flex">
                                                                    <div class="">
                                                                        <b>Stewart Ball</b>
                                                                        <p>Your template awesome</p>
                                                                    </div>
                                                                    <div class="time">6 hours ago</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item dropdown-item-unread">
                                                            <img alt="image" src="assets/img/avatar/avatar-2.jpg" class="rounded-circle dropdown-item-img">
                                                            <div class="dropdown-item-desc">
                                                                <div class="dropdownmsg d-flex">
                                                                    <div class="">
                                                                        <b>Jonathan North</b>
                                                                        <p>Your Order Shipped.....</p>
                                                                    </div>
                                                                    <div class="time">45 mins ago</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <img alt="image" src="assets/img/avatar/avatar-4.jpg" class="rounded-circle dropdown-item-img">
                                                            <div class="dropdown-item-desc">
                                                                <div class="dropdownmsg d-flex">
                                                                    <div class="">
                                                                        <b>Victor Taylor</b>
                                                                        <p>Hi!, I' am web developer</p>
                                                                    </div>
                                                                    <div class="time"> 8 hours ago</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <img alt="image" src="assets/img/avatar/avatar-3.jpg" class="rounded-circle dropdown-item-img">
                                                            <div class="dropdown-item-desc">
                                                                <div class="dropdownmsg d-flex">
                                                                    <div class="">
                                                                        <b>Ruth Arnold</b>
                                                                        <p>Hi!, I' am web designer</p>
                                                                    </div>
                                                                    <div class="time"> 3 hours ago</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <img alt="image" src="assets/img/avatar/avatar-5.jpg" class="rounded-circle dropdown-item-img">
                                                            <div class="dropdown-item-desc">
                                                                <div class="dropdownmsg d-flex">
                                                                    <div class="">
                                                                        <b>Sam Lyman</b>
                                                                        <p>Hi!, I' am java developer</p>
                                                                    </div>
                                                                    <div class="time"> 15 mintues ago</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">6</span><i class="fa fa-bell-o"></i></a>
                                                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                                    <div class="dropdown-header">Notifications
                                                        <div class="float-right">
                                                            <a href="#" class="text-white">View All</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-list-content">
                                                        <a href="#" class="dropdown-item">
                                                            <i class="fa fa-users text-primary"></i>
                                                            <div class="dropdown-item-desc">
                                                                <b>So many Users Visit your template</b>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="fa fa-exclamation-triangle text-danger"></i>
                                                            <div class="dropdown-item-desc">
                                                                <b>Error message occurred....</b>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="fa fa-users text-warning"></i>
                                                            <div class="dropdown-item-desc">
                                                                <b> Adding new people</b>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="fa fa-shopping-cart text-success"></i>
                                                            <div class="dropdown-item-desc">
                                                                <b>Your items Arrived</b>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="fa fa-comment text-primary"></i>
                                                            <div class="dropdown-item-desc">
                                                                <b>New Message received</b>
                                                                <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item">
                                                            <i class="fa fa-users text-primary"></i>
                                                            <div class="dropdown-item-desc">
                                                                <b>So many Users Visit your template</b>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown dropdown-list-toggle d-none d-lg-block">
                                                <a href="#" class="nav-link nav-link-lg full-screen-link">
                                                    <i class="fa fa-expand " id="fullscreen-button1"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <form class="form-inline">
                                            <div class="search-element mr-3">
                                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                                <span class="Search-icon"><i class="fa fa-search"></i></span>
                                            </div>
                                            <a href="login.html" class="btn btn-lg btn-primary m-b-5 m-t-5">Login/SignUP</a>

                                        </form>
                                    </nav>
                                </div>
                            </div>
                            <!--Horizontal-menu-->
                            <div class="horizontal-main clearfix">
                                <div class="horizontal-mainwrapper container clearfix">
                                    <nav class="horizontalMenu clearfix">
                                        <div class="overlapblackbg"></div>
                                        <ul class="horizontalMenu-list">

                                            </li>
                                            <li aria-haspopup="true"><a href="emptypage.html" class=""> HOME </a></li>
                                            <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon "> PRODUITS <i class="fa fa-angle-down horizontal-icon"></i></a>
                                                <ul class="sub-menu">
                                                    <li aria-haspopup="true"><a href="showroom.html">Show Room</a></li>
                                                    <li aria-haspopup="true"><a href="scooter.html">P.R Scooter</a></li>
                                                    <li aria-haspopup="true"><a href="velo.html">P.R Vélo</a></li>
                                                    <li aria-haspopup="true"><a href="accessoires.html">Accessoires</a></li>
                                                </ul>
                                            </li>

                                            <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon"> EVENEMENTS <i class="fa fa-angle-down horizontal-icon"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">HAJA MECH AAREF</a></li>
                                                    <li><a href="#">HAJA OKHRA BALEK</a></li>
                                                    <li aria-haspopup="true" class="sub-menu-sub"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">HAJA FEHA HAJET</a>
                                                        <ul class="sub-menu">
                                                            <li aria-haspopup="true"><a href="#">HAJA 1</a></li>
                                                            <li aria-haspopup="true"><a href="#">HAJA2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li aria-haspopup="true"><a href="panierFE.php" class="active"> PANIER </a></li>

                                        </ul>
                                    </nav>
                                    <!--Menu HTML Code-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- official nav closed-->


            <!--app-content open-->
            <div class="app-content centered">
                <div class="section">

                    <div class="card">
                        <div class="card-header">
                            <h4>Ajouter un Produit</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="ajouterpanier.php" id="form">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Nom Client </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nomcl" onblur="verifnom(this);" id="nomcl">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ID Client </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="idcl" onblur="verifref(this);" id="idcl">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="example-email">Produit</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="nomprod" id="nomprod">
                                            <option>Scooter</option>
                                            <option>Velo</option>
                                            <option>P.R Velo</option>
                                            <option>P.R Scooter</option>
                                            <option>Accessoire</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Quantité </label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="quantite" onblur="verifref(this);" id="quantite">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Prix </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="prix" onblur="verifref(this);" id="prix">
                                    </div>
                                </div>



                                <button type="submit" name="ajouter" class="btn btn-primary mt-1 mb-0">Ajouter Produit</button>


                            </form>

                        </div>
                    </div>

                    <!--row open-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card m-b-20">
                                            <div class="card-header ">
                                                <h4>Shopping Cart</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>ID Panier</th>
                                                                <th>ID Client</th>
                                                                <th>Produit</th>
                                                                <th>Prix</th>
                                                                <th>Quantité</th>
                                                                <th>Total</th>
                                                                <th>Supprimer</th>
                                                                <th>Modifier</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php 

													foreach( $listepanier as $row )
														{ 
		
															?>

                                                            <tr>
                                                                <td><?php echo $row['idp']; ?></td>
                                                                <td><?php echo $row['idcl']; ?></td>
                                                                <td><?php echo $row['nomprod']; ?></td>
                                                                <td><span><?php echo $row['prix']; ?></span></td>
                                                                <td class="w-32 "><?php echo $row['quantite']; ?></td>
                                                                <td><?php echo $row['total']; ?></td>

                                                                <td>
                                                                    <form method="POST" action="supprimerprod.php">
                                                                        <span><input class="btn btn-danger btn-sm text-white" type="submit" value="Supprimer">
                                                                            <input type="hidden" value="<?php echo $row['idp']; ?>" name="idp_supp"></span>
                                                                    </form>
                                                                </td>
                                                                <td>
                                                                    <span> <a href="modifierpanier.php?idcl=<?PHP echo $row['idcl']; ?>"><input type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="" value="Modifier"></a>
                                                                    </span>



                                                                </td>

                                                            </tr>


                                                            <?php
															$tot+=$row['total'];
											}?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php  $couponC=new couponC();	
                                               ?>
                                                <form class="text-left  product-cart m-t-20 mb-0" method="POST">
                                                    <div class="row">
                                                        <div class="col-6"><input class="productcart form-control" type="text" placeholder="Coupon Code" name="nomc"></div>
                                                        <div class="col-6"><input type="submit" name="apply" class="btn btn-primary btn-md"></div>
                                                    </div>
                                                </form>
                                               <?php
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
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <h4>Order Summery</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>


                                                            <tr>
                                                                <td>Cart Subtotal</td>
                                                                <td class="text-right"><?php echo $tot ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span>Order Total</span></td>
                                                                <td>
                                                                    <h2 class="price text-right"><?php echo $tot ?></h2>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <form class="text-center">
                                                    <input class="btn btn-primary mt-2" type="submit" value="Proceed To Checkout">
                                                    <input class="btn btn-success mt-2" type="submit" value="Continue Shopping">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                </div>
            </div>
            <!--app-content closed-->
            <!--foooooobteeeer-->

            <footer>
                <div class="card">

                    <div class="card-body">
                        <div class="text-center">
                            <ul class="footer-social-list mb-2">
                                <li><a href="javascript:;"><i class="ti-facebook"></i></a></li>
                                <li><a href="javascript:;"><i class="ti-google"></i></a></li>
                                <li><a href="javascript:;"><i class="ti-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="ti-linkedin"></i></a></li>
                            </ul>
                            <div class="text-center">
                                Copyright ©Splite 2019. Design By<a href="https://spruko.com/"> Spruko</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Popupchat open-->
            <div class="popup-box chat-popup" id="qnimate">
                <div class="popup-head">
                    <div class="popup-head-left pull-left"><img src="assets/img/avatar/avatar-3.jpg" alt="iamgurdeeposahan" class="mr-2"> Alica Nestle</div>
                    <div class="popup-head-right pull-right">
                        <div class="btn-group">
                            <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
                                <i class="glyphicon glyphicon-cog"></i> </button>
                            <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Block</a></li>
                                <li><a href="#">Clear Chat</a></li>
                                <li><a href="#">Email Chat</a></li>
                            </ul>
                        </div>
                        <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
                    </div>
                </div>
                <div class="popup-messages">
                    <div class="direct-chat-messages">
                        <div class="chat-box-single-line">
                            <abbr class="timestamp">December 15th, 2018</abbr>
                        </div>
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-left">Alica Nestle</span>
                                <span class="direct-chat-timestamp float-right">7:40 Am</span>
                            </div>
                            <img class="direct-chat-img" src="assets/img/avatar/avatar-3.jpg" alt="message user image">
                            <div class="direct-chat-text">
                                Hello. How are you today?
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-right">Roberts</span>
                                <span class="direct-chat-timestamp float-left">8:05 Am</span>
                            </div>
                            <img class="direct-chat-img" src="assets/img/avatar/avatar-2.jpg" alt="message user image">
                            <div class="direct-chat-text">
                                I'm fine. Thanks for asking!
                            </div>
                        </div>
                        <div class="chat-box-single-line  mb-3">
                            <abbr class="timestamp">December 14th, 2018</abbr>
                        </div>
                        <div class="direct-chat-msg doted-border">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-left">Alica Nestle</span>
                                <span class="direct-chat-timestamp float-right">6:20 Am</span>
                            </div>
                            <img alt="iamgurdeeposahan" src="assets/img/avatar/avatar-3.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Hey bro, how’s everything going ?
                            </div>
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name float-right">Roberts</span>
                                    <span class="direct-chat-timestamp float-left">7:05 Am</span>
                                </div>
                                <img class="direct-chat-img" src="assets/img/avatar/avatar-2.jpg" alt="message user image">
                                <div class="direct-chat-text">
                                    Nothing Much!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-messages-footer">
                    <textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
                    <div class="btn-footer">
                        <button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
                        <button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
                        <button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
                        <button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
                    </div>
                </div>
            </div>
            <!-- Popupchat closed -->

        </div>
    </div>
    <!--app closed-->
    <!--Footer -->



    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Popup-chat -->
    <a href="#" id="addClass"><i class="ti-comment"></i></a>

    <!--Jquery.min js-->
    <script src="assets/js/jquery.min.js"></script>

    <!--popper js-->
    <script src="assets/js/popper.js"></script>

    <!--Tooltip js-->
    <script src="assets/js/tooltip.js"></script>

    <!--Bootstrap.min js-->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Jquery star rating-->
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>

    <!--Jquery.nicescroll.min js-->
    <script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!--Scroll-up-bar.min js-->
    <script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

    <!--mCustomScrollbar js-->
    <script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--Sidemenu js-->
    <!--<script src="assets/plugins/toggle-menu/sidemenu.js"></script>-->

    <!--Scripts js-->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/jquery.showmore.js"></script>
    <script src="verification.js"></script>
    <script src="js/form.js"></script>


</body>

<!-- Mirrored from www.spruko.com/demo/splite/emptypage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:07 GMT -->

</html>