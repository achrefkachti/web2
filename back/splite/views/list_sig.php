<!DOCTYPE html>
<html lang="en">
	<?PHP
include "../core/pictureC.php";
$picture1C=new pictureC();
$listepictures=$picture1C->afficherpictures();
include "../core/commentC.php";
$commentC=new commentC();
$listecomments=$commentC->rechercherListecomment();
?>
<!-- Mirrored from www.spruko.com/demo/splite/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:01 GMT -->
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
		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

			    
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
                    <li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="gerer_gal.php"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Evénements</span><span class="badge badge-orange nav-badge">3</span></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="events.php"><span>Gérer events </span></a></li>
								<li><a class="slide-item" href="gerer_gal.php"><span>Gérer galerie</span></a></li>
								<li><a class="slide-item" href="list_sig.php"><span>Commentaires signalées</span></a></li>
							</ul>
						</li>
                    <li>
                        <a class="side-menu__item" href="principal.php"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Gestion Produits</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="laflame.html"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label">Gestion Livraison</span></a>
                    </li>

                </ul>
            </aside>
				<!--aside closed-->

           
		<!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Commentaires signalées</h4>
						</div>
						<!--page-header closed-->
						<!--section-body open-->
						<div class="section-body card-columns gallery">
						<!--app-content open-->
				
					<div class="row">
							<div class="col-md-12">
								<?PHP
							foreach($listecomments as $row){
								?>
								<div class="card">
									<div class="card-header">
										<h4><?PHP echo $row['contenu']; ?></h4>
									</div>
									<form method="POST" action="supprimer_comment.php">
									<div class="card-body">
										<div class="form-group">
											<p><?PHP echo $row['utilisateur']; ?></p>
										</div>
										<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
										<button class="btn btn-primary" data-clipboard-action="comment" data-clipboard-target="#foo">Supprimer commentaire</button>
									</div>
								</form>
								</div>
								<?PHP
							    }
								?>
							</div>
						</div>
					
				<!--app-content closed-->
							</div>
			</div>
		</div>
		<!--app closed-->
		

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->

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

		<!--gallery js-->
		<script src="assets/plugins/gallery/main.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

	</body>

<!-- Mirrored from www.spruko.com/demo/splite/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:02 GMT -->
</html>
