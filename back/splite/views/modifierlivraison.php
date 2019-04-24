<?php

include "../core/personneC.php";
$Livreur1C= new LivreurC();
$listeEmployes= $Livreur1C->afficherLivreur();

	?>
}
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

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
			<div class="main-wrapper" >

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
						<li class="dropdown dropdown-list-toggle "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-danger nav-link-badge">5</span><i class="hvr-buzz fa fa-envelope-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Messages
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="assets/img/avatar/me.jpg" class="rounded-circle dropdown-item-img">
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
										<img alt="image" src="assets/img/avatar/me.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Ruth	Arnold</b>
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
													<b>Sam	Lyman</b>
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
											<b>New Message received</b> <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
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
									<span class="text-white">Hello,<span class="ml-1"> Moetez Boubakri</span></span>
								</span>
							<span><img src="assets/img/avatar/me.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1">Moetez Boubakri</h5>
									<small class="text-overflow m-0"> Web-Designer</small>
								</div>
								<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-account-multiple-outline mr-2"></i> <span>Friends</span></a>
								<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
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
								<img src="assets/img/avatar/me.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
								<span class="pulse bg-success" aria-hidden="true"></span>
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark">Moetez Boubakri</h6>
								<span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-envelope-o"></i><span class="side-menu__label">Mail</span><span class="badge badge-warning nav-badge">3</span></a>
							<ul class="slide-menu">
								<li><a href="mailing.php" class="slide-item"> Mail-inbox</a></li>
								<li><a href="mail-compose.html" class="slide-item"> Mail-Compose</a></li>
								<li><a href="viewmail.html" class="slide-item"> View-Email</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Components</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="cards.html" class="slide-item"> Cards</a></li>
								<li><a href="dragablecards.html" class="slide-item"> Dragable Cards</a></li>
								<li><a href="loaders.html" class="slide-item"> Loaders</a></li>
								<li><a href="chat.html" class="slide-item"> Chat</a></li>
								<li><a href="treeview.html" class="slide-item"> Tree View</a></li>
								<li><a href="imgcrop.html" class="slide-item"> Image Crop</a></li>
								<li><a href="order.html" class="slide-item"> Orders</a></li>
								<li><a href="search.html" class="slide-item"> Search  Page</a></li>
								<li><a href="chattypes.html" class="slide-item">Chat Types</a></li>
								<li><a href="sortable%26nestable.html" class="slide-item">Sortable & Nestable</a></li>
								<li><a href="counters.html" class="slide-item"> Counters</a></li>
								<li><a href="rating.html" class="slide-item"> Ratings</a></li>
								<li><a href="intro.html" class="slide-item"> Intro(tour)</a></li>
								<li><a href="clipboard.html" class="slide-item"> Clipboard</a></li>
								<li><a href="dropzone.html" class="slide-item"> Dropzone</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-underline"></i><span class="side-menu__label">UI Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="elements.html" class="slide-item"> Elements</a></li>
								<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
								<li><a href="colors.html" class="slide-item"> Colors</a></li>
								<li><a href="toastr.html" class="slide-item"> Toastr</a></li>
								<li><a href="calender.html" class="slide-item"> Calendar</a></li>
								<li><a href="rangesliders.html" class="slide-item"> Rangeslider</a></li>
								<li><a href="modals.html" class="slide-item"> Modals</a></li>
								<li><a href="timeline.html" class="slide-item"> Timeline</a></li>
								<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
								<li><a href="users.html" class="slide-item"> Users List</a></li>
								<li><a href="mediaobject.html" class="slide-item"> Media Objects</a></li>
								<li><a href="grids.html" class="slide-item"> Grids</a></li>
								<li><a href="panel.html" class="slide-item"> Panels</a></li>
								<li><a href="tags.html" class="slide-item"> Tags</a></li>
								<li><a href="scrollbar.html" class="slide-item"> Scrollbar</a></li>
								<li><a href="headers.html" class="slide-item"> Headers</a></li>
								<li><a href="footer.html" class="slide-item"> Footers</a></li>

							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-smile-o"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="icons-fontawesome.html" class="slide-item"> Font Awesome</a></li>
								<li><a href="icons-simpleline.html" class="slide-item"> Simple line</a></li>
								<li><a href="icons-themify.html" class="slide-item"> Themify</a></li>
								<li><a href="icons-flag.html" class="slide-item"> Flag Icons</a></li>
								<li><a href="icons-feather.html" class="slide-item"> Feather Awesome</a></li>
								<li><a href="icons-ion.html" class="slide-item"> Ion Icons</a></li>
								<li><a href="icons-pe7.html" class="slide-item"> pe7</a></li>
								<li><a href="icons-typicons.html" class="slide-item"> Typicons</a></li>
								<li><a href="icons-materialdesign.html" class="slide-item"> Material Design</a></li>
								<li><a href="icons-weather.html" class="slide-item"> Weather Icons</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><span class="badge badge-secondary nav-badge1">New</span></a>
							<ul class="slide-menu">
								<li><a href="table.html" class="slide-item">Basic Tables</a></li>
								<li><a href="datatables.html" class="slide-item"> Data Tables</a></li>
								<li><a href="editable.html" class="slide-item"> Edit Table</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-edit"></i><span class="side-menu__label">Forms</span><span class="badge badge-pink nav-badge">6</span></a>
							<ul class="slide-menu">
								<li><a href="livraison.php" class="slide-item"> Livreur</a></li>
								<li><a href="formadvanced.html" class="slide-item"> Advanced Form</a></li>
								<li><a href="livraison.php" class="slide-item"> Livraison</a></li>
								<li><a href="formvalidaton.html" class="slide-item"> Form Validation</a></li>
								<li><a href="formwizard.html" class="slide-item"> Form Wizard</a></li>
								<li><a href="formelementsadvanced.html" class="slide-item">FormAdvanced Elements</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-line-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chartg.php" class="slide-item">STAT </a></li>
								<li><a href="flotcharts.html" class="slide-item"> Flot Charts</a></li>
								<li><a href="barcharts.html" class="slide-item"> Bar Charts</a></li>
								<li><a href="echart.html" class="slide-item"> ECharts</a></li>
								<li><a href="chartist.html" class="slide-item"> Chartist</a></li>
								<li><a href="morris.html" class="slide-item"> Morris Charts</a></li>
								<li><a href="othercharts.html" class="slide-item"> Other Charts</a></li>
								<li><a href="googlechart.html" class="slide-item"> Google Charts</a></li>
								<li><a href="hightchart.html" class="slide-item"> HighCharts</a></li>
								<li><a href="chartgage.html" class="slide-item"> JustGage Charts</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="maps.html" class="slide-item"> Google Maps</a></li>
								<li><a href="vector-map.html" class="slide-item">Vector Maps</a></li>
								<li><a href="mapel.html" class="slide-item">Mapel Maps</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="profile.html" class="slide-item"> Profile</a></li>
								<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
								<li><a href="pricing-tables.html" class="slide-item"> Pricing Tables</a></li>
								<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
								<li><a href="portfolio.html" class="slide-item"> Portfolio</a></li>
								<li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
								<li><a href="faq.html" class="slide-item"> FAQs</a></li>
								<li><a href="landingpage.html" class="slide-item"> Landing Page</a></li>
								<li><a href="emptypage.html" class="slide-item"> Empty  Page</a></li>
								<li><a href="blog.html" class="slide-item"> Blog</a></li>
								<li><a href="blog-detail.html" class="slide-item"> Single Blog Post</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><span class="badge badge-danger nav-badge">4</span></a>
							<ul class="slide-menu">
								<li><a href="shop.html" class="slide-item"> Shop</a></li>
								<li><a href="product-details.html" class="slide-item">Product Details</a></li>
								<li><a href="product.html" class="slide-item">Product Details-1</a></li>
								<li><a href="shop-cart.html" class="slide-item"> Shop Cart</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="register.html" class="slide-item"> Register</a></li>
								<li><a href="login.html" class="slide-item"> Login</a></li>
								<li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
								<li><a href="reset.html" class="slide-item"> Reset Password</a></li>
								<li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
								<li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
								<li><a href="404.html" class="slide-item"> 404</a></li>
								<li><a href="505.html" class="slide-item"> 505</a></li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--aside closed-->

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Livreur</h4>


						</div>
								<div class="card">

											<div class="card-body">
	<form  class="form-horizontal" method="GET" action="ajouter_personne.php" id="form" >
											<div class="form-group row">
												<label class="col-md-3 col-form-label" id="nom"> Nom </label>
												<div class="col-md-9">
							<input class="form-control" type="text" name="nom" onblur="verifnom(this);">
												</div>

											</div>





											<div class="form-group row">
												<label class="col-md-3 col-form-label" id="mail">E-mail</label>
												<div class="col-md-9">
	<input class="form-control" type="text" name="mail" onblur="verifMail(this);">
												</div>

											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label" id="date">date</label>
												<div class="col-md-9">
													<input class="form-control" type="date" name="date">
												</div>
											</div>

                               		<div class="form-group row">
												<label class="col-md-3 col-form-label" placeholder="numéro Tel" id="tel">Tel</label>
												<div class="col-md-9">
													<input class="form-control" type="tel" name="tel" onblur="veriftel(this);">
												</div>
											</div>
											<div class="form-group row mb-0">
												<label class="col-md-3 col-form-label" id="permis">Type de permis</label>
												<div class="col-md-9">
													<select class="form-control" name="permis">
														<option>A</option>
														<option>b</option>
														<option>c</option>
														<option>d</option>
														<option>e</option>
													</select>
												</div>
											</div>


	  <button  type="submit" class="btn btn-primary mt-1 mb-0 ">Submit</button>


									</div>
								</div>
							</div>


						</div>
                        </form>


					</section>
				</div>
					<p style="color: red" id="erreur"></p>

				<!--app-content closed-->




		<!--app closed-->
		   <!--app-content open-->
				<div class="app-content">
					<section class="section">

						<!--page-header open-->

						<!--page-header closed-->

                        <!--row open-->

								<div class="card">
									<div class="card-header">

										<h4>Livreur</h4>
									</div>


									<div class="card-body">

										<div id="table" class="table-responsive table-editable">
											 <form method="POST" action="">


											<table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
											<tbody>
												<tr>

													<th cla
													ss="text-center">nom et prénom</th>
													<th class="text-center">E-mail</th>
													<th class="text-center">Date de naissance</th>
													<th class="text-center">Tel</th>
													<th class="text-center">Type permis</th>
													<th class="text-center">Sort</th>
													<th class="text-center">Remove</th>
													<th  class="text-center">Modifier </th>
												</tr>
																<?php
