<?PHP 
include "../entities/coupon.php";
include "../core/couponC.php";
include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/trans.php";
include "../core/transC.php";

$couponC=new couponC();
$listecoupon=$couponC->affichercoupon();
$stat=$couponC->stat();
$panierC=new panierC();
$listepanier=$panierC->afficherprod();

$transC=new transC();
$listeTran=$transC->afficherT();
$tot=0;
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Splite-Admin Dashboard</title>

    <!--Favicon -->
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
    <link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

    <!--Morris css-->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

</head>

<body class="app ">
    <div class="wave -three"></div>

    <div id="spinner"></div>

    <!--app open-->
    <div id="app" class="page">
        <div class="main-wrapper">

            <!--anv open-->
            <nav class="navbar navbar-expand-lg main-navbar">
                <a class="header-brand" href="index-2.html">
                    <img src="assets/img/brand/logo.png" class="header-brand-img" alt="Splite-Admin  logo">
                </a>
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-2">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
                    </ul>
                    <div class="search-element mr-3">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <span class="Search-icon"><i class="fa fa-search"></i></span>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle d-none d-lg-block "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><i class=" fa fa-flag-o "></i></a>
                        <div class="dropdown-menu dropdown-menu-lg  dropdown-menu-right">
                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <img src="assets/img/flags/french_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
                                <div>
                                    <strong>French</strong>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <img src="assets/img/flags/germany_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
                                <div>
                                    <strong>Germany</strong>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <img src="assets/img/flags/italy_flag.jpg" alt="flag-img" class=" flag-sm  mr-3 align-self-center">
                                <div>
                                    <strong>Italy</strong>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <img src="assets/img/flags/russia_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
                                <div>
                                    <strong>Russia</strong>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <img src="assets/img/flags/spain_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
                                <div>
                                    <strong>Spain</strong>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle "><a href="mailinghakeka.php" class="nav-link  nav-link-lg "><i class="hvr-buzz fa fa-envelope-o"></i></a>
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
                            <i class="fa fa-expand " id="fullscreen-button"></i>
                        </a>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
                            <span class="mr-3 mt-2 d-none d-lg-block ">
                                <span class="text-white">Hello,<span class="ml-1"> Salahddine</span></span>
                            </span>
                            <span><img src="assets/img/avatar/torchgan.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class=" dropdown-header noti-title text-center border-bottom pb-3">
                                <h5 class="text-capitalize text-dark mb-1">Salahddine </h5>
                                <h6 class="text-capitalize text-dark mb-1">Ben Hamida</h6>
                                <small class="text-overflow m-0"> Admin</small>
                            </div>
                            <a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
                            <a class="dropdown-item" href="https://mail.google.com/mail/u/1/#inbox"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
                            <a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!--nav closed-->

            <!--aside open-->
            <aside class="app-sidebar">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="nav-link pl-1 pr-1 leading-none ">
                            <img src="assets/img/avatar/torchgan.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
                            <span class="pulse bg-success" aria-hidden="true"></span>
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-1 text-dark">Salah</h6>
                            <span class="text-muted app-sidebar__user-name text-sm"> Admin</span>
                        </div>
                    </div>
                </div>
                <ul class="side-menu">
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="index-2.html"><span>what?</span></a></li>
                            <li><a class="slide-item" href="index2.html"><span>DDD -D</span></a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Gestion Profiles</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="panierBE.php"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Gestion Panier</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">SAV</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fa fa-edit"></i><span class="side-menu__label">Gestion Evenements</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Gestion Produits</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label">Gestion Livraison</span></a>
                    </li>

                </ul>
            </aside>
            <!--aside closed-->

            <!--app-content open-->
            <div class="app-content">
                <section class="section">

                    <!--page-header open-->
                    <div class="page-header">
                        <h4 class="page-title">Gestion Panier</h4>
                        <!--<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
							</ol>-->
                    </div>
                    <!--page-header closed-->

                    <!--row open-->
                    <div class="card">
                        <div class="card-header">
                            <h4>Ajouter un Coupon</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="ajouter_coupon.php" id="form">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Nom du Coupon </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nomc" id="nomc" onblur="verifnom(this);">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="example-email">Pourcentage</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="valeur" id="valeur">
                                            <option>0.05</option>
                                            <option>0.10</option>
                                            <option>0.15</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-md-3 col-form-label">Date d'Expiration</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="date" name="dateE" id="date">
                                    </div>
                                </div>
                                <button type="submit" name="ajouter" class="btn btn-primary mt-1 mb-0">Ajouter</button>

                            </form>

                        </div>
                    </div>



                    <!--Tableauuuuu coupooonnnnn-->

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <span class="table-add float-right">
                                    <a href="#!" class="btn btn-icon"><i class="fa fa-plus fa-1x" aria-hidden="true"></i></a>
                                </span>
                                <h4>Tableau des Coupons</h4>
                            </div>
                            <div class="card-body">
                                <div id="table" class="table-responsive table-editable">
                                    <table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
                                        <tabody>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nom</th>
                                                <th class="text-center">Valeur</th>
                                                <th class="text-center">Date Activation</th>
                                                <th class="text-center">Date d'Expiration</th>
                                                <th class="text-center">Etat</th>
                                                <th class="text-center">Trier</th>
                                                <th class="text-center">Supprimer</th>
                                                <th class="text-center">Modifier</th>

                                            </tr>
                                            <?php 
													foreach( $listecoupon as $row )
														{ ?>
                                            <tr>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row['idc']; ?> </td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row['nomc']; ?> </td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row['valeur']; ?> </td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row['dateA']; ?> </td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row['dateE']; ?> </td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row['etat']; ?> </td>
                                                <td class="pt-3-half">
                                                    <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                                    <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                                </td>
                                                <!-- bouton supprimer-->

                                                <td>
                                                    <form method="POST" action="supprimercoupon.php">
                                                        <span><input type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="Supprimer" value="Supprimer">
                                                            <input type="hidden" value="<?php echo $row['idc']; ?>" name="idC"></span>

                                                    </form>
                                                </td>
                                                <!-- bouton modifier-->


                                                <td>
                                                    <span> <a href="modifiercoupon.php?idc=<?PHP echo $row['idc']; ?>"><input type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="" value="Modifier"></a>
                                                    </span>



                                                </td>
                                            </tr>
                                            <?php
											}?>
                                            </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--Tableauuuuu des transactionnnnns-->


                    <div class="col-md-12">
                        <div class="card export-database">
                            <div class="card-header">
                                <h4>Transactions</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>ID Transaction</th>
                                                <th>ID Client</th>
                                                <th>Nom Client</th>
                                                <th>Total</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
													foreach( $listeTran as $row )
														{
															?>

                                            <tr>
                                                <td><?php echo $row['idt']; ?></td>
                                                <td><?php echo $row['idcl']; ?></td>
                                                <td><?php echo $row['nomcl']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                                <td><?php echo $row['dateT']; ?></td>
                                            </tr>
                                            <?php
															
											}?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                                <!--charts opened-->

