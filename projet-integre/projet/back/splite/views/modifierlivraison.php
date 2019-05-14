<?php

include "../core/personneC.php";
$Livreur1C= new LivreurC();
$listeEmployes= $Livreur1C->afficherLivreur();

	?>
}
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