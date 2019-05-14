<?PHP
include "../entities/coupon.php";
include "../core/couponC.php";
include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/trans.php";
include "../core/transC.php";

$couponC=new couponC();
$listecoupon=$couponC->affichercoupon();
$panierC=new panierC();
$listepanier=$panierC->afficherprod();

$transC=new transC();
$listeTran=$transC->afficherT();
$aloha=$transC->stat();
$tot=0;
$stat=$couponC->stat();

/*
$dbhandle =new mysqli('localhost','root','','web');
echo $dbhandle->connect_error;

$query ="SELECT valeur,count(etat) FROM coupon group by valeur";
$res=$dbhandle->query($query);
*/
$maction='afficher';

  if(isset($_GET['maction']))
            {$maction=$_GET['maction'];}
          if($maction=='trier')
            {
              $par=$_GET['par'];
              $listecoupon=$couponC->trier($par);
            }
            if (isset($_GET['search']))
  {
    $idc=$_GET['search'];
    $listecoupon=$couponC-> rechercherC($idc);

   }
   
/*
 require_once  '../config.php';
$db=config::getConnexion();
  
   $req1= $db->query("SELECT count(idc) as total ,valeur FROM coupon GROUP by valeur   ");
   $req1->execute();
                $liste= $req1->fetchALL(PDO::FETCH_OBJ);
                    $req2= $db->query("SELECT count(idc) as nb FROM coupon " );
    $nb = $req2->fetch();
$dataPoints = array();
foreach ($liste as $tache) {
    $dataPoints[] = array('y' => $tache->total , 'label' => $tache->valeur);
}
*/
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
    <title>Splite-Admin Dashboard</title>

    <!--Favicon -->
    <link rel="icon" href="favicon.html" type="image/x-icon" />

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

    <script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "Coupon par valeur"
    },
    subtitles: [{
        //text: "November 2017"
    }],
    data: [{
        type: "pie",
        yValueFormatString: "#,##",
        indexLabel: "Valeur : {label} ({y} Produit)",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
             ['valeur', 'Somme'],
               <?php
foreach ($stat as $row) {
         
                    
            
          echo "['".$row['valeur']."', '".$row['a']."'],";
          }

          ?>

       
        ]);

        var options = {
            title: 'Coupon par valeur',
          pieHole: 10,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
   
  <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          [' Client', 'Total'],
           <?php
        foreach ($aloha as $key ) {
       echo "['".$key['nomcl']."', '".$key['total']."'],";
                    }
          ?>
      
        ]);

        var options = {
          title: 'Total des achats par clients',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Total des achats par clients',
                   subtitle: '' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "50%" }
        };

        var chart = new google.charts.Bar(document.getElementById('what'));
        chart.draw(data, options);
      };
    </script>

</head>

<body class="app ">
    <div class="wave -three"></div>

    <div id="spinner"></div>

    <!--app open-->
    <div id="app" class="page">
        <div class="main-wrapper">

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
            <div class="app-content">
                <section class="section">

                    <!--page-header open-->
                    <div class="page-header">
                        <h4 class="page-title">Gestion Panier</h4>
                        <!--<ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="text-light-color">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                            </ol>-->
                    </div>
                    <!--page-header closed-->

                    <!--row open-->
                    <div class="card">
                        <div class="card-header">
                            <h4>Ajouter un Coupon</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="ajouter_coupon.php" id="form">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Nom du Coupon </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nomc" id="nomc" onblur="verifnom(this);">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Affecter à </label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="this field can be empty" class="form-control" name="affect" id="affect" onblur="verifnom(this);">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="example-email">Pourcentage</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="valeur" id="valeur">
                                            <option>0.05</option>
                                            <option>0.10</option>
                                            <option>0.15</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label class="col-md-3 col-form-label">Date d'Expiration</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="date" name="dateE" id="date">
                                    </div>
                                </div>
                                <button type="submit" name="ajouter" class="btn btn-primary mt-1 mb-0">Ajouter</button>

                            </form>

                        </div>
                    </div>



                    <!--Tableauuuuu coupooonnnnn-->

  <div class="col-12">
     <div class="card">



