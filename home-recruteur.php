<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Homepage </title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="title" content="Projet_3- Job Board HTML Template" />
    <meta name="author" content="Fairy Meadows Themes" />
    <meta name="description" content="Job Board HTML Template" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/custom-bs.css" />
    <link rel="stylesheet" href="css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/line-icons/style.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link href="css/owl.css" rel="stylesheet" />
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
      <!-- NAVBAR -->
      <header class="site-navbar " id="mynavbarst">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- logo -->
            <div class="site-logo col-6">
              <a href="#">
                <h4 style="color:#e7bb2c"> BRIGHTJOB</h4>
              </a>
            </div>

            <nav class="mx-auto site-navigation">
              <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                <li class="has-children">
                  <a href="home-recruteur.php" class="nav-link active">Acceuil</a>
                </li>
                <li class="has-children">
                  <a href="#">Recruteurs</a>
                  <ul class="dropdown">
                    <li>
                      <a href="employer-listing.php">Liste des offres</a>
                    </li>
                    <li>
                      <a href="job-detail.php">Details des offre</a>
                    </li>
                    <li><a href="post-job.php">Publier une offre</a></li>
                    
                  </ul>
                </li>

                
                           <li class="has-children">
              <a href="#">Emplois</a>
              <ul class="dropdown">
                <li><a href="job-listing.php">Liste des emplois</a></li>
               
                <li><a href="job-detail.php">Détail de l'emploi</a></li>
              </ul>
            </li>

            </nav>

            <div
              class="right-cta-menu text-right d-flex aligin-items-center col-6"
            >
              <div class="ml-auto">
                <a
                  href="post-job.php"
                  class="theme-btn btn-style-three border-width-2 d-none d-lg-inline-block"
                  ><span class="mr-2 icon-add"></span>Poster offre
                </a>
                
                  <a href="index.php"> <button type="button" class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block">deconnexion</button> </a>
                
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Acceuil -->
      <section 
        class="Acceuil-section section-hero overlay bg-image particle-area"
        id="particle-area"
        style="background-image: url('backphoto.png')"
      >
        <div id="particles-js"></div>
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
              <div class="banner-heading text-center">
                <!-- Message d acceuil -->
                <h1 class="text-white font-weight-bold">
                  chercher vos opportunités avec une grande flexibilité
                </h1>
                <div class="col-md-8 banner-text">
                  <p>
                    plus de 3 millions de demandeurs d'emploi se tournent vers le site Web
                     dans leur recherche d'emploi, déposant plus de 140 000 candidatures
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

       <!-- Help to Get Started -->
      <section class="help-area site-section2">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="sec-title">
                <span class="title"> chercher nos offres </span>
                <h2>Commencer a chercher les offres existant</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="get-started text-center mb-4">
                <img src="search.svg" alt="help" />
                <h3> Trouver un candidat</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore.
                </p>
                <a href="candidate-listing.php" class="theme-btn btn-style-one">chercher candidat</a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="get-started text-center mb-4">
                <img src="podcast.svg" alt="help" />
                <h3>Poster des offres</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore.
                </p>
                <a href="post-job.php" class="theme-btn btn-style-one">Poster offre</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="get-started text-center mb-4">
                <img src="data-points.svg" alt="help" />
                <h3>creer son profil</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore.
                </p>
                <a href="connexioncandidat.php" class="theme-btn btn-style-one">postuler</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Help to Get Started End -->
      
      <section class="site-section2">
        <div
          class="site-blocks-cover bg-image overlay-primary overlay inner-page"
          style="background-image: url('hero_3.jpg')"
          data-stellar-background-ratio="0.5"
        >
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-8 text-center">
                <h2 class="text-white mb-1">
                  Make a Difference with Your Online Resume!
                </h2>
                <p class="text-white mb-4 mt-3">
                  Your resume in minutes with Jobset resume assistant is ready!
                </p>
                <p>
                  <a href="employer-listing.html" class="theme-btn btn-style-four"
                    >page admin</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!-- Start Footer Area -->

      <footer class="main-footer">
        <div class="container">
          <div class="upper-box">
            <div class="row">
              <!-- Upper column -->
              <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                <div class="footer-logo">
                  <figure class="image">
                    <a href="index-3.html"
                      ><img
                        src="images/logo-white.png"
                        class="img-responsive"
                        alt="Logo Image"
                    /></a>
                  </figure>
                </div>
              </div>

              <div class="upper-column col-lg-6 col-md-12 col-sm-12"> </div>
              
              <!-- Upper column -->
              <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                <div class="social-links">
                  <ul class="social-icon-two">
                    <li>
                      <a href="#"><i class="icon icon-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon icon-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon icon-google-plus"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon icon-dribbble"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon icon-pinterest-p"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!--Widgets Section-->
          <div class="widgets-section">
            <div class="row">
              <!--Big Column-->
              <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <!--Footer Column-->
                  <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                    <!--         do comething      -->
                  </div>

                  <!--Footer Column-->
                  <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
              
                       <!--         do comething      -->
                  </div>
                </div>
              </div>

              <!--footer Column-->
              <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                       
              </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
          <div class="container">
            <div class="inner-container clearfix">
              <div class="footer-nav">
                <ul class="clearfix">
                  <li><a href="#">Privacy / Policy</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul>
              </div>
              <div class="copyright-text text-center">
                <p>
                  Copyright &copy; 2023 Fait par:<strong
                    >Jihad,Salma,Hanane et Boubacar</strong
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Main Footer -->
    </div>

    
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
    
  </body>
</html>
