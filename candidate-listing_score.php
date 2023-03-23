<?php require 'fonctions.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Projet_3 - Listes des Candidats Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Projet_3- Job Board HTML Template" />
  <meta name="author" content="Fairy Meadows Themes" />
  <meta name="description" content="Job Board HTML Template" />

  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
  <button id="back-to-top-btn"> <span class="icon-keyboard_arrow_up"></span></button>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar" id="mynavbarst">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index-2.html"> <img src="images/" class="img-responsive"
                alt="Logo Image"></a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li class="">
                <a href="index.php" class="nav-link">Acceuil</a>
                
              </li>

              <li class="has-children">
                <a href="#">Recruteurs</a>
                <ul class="dropdown">
                  <li><a href="employer-listing.php">Liste des Recruteurs</a></li>
                  <li><a href="employer-detail.php">Details du Recruteurs</a></li>
                  <li><a href="post-job.php">Publier un emploi</a></li>
                  <li><a href="admin/dashboard-employer.php">Dashboard</a></li>
                </ul>
              </li>

              <li class="has-children">
                <a href="#" class="active">Candidats</a>
                <ul class="dropdown">
                  <li><a href="candidate-listing.php" class="active">Listes des Candidats</a></li>
                  <li><a href="post-candidat.php">Ajouter Candidat</a></li>
                  <li><a href="candidate-single.php">Candidate Detail</a></li>
                  <li><a href="admin/dashboard-Candidats.html">Dashboard</a></li>

                </ul>
              </li>

              <li class="has-children">
                <a href="#">Emplois</a>
                <ul class="dropdown">
                  <li><a href="job-listing.php">Liste des emplois</a></li>
                  <li><a href="job-detail.php">Détail de l'emploi</a></li>
                </ul>
              </li>

              

              

            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="connexion-recr.php" class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Connexion</a><span>   </span><a href="inscription-recr.php"  class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Inscription</a></div>

              
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- Acceuil -->
    <section class="section-hero overlay-2 inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
      id="Acceuil-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Find a Candidate</h1>
            <div class="custom-breadcrumbs">
              <a href="index-2.html">Acceuil</a> <span class="mx-2 slash">/</span>
              <span class="text-white">Find a Candidate</span>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Start Candidate Area -->
    <section class="site-section bg-light">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 mb-4">



            <!-- DEBUT BOX DES LISTE DE CANDIDATS -->

                    <!-- EXMPLE -->
            <!-- <ul class="post-job-bx">
              <li>
                <a href="candidate-single.php">
                  <div class="emp-detail">
                    <div class="job-post-company">
                      <span><img src="images/person_1.jpg" /></span>
                    </div>
                    <div class="job-post-info">
                      <h4>Danica Lewis</h4>
                      <h5>Graphic Designer</h5>
                      <ul>
                        <li><span class="icon icon-clock-o"></span> Full time</li>
                        <li><span class="icon icon-map-marker"></span> California, US</li>
                        <li><span class="icon icon-money"></span> 12 /mo</li>
                      </ul>
                    </div>

                  </div>
                  <div class="J-open">
                    <button type="submit" class="theme-btn btn-style-one">View Profile</button>
                  </div>
                </a>
              </li>
            </ul> -->



            <?php 
$competences=$_POST['titreProffessions'];

$categorie=$_POST['domaine'];

$sortOrder=$_POST['ordre'];
getCandidatesListByScore($competences, $categorie, $sortOrder);?>
<!-- FIN BOX DES LISTE DE CANDIDATS -->




            <div class="row pagination-wrap site-section2">

              
            </div>
          </div>


          <div class="col-lg-4 job-sidebar">

<form action="" method="post" class="search-form mb-3">




        <div class="sidebar-box bg-white">
            <div class="dropdown bootstrap-select show-tick" style="width: 100%;"><select class="selectpicker" id="ctp[]"
                    name="titreProffessions[]" multiple="" data-style="btn-black" data-width="100%" data-live-search="true"
                    title="Selectionnez les Competances a chercher" tabindex="-98">
                    <?php //$cats=getTitreProffesion(); ?>
                    <?php $cats=getcompetances(); ?>
                    <?php foreach ($cats as $cat) : ?>
                    <option>
                        <?php echo $cat; ?>
                    </option>
                    <?php endforeach; ?>



                </select>
                <div class="dropdown-menu " role="combobox">
                    <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox"
                            aria-label="Search"></div>
                    <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                        <ul class="dropdown-menu inner show"></ul>
                    </div>
                </div>
            </div>
        </div>



        <div class="sidebar-box bg-white p-4 ftco-animate">
            <h3 class="heading-sidebar">Domaine</h3>
            <?php $catts=getCategoriesTravail(); ?>
            
                <?php foreach ($catts as $cat) : ?>
                <label for="option-domaine-1"><input type="checkbox" multiple id="option-domaine-1" name="domaine[]" value="<?php echo $cat; ?>">
                    <?php echo $cat; ?>
                </label><br>
                <?php endforeach; ?>
            
        </div>



        <div class="sidebar-box bg-white p-4 ftco-animate">
            <h3 class="heading-sidebar">Score</h3>
            
                <label for="option-job-score-1"><input type="radio" id="option-job-score-1" name="ordre" value="ASC"
                        > Ordre croissant</label><br>
                <label for="option-job-score-1"><input type="radio" id="option-job-score-1" name="ordre" checked value="DESC">
                    Ordre décroissant</label><br>

            
          
        </div>
        <button type="submit" class="theme-btn btn-style-one">Chercher</button>

        </div>
        </div>
        </div>
