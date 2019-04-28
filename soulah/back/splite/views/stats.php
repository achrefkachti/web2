<?PHP 
include "../entities/coupon.php";
include "../core/couponC.php";

$coupon=new couponC();




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




?>


<!DOCTYPE html>
<html lang="en">


<head>

    <script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "Titre"
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Medika</title>

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



        <!--app open-->
        <div id="app" class="page">
            <div class="main-wrapper" >

                <!--anv open-->
                <nav class="navbar navbar-expand-lg main-navbar">
                    <a class="header-brand" href="index-2.html">
                        <img src="assets/img/brand/1.png" class="header-brand-img" alt="Splite-Admin  logo">
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
                        <li class="dropdown dropdown-list-toggle "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-danger nav-link-badge">0</span><i class="hvr-buzz fa fa-envelope-o"></i></a>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                <div class="dropdown-header">Messages
                                    <div class="float-right">
                                        <a href="#" class="text-white">View All</a>
                                    </div>
                                </div>
                                
                        </li>
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">0</span><i class="fa fa-bell-o"></i></a>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                <div class="dropdown-header">Notifications
                                    <div class="float-right">
                                        <a href="#" class="text-white">View All</a>
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
                                    <span class="text-white">Hello,<span class="ml-1"> Hatem</span></span>
                                </span>
                            <span><img src="assets/img/avatar/avatar.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class=" dropdown-header noti-title text-center border-bottom pb-3">
                                    <h5 class="text-capitalize text-dark mb-1">Hatem Jeridi</h5>
                                    <small class="text-overflow m-0"> Web-Progammer</small>
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

               

                <!--app-content open-->
                <div class="app-content">
                    <section class="section">

                        <!--page-header open-->
                        <div class="page-header">
                            <h4 class="page-title">Gestion Produit</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="text-light-color"></a></li>
                                <li class="breadcrumb-item active" aria-current="page"></li>
                            </ol>
                        </div>
                        <!--page-header closed-->




                                               

        <!-- app opened-->
        <footer class="main-footer">
                    <div class="text-center">
                    
                    </div>
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                </footer>
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


</html>