foreach($listeEmployes as $row){
	?>

												<tr>
													<td class="pt-3-half" contenteditable="true"><?php echo $row['nom']; ?> </td>
													<td class="pt-3-half" contenteditable="true"><?php echo $row['mail']; ?></td>

													<td class="pt-3-half" contenteditable="true"><?php echo $row['tel']; ?></td>
													<td class="pt-3-half" contenteditable="true"><?php echo $row['permis']; ?></td>
	                        <td class="pt-3-half" contenteditable="true"><?php echo $row['dateA']; ?></td>



													<td class="pt-3-half">
														<span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
														<span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
														aria-hidden="true"></i></a></span>
													</td>

													<td>
													 <form method="POST" action="supprimer_livreur.php">
														<span >
															<input type="submit" class="btn btn-danger btn-rounded btn-sm my-0"  value =  "supprimer" name="supprimer">
                                                     <input type="hidden" value ="<?php echo $row['MAIL']; ?>" name="mail">
														</span>
													</form>
													</td>
													<td>

														<span >
															<input formaction="formwizard.php " type="submit" class="btn btn-warning btn-rounded btn-sm my-0"  value =  "Modifier" name="Modifier">
                                                     <input type="hidden" value ="<?php echo $row['MAIL']; ?>" name="mail">
														</span>

													</td>
												</tr>
												<?php
											}
											?>
												</tbody>
											</table>


										</div>
									</div>
								</div>
							</div>
						</div>
												<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->


		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

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
		<script src="js/verif.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
				<script src="assets/js/editable.js"></script>


	 </body>

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
</html>