<div class="col-12 col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                       <div id="chart_bar" class="overflow-hidden">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Pourcentage','DateE'],
       

        ]);

        var options = {
          title: 'Coupon par Pourcentage'
        };

        <?php foreach ($listeTran as $key ){ 
             echo "['".$key['valeur']."',".$key['dateE']."],";
        } ?>
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
        <div id="piechart" style="width: 500px; height: 500px;"></div>

    </div>
</div>
                                    </div>
                                </div>
                            </div>
            <!--charts closed-->





                </section>
            </div>
            <!--app-content closed-->

            <footer class="main-footer">
                <div class="text-center">

                </div>
            </footer>

            <!-- Popupchat open-->
            <div class="popup-box chat-popup" id="qnimate">
                <div class="popup-head">
                    <div class="popup-head-left pull-left"><img src="assets/img/avatar/torchgan.jpg" alt="iamgurdeeposahan" class="mr-2"> Youssef Ghedas</div>
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
                                <span class="direct-chat-name float-left">Youssef Ghedas</span>
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
    <!-- Popup opened -->


    <!-- Popup closed -->

    <!-- MODIFIEEEEEEEEEEEEEEEEEEEEEEEEER weheeeeed-->





    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Popup-chat -->
    <a href="#" id="addClass"><i class="ti-comment"></i></a>

    <!--Jquery.min js-->
    <script type="text/javascript" src="js/form.js"></script>
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
    <script src="assets/plugins/toggle-menu/sidemenu.js"></script>

    <!--Scripts js-->
    <script src="assets/js/scripts.js"></script>
    <script src="js/form.js"></script>
    <script src="assets/js/jquery.showmore.js"></script>

    <script src="assets/js/editable.js"></script>
    <script src="assets/js/datatable.js"></script>

    <!--DataTables js-->
    <script src="assets/plugins/Datatable/js/jquery.dataTables.js"></script>
    <script src="assets/plugins/Datatable/js/dataTables.bootstrap4.js"></script>
    <script src="assets/plugins/Datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/Datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/Datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/Datatable/js/pdfmake.min.js"></script>
    <script src="assets/plugins/Datatable/js/vfs_fonts.js"></script>
    <script src="assets/plugins/Datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/Datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/Datatable/js/buttons.colVis.min.js"></script>
    <script src="verification.js"></script>


</body>

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->

</html>