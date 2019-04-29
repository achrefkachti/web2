
<?PHP
include "../core/produitC.php";
$produit1C=new produitC();
$listeProduits6=$produit1C->afficherProduits6();

//var_dump($listeEmployes->fetchAll());
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/emptypage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:07 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

		<!--favicon -->
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

			    
                		<nav><div class="row">
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
                                            <nav class="horizontalMenu clearfix"><div class="overlapblackbg"></div>
                                                <ul class="horizontalMenu-list">
                                                
                                                  
                                                    <li aria-haspopup="true"><a href="emptypage.html" class=""> HOME </a></li>
                                                    <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon "> PRODUITS <i class="fa fa-angle-down horizontal-icon"></i></a>
                                                        <ul class="sub-menu">
                                                            <li aria-haspopup="true"><a href="showroom.html">Show Room</a></li>
                                                            <li aria-haspopup="true"><a href="scooter.php">P.R Scooter</a></li>
                                                            <li aria-haspopup="true"><a href="velo.php">P.R Vélo</a></li>
                                                            <li aria-haspopup="true"><a href="accessoires.php">Accessoires</a></li>
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
                                                    <li aria-haspopup="true"><a href="panierFE.php" > PANIER </a></li>



                                                    <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="sub-icon active" > SAV <i class="fa fa-angle-down horizontal-icon"></i></a>
                                                        <ul class="sub-menu">
                                                            <li aria-haspopup="true"><a href="retour.html">Politique de retour</a></li>
                                                            <li aria-haspopup="true"><a href="ajouterFormulaire.php">Ajouter Formulaire</a></li>
                                                            <li aria-haspopup="true"><a href="supprimerFormulaire.html">Supprimer Formulaire</a></li>
                                                            <li aria-haspopup="true"><a href="afficherSuivie.php">Afficher vos Suivies</a></li>
                                                        </ul>
                                                    </li>


                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
								</div>
							</div>
						</div></nav>

				<!-- official nav closed-->


                <!--app-content open-->
				<div class="app-content centered">
					<div class="section">

                        

                        <!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
<div class="section-body ">

                            <!--row open-->
							<div class="row">
								<div class="col-md-12 col-lg-4 col-xl-3">
									<div class="card">
										<div class="card-header">
											<h4>Categorie</h4>
										</div>
										<div class="card-body">
											<ul class="nav prod-cat">
												<li>
													<a href="scootvelo.php" class="active"><i class=" fa fa-angle-right"></i> Les 2 roues</a>
													<ul class="nav">
														<li class="active"><a href="scooter2.php">- Scooter</a></li>
														<li><a href="velo.php">- Velo</a></li>
														
													</ul>
												</li>

												<li><a href="#"><i class=" fa fa-angle-right"></i> Accessoires</a></li>

											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h4>Le prix</h4>
										</div>
										<div class="card-body sliders">
											<div class="">
												<div class="radio">
													<input type="radio" name="shop-filter__price" id="shop-filter-price_1" value="" checked="">
													<label for="shop-filter-price_1">Moins de 1400 dt</label>
												</div>
												<div class="radio">
													<input type="radio" name="shop-filter__price" id="shop-filter-price_2" value="">
													<label for="shop-filter-price_2">Entre 1400 et 800 dt</label>
												</div>
												<div class="radio">
													<input type="radio" name="shop-filter__price" id="shop-filter-price_3" value="">
													<label for="shop-filter-price_3">entre 800 et 200 dt</label>
												</div>
												<div class="radio">
													<input type="radio" name="shop-filter__price" id="shop-filter-price_4" value="specify">
													<label for="shop-filter-price_4" class="mb-0">Autres (specify)</label>
												</div>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="card-header">
											<h4>Filter</h4>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label class="form-label">Type</label>
												<select name="beast" id="select-beast" class="form-control custom-select">
													<option value="0">--Select--</option>
													<option value="1">Sport</option>
													<option value="2">Normal</option>
													<option value="3">...</option>
													
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Couleur</label>
												<select name="beast" id="select-beast1" class="form-control custom-select">
													<option value="0">--Select--</option>
													<option value="1">Bleu</option>
													<option value="2">Blanc</option>
													<option value="3">Rouge</option>
													<option value="4">Maron</option>
													
												</select>
											</div>
											
											<a class="btn btn-primary" href="#">Search</a>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-8 col-xl-9">
								    <div class="card">
										<div class="card-body">
											<div class="input-group">
												<input type="text" class="form-control btl-2 bbl-2" placeholder="">
												<div class="input-group-append">
													<a href="#" class="btn btn-primary btr-2 bbr-2 text-center mb-0">
														Search
													</a>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row product-list">
										<?php foreach ($listeProduits6 as $row ) {?>
										<div class="col-lg-6 col-xl-4 col-md-6">
										    <div class="card">
												<td><img width="400" height="400" src=" <?PHP echo $row['img'];?>" > </td>
												<div class="product_details">
													<div class="text-center text-warning">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													
													<h5 class="pro-title mt-1"><?PHP echo $row['nom']; ?></h5><br>
													<h6 class="pro-title mt-1"><?PHP echo $row['refe']; ?></h6>
													
													<ul class="product_price list-unstyled">
														<li class="new_price "><?PHP echo $row['prix']; ?><p>dt</p></li>
															
													</ul>
													
												</div>
											</div>
										</div>
										<?php
							 }    ?>
								</div>
							
									</div>
								</div>
							</div>
							<!--row closed-->

						</div>									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</div>
				</div>
				<!--app-content closed-->
				<!--foooooobteeeer-->

				<footer >
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
						<div class="popup-head-left pull-left"><img src="pdp.jpg" alt="iamgurdeeposahan" class="mr-2"> Youssef Ghedas</div>
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
								<img class="direct-chat-img" src="pdp.jpg" alt="message user image">
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
									<span class="direct-chat-name float-left">Youssef Ghedas</span>
									<span class="direct-chat-timestamp float-right">6:20 Am</span>
								</div>
								<img alt="iamgurdeeposahan" src="pdp.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
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
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

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

	</body>

<!-- Mirrored from www.spruko.com/demo/splite/emptypage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:07 GMT -->
</html>