</form>    


</section>
    <!-- End Candidate Area -->



    <!-- Start Footer Area -->

    <footer class="main-footer">
      <div class="container">
        <div class="upper-box">
          <div class="row">
            <!-- Upper column -->
            <div class="upper-column col-lg-3 col-md-12 col-sm-12">
              <div class="footer-logo">
                <figure class="image"><a href="index-3.php"><img src="images/" class="img-responsive"
                      alt="Logo Image"></a></figure>
              </div>
            </div>

            <!-- Upper column -->
            <div class="upper-column col-lg-6 col-md-12 col-sm-12">
              
            </div>

            <!-- Upper column -->
            <div class="upper-column col-lg-3 col-md-12 col-sm-12">
              <div class="social-links">
                <ul class="social-icon-two">
                  <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon icon-google-plus"></i></a></li>
                  <li><a href="#"><i class="icon icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon icon-pinterest-p"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!--Widgets Section-->
         
      </div>

      <!--Footer Bottom-->
      <div class="footer-bottom">
        <div class="container">

          <div class="inner-container clearfix">
            <div class="footer-nav">
              
            </div>
            <div class="copyright-text text-center">
              <p>Copyright &copy; 2023 Fait par:<strong>Jihad,Salma,Yassine et Boubacar</strong></p>
            </div>

          </div>
        </div>
      </div>
    </footer>
    <!-- End Main Footer -->
  </div>
  <!--************************************
    LightBoxes Start
    *************************************-->
  <div class="tg-modalbox modal fade" id="tg-login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="tg-modal-content">
        <div class="tg-formarea">
          <div class="tg-border-heading">
            <h3>LOGIN</h3>
          </div>
          <form class="tg-loginform" method="post">
            <fieldset>
              <div class="form-group">
                <input type="text" name="userName/email" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" value="rememberme" class="checkbox">
                  <em>Remember Me</em>
                </label>
                <a href="#">
                  <em>Forgot Password</em>
                  <span class="icon icon-question-circle"></span>
                </a>
              </div>
              <div class="form-group">
                <button class="theme-btn btn-style-one" type="submit">Login Now</button>
              </div>
              <div class="tg-description">
                <p>Don't have an account? <a href="register.html">Signup</a></p>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="tg-logintype">
          <div class="tg-border-heading">
            <h3>LOGIN WITH</h3>
          </div>
          <ul>
            <li class="tg-facebook"><a href="#">facebook</a></li>
            <li class="tg-twitter"><a href="#">twitter</a></li>
            <li class="tg-googleplus"><a href="#">google+</a></li>
            <li class="tg-linkedin"><a href="#">linkedin</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="tg-modalbox modal fade" id="tg-register" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="tg-modal-content">
        <div class="tg-formarea">
          <div class="tg-border-heading">
            <h3>Signup</h3>
          </div>
          <form class="tg-loginform" method="post">
            <fieldset>
              <div class="form-group">
                <input type="text" name="userName" class="form-control" placeholder="username">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="email">
              </div>
              <div class="form-group">
                <div class="tg-note">
                  <i class="fa fa-exclamation-circle"></i>
                  <span>We will email you your password.</span>
                </div>
              </div>
              <div class="form-group">
                <button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
              </div>
              <div class="tg-description">
                <p>Already have an account? <a href="#">Login</a></p>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="tg-logintype">
          <div class="tg-border-heading">
            <h3>Signup with</h3>
          </div>
          <ul>
            <li class="tg-facebook"><a href="#">facebook</a></li>
            <li class="tg-twitter"><a href="#">twitter</a></li>
            <li class="tg-googleplus"><a href="#">google+</a></li>
            <li class="tg-linkedin"><a href="#">linkedin</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/venobox.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/scroll.js"></script>


</body>

</html>