﻿
<?PHP
include "../core/formulaireC.php";
$formulaire1C=new formulaireC();
$listeFormulaires=$formulaire1C->afficherFormulaires();
session_start (); 
//var_dump($listeEmployes->fetchAll());
?>








<?php
// Ascending Order
if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM formulaire ORDER BY date ASC";
    $result = executeQuery($asc_query);
}

// Descending Order
elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM formulaire ORDER BY date DESC";
          $result = executeQuery($desc_query);
    }
    
    // Default Order
 else {
        $default_query = "SELECT * FROM formulaire";
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

    <!--    <script src="ajouterFormulaire.js"> </script> -->
    </head>

    <body class="app ">
    <div class="wave -three"></div>

        <div id="spinner"></div>

        <!--app open-->
        <div id="app" class="page">
            <div class="main-wrapper">

<!--=====================================================================================================================================-->               


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
                                                                                <b>Ruth Arnold</b>
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
                                                                                <b>Sam  Lyman</b>
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
                                                    </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <a href="login.html" class="btn btn-lg btn-primary m-b-5 m-t-5">
                                                                <?php
if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
{   
   ?> 
    <a class="btn btn-lg btn-primary m-b-5 m-t-5" href="modifierclient.php"> <?php echo $_SESSION['username']; ?> </a> 
   <?php echo '<a href="./logout.php" class="flex-c-m trans-04 p-lr-25" >Logout</a>'; 

}

else { ?>
    <a href="login.html" class="btn btn-lg btn-primary m-b-5 m-t-5" >Login</a>

    
    
      <?php

}   ?>

                                                            </a>
                                                            

                                                </form>

                                                
                                            </nav>
                                        </div>
                                    </div>

<!--=====================================================================================================================================-->


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
                        </div>

                <!-- official nav closed-->


                <!--app-content open-->
            <!--    <div class="app-content centered">
                    <div class="section"> -->

                        

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Formulaire SAV</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" method="POST" action="ajoutFormulaire.php" onsubmit="return envoyer()">

                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 col-form-label">CIN</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" id="Cin" placeholder="Cin" name="cin" onblur="veriftel(this)" maxlength="8" required>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 col-form-label">Nom</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="Nom" placeholder="Nom" name="nom" onblur="verifnom(this)" required>
                        </div>
                      </div>

                      
                      <div class="form-group row">
                        <label for="inputName" class="col-md-3 col-form-label">Prénom</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="Prenom" placeholder="Prenom" name="prenom" onblur="verifnom(this)" required>
                        </div>
                      </div>



                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" id="Email"  placeholder="Email" name="email" onblur="verifMail(this)" required>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Telephone:</label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" placeholder="Phone" id="Telephone" name="teleph" onblur="veriftel(this)" maxlength="8" >
                        </div>
                      </div>
                 

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="example-email">Catégorie du produit</label>
                        <div class="col-md-9" >
                          <select class="form-control" id="Catg" name="catg">
                            <option>Scooters</option>
                            <option>Velo</option>
                            <option>Vetements</option>
                            <option>Accessoires</option>
                            <option>Autres</option>
                          </select>
                        </div>
                      </div>

                 
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Réference </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Réference"  id="Ref" name="ref">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Date de livraison</label>
                        <div class="col-md-9">
                          <input class="form-control" type="date" id="myDate" name="date" >
                        </div>
                      </div>
                   
                      <div class="form-group row mb-0">
                        <label class="col-md-3 col-form-label">Quantité</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number"  id="Quant" name="quant">
                        </div>
                      </div>
                      
                      </br>
                      <div class="form-group">
                          <div class="row ">
                            <label class="col-sm-3">Votre demande</label>
                            <div class="col-sm-9">
                              <textarea rows="6" class="form-control" id="Demande" name="demande"></textarea>
                            </div>
                          </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-1 mb-0" name="ajouter" value="Envoyer" onclick="envoyer()" >Submit</button>
    
<br /><br />



                    </div></div></div>

                    </form>

                


                    <!--row open-->
                        
                           <div class="col-12">
                             <div class="card">
                               <div class="card-header">
                                 <h4>Vos Formulaires</h4>
                               </div>
                             <div class="card-body">
                                   <form class="form-horizontal" method="POST" action="ajouterFormulaire.php">
                                    <div class="card-body">
                                        <div id="table" class="table-responsive table-editable">
                                            <table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
                                                <tr>
                                                    <th class="text-center">CIN </th>
                                                    <th class="text-center">Nom</th>
                                                    <th class="text-center">Prénom</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Téléphone</th>
                                                    <th class="text-center">Catégorie</th>
                                                    <th class="text-center">Référence</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Quantité</th>
                                                    <th class="text-center">Demande</th>
                                                    <th class="text-center">Modifier</th>
                                                </tr>
                                                <?PHP
                                                 while ($row = mysqli_fetch_array($result)):
                                                ?>
                                                <tr>
                                                    <td class="pt-3-half"><?PHP echo $row['cin']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['nom']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['prenom']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['email']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['teleph']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['catg']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['ref']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['date']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['quant']; ?></td>
                                                    <td class="pt-3-half"><?PHP echo $row['demande']; ?></td>

                                                    
                                                    <td>
                                                        <span class="table-remove"><a href="modifierFormulaire.php?cin=<?PHP echo $row['cin']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Modifier</button></a></span>
                                                        <?PHP
                                                    endwhile;
                                                    ?>
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
                    </form>

                        <!--row closed-->

    <?php
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=web;charset=utf8','root','');
        if(isset($_POST['submit_commentaire'])) {

 if( isset ($_SESSION['username']) ){

      if(isset($_POST['avis'])  AND !empty($_POST['avis'])) {
        
           $avis = htmlspecialchars($_POST['avis']);
        
        
            $ins = $bdd->prepare('INSERT INTO  avis (avis,user) VALUES (?,?)');
            $ins->execute(array($_POST['avis'],$_SESSION['username']));
            $c_msg = "<span style='color:green'>Votre avis a bien été posté</span>";
            echo "<META http-equiv='refresh' content='0;URL=ajouterFormulaire.php'>";
            
         } 
       else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }
}
else
                echo "<script >alert('connectiiiiii')</script>";

  }
   //$commentaires = $bdd->prepare('SELECT * FROM commentaires ORDER BY id DESC');
        $avis=$formulaire1C->afficherComf();


   
   ?>




                            <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Compose new message</h4>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                
                                                
                                                <div class="form-group">
                                                    <div class="row ">
                                                        <label class="col-sm-3">Message</label>
                                                        <div class="col-sm-9">
                                                            <textarea rows="5" class="form-control" name="avis"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="btn-list text-right">
                                                    
                                                    <input type="submit" class="btn btn-primary btn-space m-t-5" name="submit_commentaire"> 
                                                </div>

            <?php if(isset($c_msg)) { echo $c_msg; } ?>
<br /><br />
<?php
foreach($avis as $row){?>

   <b><?php echo $row['user']; ?>:</b> <?php echo $row['avis'];?><br /> 
<?php } ?>




                                            </form>
                                        </div>
                                       

                                       
                                    </div>
                                </div>
                               
                                 <!--   <button type="submit" class="btn btn-primary mt-1 mb-0">Submit</button> -->
                                 <!--   <button type="submit" class="btn btn-primary mt-1 mb-0" name="ajouter" value="Envoyer" onclick="envoyer()">Submit</button> -->
                                 <!--   <input type="button" value="Envoyer" onclick="envoyer()" /> -->

                  
                            <!--row closed-->

<!--=====================================================================================================================================-->                            
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
        <!--Footer -->


          
        <!-- Back to top -->
        <a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

        <!-- Popup-chat -->
        <a href="#" id="addClass"><i class="ti-comment"></i></a>

        <!--Jquery.min js-->
        <script src="assets/js/jquery.min.js"></script>

        <!--popper js-->
        <script src="assets/js/popper.js"></script>


        <script src="js/form.js"></script>

        <script src="js/ajouterFormulaire.js"></script>

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