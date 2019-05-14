<?PHP 
include "../entities/coupon.php";
include "../core/couponC.php";
$couponC=new couponC();
$listecoupon=$couponC->affichercoupon();

?>
<!DOCTYPE html>
<html lang="en">
	<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
  height: 30px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: darkblue; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
</style>
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

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--gallery css-->
		<link rel="stylesheet" href="assets/plugins/gallery/main.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

	</head>

	<body class="app ">
	<div class="wave -three"></div>

		<div id="spinner"></div>
				<!--anv open-->
            <nav class="navbar navbar-expand-lg main-navbar">
                <a class="header-brand" href="index-2.html">
                    <img src="assets/img/brand/logo.png" class="header-brand-img" alt="Splite-Admin  logo">
                </a>
                <ul class="navbar-nav navbar-right">
                    
                    <li class="dropdown dropdown-list-toggle d-none d-lg-block">
                        <a href="#" class="nav-link nav-link-lg full-screen-link">
                            <i class="fa fa-expand " id="fullscreen-button"></i>
                        </a>
                    </li>
                    
                </ul>
            </nav>
            <!--nav closed-->
                <!--app-content open-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Galerie</h4>
						</div>
						<!--page-header closed-->
				<!--aside open-->
				<aside class="app-sidebar">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="nav-link pl-1 pr-1 leading-none ">
                            <img src="assets/img/as.png" alt="user-img" class="avatar-xl rounded-circle mb-1">
                            <span class="pulse bg-success" aria-hidden="true"></span>
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-1 text-dark">ADMIN</h6>
                        </div>
                    </div>
                </div>

                <ul class="side-menu">
                	<li class="slide">
                        <a class="side-menu__item" href="panierBE.php"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Gestion Panier</span></a>
                    </li>
                    <li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">Comptes / Cartes</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="tableclient.php"><span>Gestion des comptes</span></a></li>
								<li><a class="slide-item" href="tablecarte.php"><span>Gestion des cartes</span></a></li>
								<li><a class="slide-item" href="demande.php"><span>Gestion des demandes</span></a></li>
							</ul>
						</li>
                    <li class="slide">
					                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">Gestion Livraison</span><i class="angle fa fa-angle-right"></i></a>
																			<ul class="slide-menu">
																					<li><a class="slide-item" href="livraison.php"><span>Livraison</span></a></li>
																					<li><a class="slide-item" href="Livreur.php"><span>Livreur</span></a></li>
																							<li><a class="slide-item" href="chartg.php"><span>STAT</span></a></li>

																					<li><a class="slide-item" href="mailing.php"><span>Confirmer par mail</span></a></li>


																			</ul>
																	</li>
					                        </li>
                  <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-edit"></i><span class="side-menu__label">Service après Vente</span></a>
							<ul class="slide-menu">
								<li><a href="ajouterSuivie.php" class="slide-item"> Ajouter Suivie</a></li>
                                <li><a href="supprimerSuivie.html" class="slide-item"> Supprimer Suivie</a></li>
                 				<li><a href="afficherFormulaireback.php" class="slide-item"> Afficher Réclamation</a></li>
               					<li><a href="mailing.php" class="slide-item"> Envoyer Mail</a></li>
                				<li><a href="gererAvis.php" class="slide-item"> Gérer les Avis</a></li>
                				<li><a href="stat.php" class="slide-item"> Statistique Réclamation</a></li>
                				<li><a href="stat2.php" class="slide-item">Statistique Réclamation II</a></li>
                				<li><a href="stat3.php" class="slide-item">Statistique Réclamation III</a></li>

              </ul>
						</li>
                    <li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="gerer_gal.php"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Evénements</span></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="events.php"><span>Gérer events </span></a></li>
								<li><a class="slide-item" href="gerer_gal.php"><span>Gérer galerie</span></a></li>
								<li><a class="slide-item" href="list_sig.php"><span>Commentaires signalées</span></a></li>
							</ul>
						</li>
                    
