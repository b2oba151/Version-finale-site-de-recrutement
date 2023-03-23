<?php 
session_start();require 'fonctions.php';
 $id=$_SESSION['id'] ;
// //$id=2;
if(isset($_POST['idddd'])){
   $idddd=$_POST['idddd'];
   //$typee=$_POST['idddd'];
   $userList=getUsersList();
foreach($userList as $use){
  if( $idddd==$use['id_candidat_ou_recruteur'] && $use['type']='candidat'){ 
         $id=$idddd;
         
}
}
}

?>

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
          <div class="site-logo col-6"><a href="index-2.html"> <img src="images/" class="img-responsive" alt="Logo Image"></a></div>

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
                <li><a href="candidate-listing.php">Listes des Candidats</a></li>
                <li><a href="post-candidat.php">Ajouter Candidat</a></li>
                <li><a href="candidate-single.php" class="active">Candidate Detail</a></li>

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
            

            <a href="connexion-recr.php" class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Connexion</a><span>   </span><a href="inscription-recr.php"  class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Inscription</a>

          </div>
          <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
        </div>

      </div>
    </div>
  </header>

    <!-- Acceuil -->
    <section class="section-hero overlay-2 inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="Acceuil-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Resume Page</h1>
            <div class="custom-breadcrumbs">
              <a href="index-2.html">Acceuil</a> <span class="mx-2 slash">/</span>
              <a href="#">Recruteurs</a> <span class="mx-2 slash">/</span>
              <span class="text-white">Resume Page</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">


            <!-- CANDIDAT NON ET PRENOM -->
            <?php $data=donneee_candidat($id);?>
            <div class="d-flex align-items-center mb-2">
              <div class="candidate-image border p-2 mr-3 rounded">
                <img src="images/person_1.jpg" alt="Image">
              </div>
              <div>
                <h2><?php echo $data['nom'] ." ". $data['prenom'] ?> </h2>
                <div>
                  <p class="mb-1"><?php echo $data['titre_profession'] ?></p>
                  <p class="mb-1"><span class="icon icon-map-marker mr-1"></span><?php echo $data['ville'] ?></p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
           <div class="company-social mt-4 mb-4">
             
            <a href="#" class="facebook-icon"><span class="icon-facebook"></span></a>
            <a href="#" class="twitter-icon"><span class="icon-twitter"></span></a>
            <a href="#" class="pinterest-icon"><span class="icon-pinterest"></span></a>
            <a href="#" class="linkedin-icon"><span class="icon-linkedin"></span></a>

            <a href="#" class="theme-btn btn-style-five mt-2 py-3 px-4">Download CV</a>
          </div>

        </div>
      </div>
      <div class="row ">
        <div class="col-lg-8">
          <div class="mb-5">
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-user mr-3"></span>About Me</h3>
            <p><?php echo $data['description'] ?></p>
          </div>


          <?php $competences=getCandidatCompetences(1);?>

                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Compétences professionnelles</h3>

                    <?php foreach ($competences as $competence) : ?>
                        <div id="skills" class="process-bar mb-5">
                          <div class="skillbar-title"> <?php echo $competence['titre']; ?> </div>
                          <div class="skillbar" data-percent="<?php echo $competence['niveau']; ?>%">
                            <div class="skillbar-bar"> </div>
                            <div class="skill-bar-percent"><?php echo $competence['niveau']; ?>%</div>
                          </div>
                        </div>
           <?php endforeach; ?>

          <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education</h3>

          <?php $formations=getFormationsByIdCandidat($id) ?>
<?php foreach ($formations as $form) : ?>
<ul class="list-unstyled m-0 p-0">
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span> De <?php echo $form['date_debut'] ?>  a <?php echo $form['date_fin'] ?> : <?php echo $form['nom_etablissement'] ?> -  <?php echo $form['diplome'] ?> </li>

          </ul>
  <?php endforeach; ?>
          
          
        </div> 

        <div class="col-lg-4">
         <div class="bg-light p-3 border rounded mb-4">
          <h3 class="text-primary  mt-3 h5 mb-3 ">Contact Danica</h3>

          <form action="#" class="">

            <div class="form-group">
              <input type="text" id="fname" class="form-control" placeholder="First Name" required>
            </div>

            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="form-group">
             <input type="subject" id="subject" class="form-control" placeholder="Subject" required>
           </div>

           <div class="form-group">
             <textarea name="message" id="message" cols="10" rows="4" class="form-control" placeholder="Message"></textarea>
           </div>

           <div class="form-group">
            <input type="submit" value="Send Message" class="theme-btn btn-style-one btn-md text-white full-width">
          </div>
        </form>
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
                  <figure class="image"><a href="index-3.php"><img src="images/" class="img-responsive" alt="Logo Image"></a></figure>
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
          </div>
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
                  <p>Don't have an account? <a href=" inscription-candidat.html">Signup</a></p>
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
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/venobox.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/scroll.js"></script>
<script src="js/waypoints.min.js"></script>

</body>

</html>