<div class="card-header d-flex align-items-center">
                        <form class="form-inline" method="GET">
                            <input class="form-control mr-sm-2" name="search" type="Chercher" placeholder="Chercher" aria-label="Id Comande">
                             <button class="btn btn-primary mt-1 mb-0" type="submit">Chercher</button>
                         </form>
                    </div>  
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tri
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

    
   
  <a class="dropdown-item " href="panierBE.php?maction=trier&par=idc">ID </a>
    <a class="dropdown-item " href="panierBE.php?maction=trier&par=nomc">NOM </a>
    <a class="dropdown-item " href="panierBE.php?maction=trier&par=valeur">Valeur </a>
    <a class="dropdown-item " href="panierBE.php?maction=trier&par=dateA">Date Activation </a>
    <a class="dropdown-item " href="panierBE.php?maction=trier&par=dateE">Date d'Expiration </a>
    <a class="dropdown-item " href="panierBE.php?maction=trier&par=etat">Etat </a>

    
   
    
   
  </div>
</div>



                            <div class="card-header">
                                <span class="table-add float-right">
                                    <a href="#!" class="btn btn-icon"><i class="fa fa-plus fa-1x" aria-hidden="true"></i></a>
                                </span>
                                <h4>Tableau des Coupons</h4>
                            </div>
                            <div class="card-body">
                                <div id="table" class="table-responsive table-editable">
                                    <table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
                                        <tabody>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nom</th>
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
                                                <td class="pt-3-half" contenteditable="true"> <?= $row->idc?> </td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row->nomc?> </td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row->valeur?> </td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row->dateA?></td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row->dateE?></td>
                                                <td class="pt-3-half" contenteditable="true"> <?php echo $row->etat?> </td>
                                                <td class="pt-3-half">
                                                    <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                                    <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                                </td>
                                                <!-- bouton supprimer-->

                                                <td>
                                                    <form method="POST" action="supprimercoupon.php">
                                                        <span><input type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="Supprimer" value="Supprimer">
                                                            <input type="hidden" value="<?= $row->idc?>" name="idC"></span>

                                                    </form>
                                                </td>
                                                <!-- bouton modifier-->


                                                <td>
                                                    <span> <a href="modifiercoupon.php?idc=<?= $row->idc?>"><input type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="" value="Modifier"></a>
                                                    </span>



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
                                    <table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>ID Transaction</th>
                                                <th>ID Client</th>
                                                <th>Nom Client</th>
                                                <th>Total</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    foreach( $listeTran as $row )
                                                        {
                                                            ?>

                                            <tr>
                                                <td><?php echo $row['idt']; ?></td>
                                                <td><?php echo $row['idcl']; ?></td>
                                                <td><?php echo $row['nomcl']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                                <td><?php echo $row['dateT']; ?></td>
                                            </tr>
                                            <?php

                                            }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                                <!--charts opened-->
<div class="row row-deck">
<div class="col-12 col-md-12 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Bar Chart</h4>
        </div>
        <div class="card-body">
            <div id="chart_bar" class="overflow-hidden">
              
                <div id="donutchart" style="width: 500px; height: 500px;"></div>
                <!-- <div id="donutchart" style="height: 370px; width: 100%;"></div>-->
                             <?php
foreach ($stat as $row) {
         
                    
            
          echo $row['valeur'];
          echo $row['a'];
          }

          ?>


            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4> Donut Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart_bar" class="overflow-hidden">
              
                <div id="what" style="width: 200px; height: 200px;">
                     
                </div>

            </div>
                                       
                                    </div>
                                </div>
                            </div>

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
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

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


    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


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
    <script src="verification.js"></script>
</body>

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->

</html>
