<?php
require_once 'config/config.php';
require_once 'model/Connexion.class.php';
$req_afficher=Connexion::getConnexion()->query("select* from galerie");
$req_afficher->execute();
$donne=$req_afficher->fetchall();
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>rmbconsulting</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Job-point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Mukta+Malar:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
   </head>
   <body>
      <!--banner -->
      <div class="header-w3layouts">
         <!--//navigation section -->
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="hedder-up">
               <h1><a class="navbar-brand" href="index.html">RMB&Acosulting</a></h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
               <ul class="navbar-nav ">
                  <li class="nav-item ">
                     <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a href="about.html" class="nav-link ">Apropos</a>
                  </li>
                  <li class="nav-item active">
                     <a href="service.php" class="nav-link"></a>
                  </li>

                  <li class="nav-item">
                     <a href="contact.html" class="nav-link">Contact</a>
                  </li>
                  <li class="nav-button">
                     <button type="button" class="btn login-hedder" data-toggle="modal" data-target="#exampleModalCenter">
                     Authentification
                     </button>
                  </li>
               </ul>

            </div>
         </nav>
         <!--//navigation section -->
         <div class="clearfix"> </div>
      </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Accueil</a>
                  <span>/ /</span>
               </li>
               <li>Service</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <div class="row no-gutters">

      <?php    foreach ($donne as $ligne)  { ?>
          <div class="col-lg-3 ">

          <section class="-one py-lg-4 py-md-3 py-sm-3 py-3" id="">

         <div class="container-fluid py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="row">

               <div class="col-lg-12 col-md-12 col-sm-12 ser-blog-grid">
                  <div class="-inner-list">
                     <div class="ser-inner-grid">

                        <div class="ser-txt-inner-grid">
                            <?php  echo '<td>  <img src="control/Image/'  .$ligne['image'].'" WIDTH="100%" height="170px">  </td>';?>
                        </div>

                        <div class="ser-txt-inner">
                           <h5 class="py-3"> <a  href="audit.php" style="color: darkblue"></a> <?php echo $ligne['titre']  ?> </h5>
                            <?php echo $ligne['commentaire']  ?>
                            <div class="outs_more-buttn">
                                <a href="about.html">Lire plus</a>
                            </div>
                        </div>

                     </div>
                  </div>



          </div>
      </section>
          </div>
      <?php      } ?>

      </div>

      <!--  -->

      <!--//team-->
      <!--footer-->
      <footer class="buttom-footer py-lg-5 py-md-4 py-sm-3 py-3">
         <div class="container-fluid py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Entrer votre e-mail</h3>
            <!--subscribe-->
            <div class="mb-lg-5 mb-md-4 mb-3 sub-wthree-form">
               <form>
                  <div class="form-group email-sub-w3layouts">
                     <input type="email" class="form-control email-sub-w3layouts" placeholder="Email" required="">
                  </div>
                  <div class="pt-sm-3 pt-2 text-center">
                     <button type="submit" class="btn subscrib-btnn">Envoyer</button>
                  </div>
               </form>
            </div>
            <!--//subscribe-->
            <div class="row">
               <div class="col-lg-7 col-md-7">
                  <div class="headder-logo-icon text-center">
                     <h2><a href="index.html">RMB&Acousulting</a></h2>
                  </div>
                  <div class="footer-bottom py-lg-4 py-md-3 py-2 text-center">
                     <p>L'expertise c'est nous </p>
                  </div>
               </div>
               <div class="col-lg-5 col-md-5">
                  <div class="buttom-nav py-2">
                     <nav class="border-line">
                        <ul class="nav justify-content-center">
                           <li class="nav-item">
                              <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                              <a href="about.html" class="nav-link ">Apropos</a>
                           </li>
                           <li class="nav-item">
                              <a href="index.html" class="nav-link">s</a>
                           </li>
                           <li class="nav-item">
                              <a href="contact.html" class="nav-link">Contact</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <div class="icons text-center">
                     <ul>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-whatsapp"></span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--//footer-->
      <!--/Login-->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="login px-4 py-4 mx-auto mw-100">
                     <h5 class="text-center mb-4">Authentifie -toi</h5>
                     <form action="control/Authentification.php" method="post">
                        <div class="form-group">
                           <p class="mb-2">Nom utilisateur</p>
                           <input type="text" class="form-control" id="exampleInputEmail1"  name="nom_utilisateur" placeholder="" required="">
                        </div>
                        <div class="form-group">
                           <p class="mb-2">Mot de passe</p>
                           <input type="password" class="form-control" id="exampleInputPassword1"  name="mot_de_passe" placeholder="" required="">
                        </div>

                        <button type="submit" class="btn submit">Valider</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--//Login-->
      <!--/Register-->
      <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>

            </div>
         </div>
      </div>
      <!--//Register-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working--> 
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>