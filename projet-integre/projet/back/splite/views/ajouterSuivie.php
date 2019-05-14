
<?PHP
include "../core/suivieC.php";
include "../core/formulaireC.php";

$suivie1C=new SuivieC();
$listeSuivies=$suivie1C->afficherSuivies();
$listeSuivies=$suivie1C->afficherall();


$formulaire1C=new FormulaireC();
$listeFormulaires=$formulaire1C->afficherFormulaires();
$listeFormulaires2=$formulaire1C->afficherFormulaires2();
//var_dump($listeEmployes->fetchAll());
?>





<?php


// Ascending Order
if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM suivie ORDER BY remb ASC";
    $result = executeQuery($asc_query);
}

// Descending Order
elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM suivie ORDER BY remb DESC";
          $result = executeQuery($desc_query);
    }
    
    // Default Order
 else {
        $default_query = "SELECT * FROM suivie";
        $result = executeQuery($default_query);
}


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "web");
    $result = mysqli_query($connect, $query);
    return $result;
}

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

          

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Ajouter les Suivies</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">SAV</a></li>
								<li class="breadcrumb-item active" aria-current="page">Suivie</li>
							</ol>
						</div>
						<!--page-header closed-->

<!--=====================================================================================================================================-->						
					

						<!--row open-->

                         <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Suivie</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" method="POST" action="ajoutSuivie.php" name="f">



                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 col-form-label">ID</label>
                        <div class="col-md-9">
                          <select class="form-control" id="Id" name="idd" onchange="remplir(this)">
                          	
								<?PHP
								foreach($listeFormulaires as $row){
								?>
							<option value="<?PHP  echo $row['id'].'-'.$row['email'].'-'.$row['cin']; ?>"><?PHP echo $row['id']; ?>
							</option>
								<?PHP } ?>
								</select>

								
								<?PHP
								
								foreach($listeFormulaires2 as $row){ ?>

									<input type="hidden" name="id"  value="<?PHP  echo $row['id']; ?>"> 
									<?PHP } ?>
								
                     <!--     <input type="number" class="form-control" id="Cin" placeholder="Cin" name="cin" onblur="veriftel(this)" required> -->
                        </div>
                      </div>	

                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 col-form-label">CIN</label>
                        <div class="col-md-9">

                         <input type="number" class="form-control" id="Cin" placeholder="Cin" name="cin" onblur="veriftel(this)" maxlength="8" readonly>
								
                     <!--     <input type="number" class="form-control" id="Cin" placeholder="Cin" name="cin" onblur="veriftel(this)" required> -->
                        </div>
                      </div>	

                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                        	
                         <input type="email" class="form-control" id="Email" placeholder="Email" name="email" onblur="veriftel(this)" readonly>
								
                     <!--     <input type="number" class="form-control" id="Cin" placeholder="Cin" name="cin" onblur="veriftel(this)" required> -->
                        </div>
                      </div>

                   


                      

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="example-email">Type d'Examen</label>
                        <div class="col-md-9" >
                          <select class="form-control" id="Exam" name="exam">
                            <option>Negatif</option>
                            <option>Positif</option>
                            <option>Pas encore</option>
                            
                          </select>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="example-email">Type de Remboursement</label>
                        <div class="col-md-9" >
                          <select class="form-control" id="Remb" name="remb">
                            <option>Reparation</option>
                            <option>Bon d'achats</option>
                            <option>Viremment</option>
                            <option>Retour du produit</option>
                            <option>Pas encore</option>
                            
                          </select>
                        </div>
                      </div>



                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Date de retour</label>
                        <div class="col-md-9">
                          <input class="form-control" type="date" id="myDate" name="dat" >
                        </div>
                      </div>
                   
                      

                        <button type="submit" class="btn btn-primary mt-1 mb-0" name="ajouter" value="Envoyer" onclick="envoyer()" >Submit</button>
                    
                </div></div>
             

               </form>


              <!--row open-->

                    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Les Suivies</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" method="POST" action="ajouterSuivie.php" >
									<div class="card-body">
										<div id="table" class="table-responsive table-editable">
											<table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
												<tr>
													<th class="text-center">ID </th>
													<th class="text-center">CIN </th>
													<th class="text-center">Email </th>
													<th class="text-center">Type d'Examen</th>
													<th class="text-center">Type de Remboursement</th>
													<th class="text-center">Date de retour</th> 
													<th class="text-center">Modifier</th>
													<th class="text-center">Supprimer</th>
												</tr>
												<?PHP
                                                  while ($row = mysqli_fetch_array($result)):
											    ?>
												<tr>
													<td class="pt-3-half"><?PHP echo $row['id']; ?></td>
													<td class="pt-3-half"><?PHP echo $row['cin']; ?></td>
													<td class="pt-3-half"><?PHP echo $row['email']; ?></td>
													<td class="pt-3-half"><?PHP echo $row['exam']; ?></td>
													<td class="pt-3-half"><?PHP echo $row['remb']; ?></td>
													<td class="pt-3-half"><?PHP echo $row['dat']; ?></td>
											       
													<td>	
														<span class="table-remove"><a href="modifierSuivie.php?id=<?PHP echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-primary badge">Modifier</button></a></span>
														
													</td>

													<td>	
													  <form class="form-horizontal" method="POST" action="supprimerSuivie.php">
														<span class="table-remove">
															<button class="btn btn-sm btn-primary badge" 
															value =  "supprimer" name="ajouter" type="submit">
															<i class="fa fa-trash"></i>
														    </button>
														</span>
														<input type="hidden" value ="<?php echo $row['id']; ?>" name="id">
													  </form>

														<?PHP endwhile;?>
														
													</td>

													

                                                    
													
												</tr>
												
											</table>
										</div>
									</div>
             						
            
                            
								
									<div class="card-body">
										<div class="input-group">
											
                                            <button type="submit" class="btn btn-primary mt-1 mb-0" name="ASC" value="Ascending" >Ascending</button><br><br>
                                            <button type="submit" class="btn btn-primary mt-1 mb-0" name="DESC" value="Descending" >Descending</button>
											<br><br>
											</div>
										</div>
									</div>
								
           
								</div>
							</div>
						</div>

</form>
                    						<!--row closed-->

                        
<!--=====================================================================================================================================-->				
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
						<div class="popup-head-left pull-left"><img src="assets/img/avatar/avatar-3.jpg" alt="iamgurdeeposahan" class="mr-2"> Youssef Ghedas</div>
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
		<script >
			function remplir(input)
			{
                      var chaine=input.value;
                      var tab=chaine.split('-');
                      var cin=Number(tab[2]);
                      f.cin.value=cin;
                      f.email.value=tab[1];
                      f.id.value=tab[0];
			}

            

		</script>

	 </body>

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
</html>