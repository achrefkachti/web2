

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
									<h5 class="text-capitalize text-dark mb-1">Salahddine</h5>
									<h4 class="text-capitalize text-dark mb-1">Ben Hamida</h4>
									<small class="text-overflow m-0"> Admin</small>
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
<aside class="app-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
					<div class="app-sidebar__user active">
						<div class="dropdown user-pro-body text-center">
							<div class="nav-link pl-1 pr-1 leading-none ">
								<img src="assets/img/avatar/torchgan.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1 mCS_img_loaded">
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
						<li class="active">
							<a class="side-menu__item active" href="panierBE.php"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Gestion Panier</span></a>
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
				</div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></aside>
				<!--aside closed-->

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Gestion Panier</h4>
							
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4>Modifier Coupon</h4>
									</div>
									<div class="card-body">
										<?PHP
include "../entities/coupon.php";
include "../core/couponC.php";
if (isset($_GET['idc'])){
	$couponC=new couponC();
    $result=$couponC->getid($_GET['idc']);
	foreach($result as $row){
		$idc=$row['idc'];
		$nomc=$row['nomc'];
		$valeur=$row['valeur'];
		$dateE=$row['dateE'];
		
?>
										<form class="form-horizontal" method="POST" id="form" >
											<div class="form-group row">
												<label class="col-md-3 col-form-label"  >ID Coupon </label>
												<div class="col-md-9">
												<input type="text" class="form-control" readonly onblur="verifref(this);" id="idc" name="idc" value="<?PHP echo $idc ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Nom du Coupon </label>
												<div class="col-md-9">
													<input type="text" class="form-control" onblur="verifnom(this);" name="nomc" id="nomc" value="<?PHP echo $nomc?>"  >
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label" for="example-email">Pourcentage</label>
												<div class="col-md-9">
													<select class="form-control" name="valeur" id="valeur" value="<?PHP echo $valeur?>">
														<option>0.05</option>
														<option>0.10</option>
														<option>0.15</option>
													
													</select>
												</div>
											</div>
										<!--	<div class="form-group row">
												<label class="col-md-3 col-form-label">Password</label>
												<div class="col-md-9">
													<input type="password" class="form-control" value="password">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Placeholder</label>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Text area</label>
												<div class="col-md-9">
													<textarea class="form-control" rows="6">Hiiiii.....</textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Readonly</label>
												<div class="col-md-9">
													<input type="text" class="form-control" readonly="" value="Readonly value">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Disabled</label>
												<div class="col-md-9">
													<input type="text" class="form-control" disabled="" value="Disabled value">
												</div>
											</div>
-->
											<div class="form-group row mb-0">
												<label class="col-md-3 col-form-label"></label>
												<div class="col-md-9">
													<input class="form-control" type="date" id="date" name="dateE" value="<?PHP echo $dateE ?>">
												</div>
											</div>

											<button type="submit" class="btn btn-primary mt-1 mb-0"  value="modifier" name="modifier">Modifier</button>
											<input type="hidden" name="idcc" value="<?PHP echo $_GET['idc'];?>">

										</form>
										<?PHP
	}
}
if (isset($_POST['modifier'])){
	$coupon=new coupon( $_POST['nomc'],$_POST['valeur'],$_POST['dateE'] );
	$couponC->modifiercoupon($coupon,$_POST['idcc']);
  echo "<META http-equiv='refresh' content='0;URL=panierBE.php'>";
}
?>
																	

									</div>
								</div>
							</div>



                        <!--row open-->
					<!--
						<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Vertical Form</h4>
									</div>
									<div class="card-body">
										<form >
											<div class="">
												<div class="form-group">
													<label for="exampleInputEmail1">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
												</div>
												<div class="checkbox">
													<div class="custom-checkbox custom-control">
														<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
														<label for="checkbox-1" class="custom-control-label">Check me Out</label>
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-primary mt-1 mb-0">Submit</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Horizontal Form</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal" >
											<div class="form-group row">
												<label for="inputName" class="col-md-3 col-form-label">User Name</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="inputName" placeholder="Name">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputEmail3" class="col-md-3 col-form-label">Email</label>
												<div class="col-md-9">
													<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputPassword3" class="col-md-3 col-form-label">Password</label>
												<div class="col-md-9">
													<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
												</div>
											</div>
											<div class="form-group mb-0 row justify-content-end">
												<div class="col-md-9">
													<div class="checkbox">
														<div class="custom-checkbox custom-control">
															<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
															<label for="checkbox-2" class="custom-control-label">Check me Out</label>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group mb-0 mt-2 row justify-content-end">
												<div class="col-md-9">
													<button type="submit" class="btn btn-info">Sign in</button>
													<button type="submit" class="btn btn-primary">Cancel</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						

                      
						<div class="row">
							<div class="col-12 ">
								<div class="card">
									<div class="card-header">
										<h4>Different Height</h4>
									</div>
									<div class="card-body">
										<input class="form-control input-lg" type="text" placeholder=".input-lg">
										<br>
										<input class="form-control" type="text" placeholder="Default input">
										<br>
										<input class="form-control input-sm" type="text" placeholder=".input-sm">
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4>Different Width</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-3 m-t-5 m-b-5">
												<input type="text" class="form-control" placeholder=".col-xs-3">
											</div>
											<div class="col-md-4 m-t-5 m-b-5">
												<input type="text" class="form-control" placeholder=".col-xs-4">
											</div>
											<div class="col-md-5 m-t-5 m-b-5">
												<input type="text" class="form-control" placeholder=".col-xs-5">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					-->
					<!--	<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>Form Input Grid</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-12" class="form-control">
											</div>
											<div class="col-md-6 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-6" class="form-control">
											</div>
											<div class="col-md-6 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-6" class="form-control">
											</div>
											<div class="col-md-4 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-4" class="form-control">
											</div>
											<div class="col-md-4 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-4" class="form-control">
											</div>
											<div class="col-md-4 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-4" class="form-control">
											</div>
											<div class="col-md-3 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-3" class="form-control">
											</div>
											<div class="col-md-3 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-3" class="form-control">
											</div>
											<div class="col-md-3 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-3" class="form-control">
											</div>
											<div class="col-md-3 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-3" class="form-control">
											</div>
											<div class="col-md-2 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-2" class="form-control">
											</div>
											<div class="col-md-2 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-2" class="form-control">
											</div>
											<div class="col-md-2 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-2" class="form-control">
											</div>
											<div class="col-md-2 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-2" class="form-control">
											</div>
											<div class="col-md-2 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-2" class="form-control">
											</div>
											<div class="col-md-2 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder=".col-md-2" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
											<div class="col-md-1 col-sm-12 col-xs-12 form-group">
												<input type="text" placeholder="col-1" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
-->
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
		<script src="verification.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>


	 </body>

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
</html>
