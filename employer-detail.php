<?php require 'fonctions.php';
$id=2?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Projet_3 - Employer Details Page</title>
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
                <a href="#" class="active">Recruteurs</a>
                <ul class="dropdown">
                 <li><a href="employer-listing.php">Employer Listing</a></li>
                 <li><a href="employer-detail.php" class="active">Employer Details</a></li>
                 <li><a href="post-job.php">Post a Job</a></li>
                 <li><a href="admin/dashboard-employer.php">Dashboard</a></li>
               </ul>
             </li>

             <li class="has-children">
              <a href="#">Candidats</a>
              <ul class="dropdown">
                <li><a href="candidate-listing.php">Listes des Candidats</a></li>
                <li><a href="post-candidat.php">Ajouter Candidat</a></li>
                <li><a href="candidate-single.php">Candidate Detail</a></li>
               
             </ul>
            </li>

            <li class="has-children">
              <a href="#">Offres</a>
              <ul class="dropdown">
                <li><a href="job-listing.php">Liste des offres</a></li>
                <li><a href="job-detail.php">Détail de l'offre</a></li>
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
          <h1 class="text-white font-weight-bold">Employer Details</h1>
          <div class="custom-breadcrumbs">
            <a href="index-2.html">Acceuil</a> <span class="mx-2 slash">/</span>
            <a href="#">Recruteurs</a> <span class="mx-2 slash">/</span>
            <span class="text-white">Employer Details</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $rec=getRecruiterInfo($id);?>

  <section class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="d-flex align-items-center mb-5">
            <div class="border p-2 mr-3 rounded">
              <img src="images/job_logo_5.jpg" alt="Image">
            </div>
            <div>
              <h2><?php echo $rec["rec_nom_entreprise"] ?></h2>
              <div>
                <p class="mb-1"><?php echo $rec["rec_email"] ?></p>
                <p class="mb-1"><span class="icon-turned_in mr-2"></span><?php echo $rec["nb_offres"] ?> Postes vaccantes</p>
              </div>
            </div>

          </div>
          <div class="col-lg-12">
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>About Company</h3>
              <p><?php echo $rec['rec_desc'] ?></p>


              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>

              </ul>
              <p>Velit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!</p>
            </div>

            
<!--JOB SIMILAIRES  -->
            <!-- <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Similar Jobs</h3>
            <ul class="post-job-bx">
                                    <li>
                                      <a href="job-detail.php">
                              <div class="job-resp m-b30">
                                <div class="job-post-company">
                                <span><img src="images/logo/icon1.png"/></span>
                              </div>
                              <div class="job-post-info">
                                <h4>Digital Marketing Manager</h4>
                                <ul>
                                  <li><span class="icon icon-map-marker"></span> California, US</li>
                                  <li><span class="icon icon-bookmark-o"></span> Full Time</li>
                                  <li><span class="icon icon-clock-o"></span> Published 11 months ago</li>
                                </ul>
                              </div>
                            </div>
                            <div class="d-flex">
                              <div class="job-time mr-auto">
                                <span>Apply Job</span>
                              </div>
                              <div class="salary-bx">
                              <span>$1200 - $ 2500</span>
                            </div>
                          </div>
                          <span class="post-like icon icon-heart-o"></span>
                        </a>
                              </li>
                              <li>
                          <a href="job-detail.php">
                          <div class="job-resp m-b30">
                            <div class="job-post-company">
                            <span><img src="images/logo/icon2.png"/></span>
                          </div>
                          <div class="job-post-info">
                            <h4>Digital Marketing Manager</h4>
                            <ul>
                              <li><span class="icon icon-map-marker"></span> California, US</li>
                              <li><span class="icon icon-bookmark-o"></span> Part Time</li>
                              <li><span class="icon icon-clock-o"></span> Published 11 months ago</li>
                            </ul>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="job-time mr-auto">
                          <span>Apply Job</span>
                        </div>
                        <div class="salary-bx">
                          <span>$1200 - $ 2500</span>
                        </div>
                        </div>
                        <span class="post-like icon icon-heart-o"></span>
                        </a>

                        </li>
                        <li>
                            <a href="job-detail.php">
                          <div class="job-resp m-b30">
                            <div class="job-post-company">
                            <span><img src="images/logo/icon3.png"/></span>
                          </div>
                          <div class="job-post-info">
                            <h4>Digital Marketing Manager</h4>
                            <ul>
                              <li><span class="icon icon-map-marker"></span> California, US</li>
                              <li><span class="icon icon-bookmark-o"></span> Feelancer</li>
                              <li><span class="icon icon-clock-o"></span> Published 11 months ago</li>
                            </ul>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="job-time mr-auto">
                          <span>Apply Job</span>
                        </div>
                        <div class="salary-bx">
                          <span>$1200 - $ 2500</span>
                        </div>
                        </div>
                        <span class="post-like icon icon-heart-o"></span>
                        </a>
                        </li>


              </ul> -->
<!--  -->




            </div>
</div>

<div class="col-lg-4">
 <div class="company-social text-center mt-4 mb-4">
  <div class="footer-social">
    <a href="#"><span class="icon-facebook"></span></a>
    <a href="#"><span class="icon-twitter"></span></a>
    <a href="#"><span class="icon-instagram"></span></a>
    <a href="#"><span class="icon-linkedin"></span></a>

  </div>
  <a href="#">www.<?php echo $rec["rec_nom_entreprise"] ?>.com</a> 
</div>
<div class="bg-light p-3 border rounded mb-4">
  <h3 class="text-primary  mt-3 h5 mb-3 ">Concatez 
<?php echo $rec["rec_nom_entreprise"] ?></h3>

  <form action="#">

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
    <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white full-width">
  </div>
</form>
</div> 

<div class="bg-light p-3 border rounded mb-4">
  <span class="icon icon-map-marker"></span><span class="text"><?php echo $rec["rec_adresse"] ?></span><br>
  <span><a href="mailto:info@example.com"><span class="icon icon-envelope"></span><span class="text"><?php echo $rec["rec_email"] ?> </span></a>
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
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/venobox.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/scroll.js"></script>

</body>

</html>