<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="principal.php"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Produits</span></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="principal.php"><span>Gestion produits</span></a></li>
								<li><a class="slide-item" href="categorieprinc.php"><span>Gestion categories</span></a></li>
								<li><a class="slide-item" href="statyousf.php"><span>Stats</span></a></li>
							</ul>
						</li>
                </ul>
            </aside>
				<!--aside closed-->

                <!--app-content open-->
			

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Form Elements</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Ajouter un Coupon</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal"  method="POST" action="ajouter_coupon.php">
											<div class="form-group row">
												<label class="col-md-3 col-form-label"  >ID Coupon </label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="idc" onblur="verifref(this);">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"  >Nom du Coupon </label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="nomc" onblur="verifnom(this);">
												</div>
											</div>
											<!--<div class="form-group row">
												<label class="col-md-3 col-form-label">Réference </label>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="Nom" onblur="verifref(this);" >
												</div>
											</div>-->
											<div class="form-group row">
												<label class="col-md-3 col-form-label" for="example-email">Pourcentage</label>
												<div class="col-md-9">
													<select class="form-control" name="valeur">
														<option>5%</option>
														<option>10%</option>
														<option>15%</option>
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
						</form><div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Ajouter un Coupon</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal" >
											<div class="form-group row">
												<label class="col-md-3 col-form-label"  >ID Coupon </label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="idc" onblur="verifref(this);">
												</div>
											</div>
											<!--<div class="form-group row">
												<label class="col-md-3 col-form-label">Réference </label>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="Nom" onblur="verifref(this);" >
												</div>
											</div>-->
										
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
												<label class="col-md-3 col-form-label">Date d'Expiration</label>
												<div class="col-md-9">
													<input class="form-control" type="date" name="dateE">
												</div>
											</div>
																		<button type="submit" class="btn btn-primary mt-1 mb-0">Ajouter</button>


									</div>
								</div>
							</div>


							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Modifier Coupon</h4>
									</div>
									<div class="card-body">
										<?PHP

