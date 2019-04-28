<?php

include "../core/personneC.php";
$Livraison1C= new LivraisonC();
$listeliv= $Livraison1C->afficherLivraison();
	?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.spruko.com/demo/splite/formeditor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:48 GMT -->
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

		<!--Summernote css-->
		<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.css">

		<!--Bootstrap-wysihtml5 css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<!--Scripts js-->



	</head>

	<body class="app ">
	<div class="wave -three"></div>

		<div id="spinner"></div>

		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

			    <!--nav open-->
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
									<span class="text-white">Hello,<span class="ml-1">Moetez boubakri</span></span>
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
                            <a class="side-menu__item" href="what.php"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Gestion Profiles</span></a>
                        </li>
                        <li>
                            <a class="side-menu__item" href="panierBE.php"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Gestion Panier</span></a>
                        </li>
                      <li class="slide ">
                               <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">SAV</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li ><a href="ajouterSuivie.php" class="slide-item "> Ajouter Suivie</a></li>
                                    <li><a href="supprimerSuivie.html" class="slide-item"> Supprimer Suivie</a></li>
                                    <li><a href="afficherFormulaireback.php" class="slide-item"> Afficher Formulaire</a></li>
                                    <li><a href="mailingachref.php" class="slide-item"> Envoyer Mail</a></li>
                                    <li><a href="stat1.php" class="slide-item"> Statistique Formulaire</a></li>
                                    <li><a href="stat2.php" class="slide-item">Statistique Formulaire II</a></li>
                                    <li><a href="stat3.php" class="slide-item">Statistique Formulaire III</a></li>
                                </ul>
                            </li>
                        <li>
                            <a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fa fa-edit"></i><span class="side-menu__label">Gestion Evenements</span></a>
                        </li>
                        <li>
                            <a class="side-menu__item" href="principal.php"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Gestion Produits</span></a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">Gestion Livraison</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="livraison.php"><span>Livraison</span></a></li>
                                <li><a class="slide-item" href="Livreur.php"><span>Livreur</span></a></li>

                            </ul>
                        </li>

                    </ul>
                </aside>

				<!--aside closed-->

              	<div class="app-content">
					<section class="section">


						<!--row open-->
						<div class="row">
							<div class="col-md-12">
								<div class="card export-database">
									<div class="card-header">
										<h4>Livraison</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
													<tr>

														<th>nom et prénom</th>
														<th>E-mail</th>
														<th>Tel</th>
														<th>credit card</th>
														<th>code</th>
														<th> Remove</th>
														<th> Modifier</th>
													</tr>
												</thead>
												<tbody>
													<?php
foreach($listeliv as $row){
	?>

													<tr>
														<td><?php echo $row['nomC']; ?></td>
														<td><?php echo $row['mailC']; ?></td>
														<td><?php echo $row['telC']; ?></td>
														<td><?php echo $row['card']; ?></td>
														<td><?php echo $row['code']; ?></td>
														<td>
													 <form method="POST" action="supprimer_livraison.php">
														<span >
															<input type="submit" class="btn btn-danger btn-rounded btn-sm my-0"  value =  "supprimer" name="supprimer">
                                                     <input type="hidden" value ="<?php echo $row['code']; ?>" name="code">
														</span>
													</form>
													</td>
													<td>
														<span > <a href="modifierlivraison.php?code=<?PHP echo $row['code']; ?>"><input  type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="" value="Modifier"></a>
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

						<!--row closed-->

					</section>
				</div>
				<!--app-content closed-->


			</div>
		</div>
		<!--app closed-->

		<!--DataTables js-->

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

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--ckeditor js-->
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>

		<!--Summernote js-->
		<script src="assets/plugins/summernote/summernote-bs4.js"></script>

		<!--Scripts js-->
	<!--Jquery.min js-->
		<script src="assets/js/jquery.min.js"></script>

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

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Scripts js-->
		<script src="assets/js/jquery.showmore.js"></script>
		<script src="assets/js/datatable.js"></script>
		<script src="assets/js/scripts.js"></script>



	</body>

<!-- Mirrored from www.spruko.com/demo/splite/formeditor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:49 GMT -->
</html>
