<?php
require_once '../config/config.php';
require_once '../model/Connexion.class.php';
$req_afficher=Connexion::getConnexion()->prepare("select* from contact");
$req_afficher->execute();
$donne=$req_afficher->fetchall(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_component :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">

            <a href="index.php" class="logo">
                RMB

            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>

        <!--logo end-->

        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <span class="username">Administrateur</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">

                        <li><a href="../index.html"><i class=""></i>Retour</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="index.php">

                            <span>Accueil</span>
                        </a>
                    </li>


                    <li>

                        <a href="basic_table.php">Visualiser la publication</a>

                    </li>


                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-envelope"></i>
                            <span>Consulter le mail </span>
                        </a>
                        <ul class="sub">
                            <li><a href="mail.html">Inbox</a></li>
                            <li><a href="mail_compose.html">Composer un Mail</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="sub">
                            <li><a href="google_map.html">Google Map</a></li>
                            <li><a href="vector_map.html">Vector Map</a></li>
                        </ul>
                    </li>


                </ul>            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
</section>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            METTRE A JOUR LES SERVICES
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="../control/Modifier.controle.php" enctype="multipart/form-data">
                                    <div class="form-group">


                                        <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $_GET['id']?>">
                                    </div>


                                    <div class="form-group"><div class="form-group">
                                            <label for="exampleInputEmail1">Titre</label>

                                            <input type="text" class="form-control" name="titre" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $_GET['titre']?>">
                                        </div>
                                        <label for="exampleInputPassword1">Commentaire</label>
                                        <textarea class="form-control" name="commentaire" rows="3" placeholder="Commentez votre demande" required="" ><?php echo $_GET['commentaire']?></textarea>
                                    </div>
                                    <div class="form-group">

                                        <img src="../control/Image/<?php echo $_GET['img']?> " WIDTH="150px" height="90px" name="img">

                                    </div>

                                    <div class="form-group">


                                <input type="file" name="img" id="exampleInputFile" value="">




                            </div>




                                        <button type="submit" class="btn btn-info">Publier</button>
                                        <button type="reset" class="btn btn-info">Reunitialiser</button>
                                </form>
                            </div>

                        </div>
                    </section>

                </div>



            </div>
        </div>








    </section>
    <section>
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <center><p>RMB&ACOUSULTING</p></center>
            </div>
        </div>
        <!-- / footer -->
    </section>

    <!--main content end-->

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
</body>
</html>