if (isset($_GET['idc'])){
	$couponC=new couponC();
    $result=$couponC->getid($_GET['idc']);
	foreach($result as $row){
		$idc=$row['idc'];
	    $nomc=$row['nomc'];
		$valeur=$row['valeur'];
		$dateE=$row['dateE'];

	
?>
										<form class="form-horizontal" method="POST">
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ID Coupon </label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="idc" value="<?PHP echo $_GET['idc'] ?>" onblur="verifref(this);">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Nom du Coupon </label>
												<div class="col-md-9">
													<input type="text" class="form-control" value="<?PHP echo $nomc ?>" name="nomc" onblur="verifnom(this);">
												</div>
											</div>
											<!--<div class="form-group row">
												<label class="col-md-3 col-form-label">Réference </label>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="Nom" onblur="verifref(this);" >
												</div>
											</div>-->
											<div class="form-group row">
												<label class="col-md-3 col-form-label" for="example-email">Pourcentage</label>
												<div class="col-md-9">
													<select class="form-control" name="valeur" value="<?PHP echo $valeur ?>">
														<option>5%</option>
														<option>10%</option>
														<option>15%</option>
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
						</form><div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Ajouter un Coupon</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal" >
											<div class="form-group row">
												<label class="col-md-3 col-form-label"  >ID Coupon </label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="idc" onblur="verifref(this);">
												</div>
											</div>
											<!--<div class="form-group row">
												<label class="col-md-3 col-form-label">Réference </label>
												<div class="col-md-9">
													<input type="text" class="form-control" placeholder="Nom" onblur="verifref(this);" >
												</div>
											</div>-->
										
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
												<label class="col-md-3 col-form-label">Date d'Expiration</label>
												<div class="col-md-9">
													<input class="form-control" type="date" name="dateE" value="<?PHP echo $dateE ?>">
												</div>
											</div>
												<button type="submit" class="btn btn-primary mt-1 mb-0" name="modifier">Modifier</button>

                                               <input type="hidden" name="idc_ini" value="<?PHP echo $_GET['idc'];?>">
									</form>
									<?PHP
	}
}
if (isset($_POST['modifier'])){
	$coupon=new coupon($_POST['idc'],$_POST['nomc'],$_POST['valeur'],$_POST['dateE']);
	$couponC->modifiercoupon($coupon,$_POST['idc_ini']);
	echo $_POST['idc_ini'];
	//header('Location: panierBE.php');
}
?>
									</div>
								</div>
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
												<tabody><tr>
													<th class="text-center" >ID</th>
													<th class="text-center" >Nom</th>
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

													<td><form method="POST" action="supprimercoupon.php">
														<span ><input  type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="Supprimer" value="Supprimer">
															<input type="hidden" value="<?php echo $row['idc']; ?>" name="idc"></span>
														
													</form>
													</td>
																			                        <!-- bouton modifier-->

													</td>
													<td>
														<span ><input  type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="" value="Modifier" data-toggle="modal" data-target="#exampleModal3">
														</span>
														<input type="hidden" value="<?php echo $row['idc']; ?>" data-toggle="modal" data-target="#exampleModal3" name="">
														
													
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
											<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group">      <button class="btn btn-primary buttons-copy buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Copy</span></button> <button class="btn btn-primary buttons-excel buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Excel</span></button> <button class="btn btn-primary buttons-pdf buttons-html5" tabindex="0" aria-controls="example" type="button"><span>PDF</span></button> <button class="btn btn-primary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example" type="button" aria-haspopup="true"><span>Column visibility</span></button> </div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100 dataTable no-footer" role="grid" aria-describedby="example_info" style="width: 1170px;">
												<thead>
													<tr role="row"><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 189px;">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278px;">Position</th><th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137px;" aria-sort="descending">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 66px;">Age</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 131px;">Start date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 112px;">Salary</th></tr>
												</thead>
												<tbody>
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
												<tr role="row" class="odd">
														
														
														
														
														
														
													<td class="">Airi Satou</td><td class="">Accountant</td><td class="sorting_1">Tokyo</td><td>33</td><td>2008/11/28</td><td>$162,700</td></tr><tr role="row" class="even">
														
														
														
														
														
														
													<td class="">Garrett Winters</td><td class="">Accountant</td><td class="sorting_1">Tokyo</td><td>63</td><td>2011/07/25</td><td>$170,750</td></tr><tr role="row" class="odd">
														
														
														
														
														
														
													<td class="">Rhona Davidson</td><td class="">Integration Specialist</td><td class="sorting_1">Tokyo</td><td>55</td><td>2010/10/14</td><td>$327,900</td></tr><tr role="row" class="even">
														
														
														
														
														
														
													<td class="">Shou Itou</td><td class="">Regional Marketing</td><td class="sorting_1">Tokyo</td><td>20</td><td>2011/08/14</td><td>$163,000</td></tr><tr role="row" class="odd">
														
														
														
														
														
														
													<td class="">Sakura Yamamoto</td><td class="">Support Engineer</td><td class="sorting_1">Tokyo</td><td>37</td><td>2009/08/19</td><td>$139,575</td></tr><tr role="row" class="even">
														
														
														
														
														
														
													<td class="">Serge Baldwin</td><td class="">Data Coordinator</td><td class="sorting_1">Singapore</td><td>64</td><td>2012/04/09</td><td>$138,575</td></tr><tr role="row" class="odd">
														
														
														
														
														
														
													<td class="">Michael Bruce</td><td class="">Javascript Developer</td><td class="sorting_1">Singapore</td><td>29</td><td>2011/06/27</td><td>$183,000</td></tr><tr role="row" class="even">
														
														
														
														
														
														
													<td class="">Jennifer Chang</td><td class="">Regional Director</td><td class="sorting_1">Singapore</td><td>28</td><td>2010/11/14</td><td>$357,650</td></tr><tr role="row" class="odd">
														
														
														
														
														
														
													<td class="">Olivia Liang</td><td class="">Support Engineer</td><td class="sorting_1">Singapore</td><td>64</td><td>2011/02/03</td><td>$234,500</td></tr><tr role="row" class="even">
														
														
														
														
														
														
													<td class="">Michelle House</td><td class="">Integration Specialist</td><td class="sorting_1">Sidney</td><td>37</td><td>2011/06/02</td><td>$95,400</td></tr></tbody>
											</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
										</div>
									</div>
								</div>
							</div>

						<!--row closed-->

                        <!--row open-->
					
						<!--<div class="row">
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
						<!-- Popup opened -->

                
				<!-- Popup closed -->

				<!-- MODIFIEEEEEEEEEEEEEEEEEEEEEEEEER weheeeeed-->



		

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



	 </body>

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
</html>