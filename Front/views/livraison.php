<!DOCTYPE html>
<html lang="en">
	
<head>
	                                       <!--       <script	src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
	 	
	 	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe2XS4DYP-AaXk7rVphWRWR48-XRM9ZgI&amp;signed_in=true&amp;libraries=places&amp;callback=initAutocomplete"
		async='async' defer='defer'>
		</script>
	-->

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
													<li aria-haspopup="true"><a href="panier.html" class="active"> PANIER </a></li>

												</ul>
											</nav>
											<!--Menu HTML Code-->
										</div>
									</div>
								</div>
							</div>
						</div></nav>

				<!-- official nav closed-->


                <!--app-content open-->
				<div class="app-content centered">
					<div class="section">

                        

                   
							

					</div>
				</div>

				<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>Proceed to chekout</h4>
									</div>
									<div class="card-body">
										<form  method="GET" action="ajouter_livraison.php"  id="form">
											<div class="list-group">
												<div class="list-group-item py-3" data-acc-step>
													<h5 class="mb-0" data-acc-title>Name &amp; Email</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Name:</label>
													<input id="nom" type="text" name="nomC" class="form-control" onblur="verifnom(this);"/>
															</div>
															<div class="form-group">
																<label >Email:</label>
																<input id=mail" type="text" name="mailC" class="form-control" onblur="verifMail(this);" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-3" data-acc-step>
													<h5 class="mb-0" data-acc-title>Contact</h5>
													<div data-acc-content>
														<div class="my-3">
															
															<div class="form-group">
																<label>Mobile:</label>
																<input id="mobile" type="text" name="telC" class="form-control" onblur="veriftel(this);" />
															</div>

														</div>
													</div>
												</div>
												<div class="list-group-item py-3" data-acc-step>
													<h5 class="mb-0" data-acc-title>Payment</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Credit card:</label>
																<input id="card" type="text" name="card" class="form-control" onblur="verifref(this);">
															</div>
															<div class="form-group form-row">
																
																<div class="col-sm-4">
																	<label>CVV:</label>
				                             	<input id="code" type="text" name="code" class="form-control" onblur="verifref(this)">
																</div>


															</div>
															
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
									</div>
		</div>
		<!--app closed-->

		<!--Footer -->

<!--LIIV-->

			<!-- Back to top -->

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

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Select2 js-->
		<script src="assets/plugins/select2/select2.full.js"></script>

		<!--Inputmask js-->
		<script src="assets/plugins/inputmask/jquery.inputmask.js"></script>

		<!--Moment js-->
		<script src="assets/plugins/moment/moment.min.js"></script>

		<!--Bootstrap-daterangepicker js-->
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!--Bootstrap-datepicker js-->
		<script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

		<!--Bootstrap-colorpicker js-->
		<script src="assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

		<!--Bootstrap-timepicker js-->
		<script src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--iCheck js-->
		<script src="assets/plugins/iCheck/icheck.min.js"></script>

		<!--MutipleSelect js-->
		<script src="assets/plugins/multipleselect/multiple-select.js"></script>
		<script src="assets/plugins/multipleselect/multi-select.js"></script>

		<!--Accordion-Wizard-Form js-->
		<script src="assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>

		<!--Tempusdominus js-->
		<script src="assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js"></script>

		<!--forms js-->
		<script src="assets/js/forms.js"></script>

		<script type="text/javascript" src="js/form.js"></script>
       <script type="text/javascript" src="js/verif.js"></script>
		<!--Advanced Froms -->
		<script src="assets/js/advancedform.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

	</body>

<!-- Mirrored from www.spruko.com/demo/splite/emptypage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:07 GMT -->
</html>