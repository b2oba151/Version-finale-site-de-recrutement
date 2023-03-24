

<?php 
session_start(); 
require 'fonctions.php';

$id=6;
// //$id=2;
if(isset($_POST['idddd'])){
   $idddd=$_POST['idddd'];
   //$typee=$_POST['idddd'];
   $offreList=getOffreList();
foreach($offreList as $offre){
  if( $idddd==$offre['id'] ){ 
         $id=$idddd;
         
}
}
}
$data=getRecruteursAndOffreInfo($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Projet_3 - Job Details Page</title>
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
              <a href="#">Candidats</a>
              <ul class="dropdown">
                <li><a href="candidate-listing.php">Listes des Candidats</a></li>
                <li><a href="post-candidat.php">Ajouter Candidat</a></li>
                <li><a href="candidate-single.php">Candidate Detail</a></li>
               
             </ul>
            </li>

            <li class="has-children">
              <a href="#">Emplois</a>
              <ul class="dropdown">
                <li><a href="job-listing.php">Liste des emplois</a></li>
               
                
            </li>
            

         </ul>
       </nav>

       <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
       <div class="ml-auto">
                
<?php


if(isset($_SESSION['id'])) { 

echo '
<form method="post">
<div class="form-group">
<button type="submit" name="deconnexion" class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block">Déconnexion</button>
</div>
</form>
';
} else {

echo '

<a href="connexioncandidat.php" class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Connexion</a><span>   </span><a href="inscription-recr.php"  class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Inscription</a>
';
}

if(isset($_POST['deconnexion'])) { 

session_unset();
session_destroy();
header("Location: index.php"); 
exit(); 
}
?>


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
        <h1 class="text-white font-weight-bold"><?php echo $data["titre"] ?></h1>
        <div class="custom-breadcrumbs">
          <a href="index-2.html">Acceuil</a> <span class="mx-2 slash">/</span>
          <a href="#">Job</a> <span class="mx-2 slash">/</span>
          <span class="text-white"><?php echo $data["titre"] ?></span>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="site-section2">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <div class="job-resp align-items-center">
          <div class="border p-2 d-inline-block mr-3 mb-3 rounded">
            <img src="images/logo/icon2.png" alt="Image">
          </div>
          <div>
            <h2><?php echo $data["titre"] ?></h2>
            <div>
              <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php echo $data["ne"]  ?></span>
              <span class="m-2"><span class="icon-room mr-2"></span><?php echo $data["ville_offre"] ?></span>
              <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"><?php echo $data["type_travail"] ?></span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-6">
            <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
          </div>
          <div class="col-6">
            <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="mb-5">
          <figure class="mb-5"><img src="images/job_single_img_1.jpg" alt="Image" class="img-fluid rounded"></figure>
          <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
          <p><?php echo $data["description"] ?></p>
        </div>
        <div class="mb-5">
          <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
          <ul class="list-unstyled m-0 p-0">
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
          </ul>
        </div>

        <div class="mb-5">
          <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
          <ul class="list-unstyled m-0 p-0">
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
          </ul>
        </div>

        <div class="mb-5">
          <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
          <ul class="list-unstyled m-0 p-0">
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
          </ul>
        </div>

        <div class="row mb-5">
          <div class="col-6">
            <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
          </div>
          <div class="col-6">
            <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
          </div>
        </div>

      </div>
      <div class="col-lg-4">
        <div class="bg-light p-3 border rounded mb-4">
          <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
          <ul class="list-unstyled pl-3 mb-0">
            <li class="mb-2"><strong class="text-black">Published on:</strong> <?php echo $data["date_publication"] ?></li>
            <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
            <li class="mb-2"><strong class="text-black">Employment Status:</strong> <?php echo $data["type_travail"] ?></li>
            <li class="mb-2"><strong class="text-black">Experience:</strong> <?php echo $data["experience"] ?> ans(s)</li>
            <li class="mb-2"><strong class="text-black">Job Location:</strong> <?php echo $data["ville_offre"] ?></li>
            <li class="mb-2"><strong class="text-black">Salary:</strong><?php echo $data["salaire"] ?> </li>
            <li class="mb-2"><strong class="text-black">Gender:</strong> tous</li>
            <li class="mb-2"><strong class="text-black">Application Deadline:</strong> <?php echo $data["date_limite"] ?></li>
          </ul>
        </div>

        <div class="bg-light p-3 border rounded">
          <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
          <div class="px-3">
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="site-section" id="next">

<!-- aitres offre -->
        <!-- <div class="container">

                                            <div class="row mb-5 justify-content-center">
                                              <div class="col-md-7 text-center">
                                                <h2 class="section-title mb-2">Related Jobs</h2>
                                              </div>
                                            </div>
                                            
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
                                                  <li><span class="icon icon-map-marker"></span> Bothell, WA, USA</li>
                                                  <li><span class="icon icon-filter"></span> Accountancy</li>
                                                  <li><span class="icon icon-suitcase"></span> Part Time</li>
                                                  <li><span class="icon icon-clock-o"></span> 6D ago</li>
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
                                              <li><span class="icon icon-map-marker"></span> Wokingham</li>
                                              <li><span class="icon icon-filter"></span> Charity & Voluntary</li>
                                              <li><span class="icon icon-suitcase"></span> Full Time</li>
                                              <li><span class="icon icon-clock-o"></span> 3M ago</li>
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
                                              <li><span class="icon icon-map-marker"></span> Nurseplus</li>
                                              <li><span class="icon icon-filter"></span> Banking</li>
                                              <li><span class="icon icon-suitcase"></span> Temporary</li>
                                              <li><span class="icon icon-clock-o"></span> 2M ago</li>
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
                                            <span><img src="images/logo/icon4.png"/></span>
                                          </div>
                                          <div class="job-post-info">
                                            <h4>Digital Marketing Manager</h4>
                                            <ul>
                                              <li><span class="icon icon-map-marker"></span> Needham, MA</li>
                                              <li><span class="icon icon-filter"></span> IT & Telecoms</li>
                                              <li><span class="icon icon-suitcase"></span> Part Time</li>
                                              <li><span class="icon icon-clock-o"></span> 6D ago</li>
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


                                        </ul>
                                        <div class="row pagination-wrap site-section2">
                                          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                                            <span>Showing 1-4 Of 122 Jobs</span>
                                          </div>
                                          <div class="col-md-6 text-center text-md-right">
                                            <div class="custom-pagination ml-auto">
                                              <a href="#" class="prev">Prev</a>
                                              <div class="d-inline-block">
                                                <a href="#" class="active">1</a>
                                                <a href="#">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                              </div>
                                              <a href="#" class="next">Next</a>
                                            </div>
                                          </div>
                                        </div>

      </div> -->
<!--  -->
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