<?PHP
include "../entities/formulaire.php";
include "../core/formulaireC.php";
$formulaire1C=new FormulaireC();
$listeFormulaires=$formulaire1C->trierformulaire();

//var_dump($listeEmployes->fetchAll());
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
<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>arianascooters</title>

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
		<script src="v.js"></script>

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
							<h4 class="page-title">Data Tables</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
<!--=====================================================================================================================================-->

                     


                   
					 <!--row open-->
					<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>Les Formulaires</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<div id="example-2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
												<div class="row">
													<div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example-2_length">
														<div class="row">
															<div class="col-sm-12"><table id="example-2" class="table table-striped table-bordered border-t0 text-nowrap w-100 dataTable no-footer" role="grid" aria-describedby="example-2_info">
												<thead>
													<tr role="row">
														<th class="text-center sorting_asc" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="cin: activate to sort column descending" style="width: 88.2px;">CIN</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="nom: activate to sort column ascending" style="width: 93px;">Nom</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="prenom: activate to sort column ascending" style="width: 242.6px;">Prenom</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="email: activate to sort column ascending" style="width: 112.2px;">Email</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="teleph: activate to sort column ascending" style="width: 113.8px;">Telephone</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="catg: activate to sort column ascending" style="width: 260.4px;">Catégorie</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="ref: activate to sort column ascending" style="width: 260.4px;">Référence</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="date: activate to sort column ascending" style="width: 260.4px;">Date</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="quant: activate to sort column ascending" style="width: 260.4px;">Quantité</th>
														<th class="text-center sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="demande: activate to sort column ascending" style="width: 260.4px;">Demande</th>


													</tr>
												</thead>
												<tbody>
													<?PHP
                                                 foreach($listeFormulaires as $row){
											    ?>
												<tr role="row" class="odd">
														<td class="sorting_1"><?PHP echo $row['cin']; ?></td>
														<td><?PHP echo $row['nom']; ?></td>
														<td><?PHP echo $row['prenom']; ?></td>
														<td><?PHP echo $row['email']; ?></td>
														<td><?PHP echo $row['teleph']; ?></td>
														<td><?PHP echo $row['catg']; ?></td>
														<td><?PHP echo $row['ref']; ?></td>
														<td><?PHP echo $row['date']; ?></td>
														<td><?PHP echo $row['quant']; ?></td>
														<td><?PHP echo $row['demande']; ?></td>
														<?PHP
                                                                             }
													?>
													</tr></tbody>
											</table></div>
										</div>
									</div>
								</div>
							</div>
							<form method="get" action="tri.php">
													<button type="submit" class="btn btn-danger btn-rounded btn-sm my-0" >Trier </button>
													
												</form>
						</div>
						<!--row closed-->
					



<!--=====================================================================================================================================-->

					</section>
				</div>
				<!--app-content closed-->

				<footer class="main-footer">
					<div class="text-center">
						Copyright &copy;Splite 2019. Design By<a href="https://spruko.com/"> Spruko</a>
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

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<a href="#" id="addClass"><i class="ti-comment"></i></a>

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

<!-- Mirrored from www.spruko.com/demo/splite/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:41 GMT -->
</html>