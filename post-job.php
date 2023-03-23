<?php 
session_start();
require 'fonctions.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Post Job Page</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="title" content="Projet_3- Job Board HTML Template" />
    <meta name="author" content="Fairy Meadows Themes" />
    <meta name="description" content="Job Board HTML Template" />

    <link rel="stylesheet" href="css/custom-bs.css" />
    <link rel="stylesheet" href="css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/line-icons/style.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/quill.snow.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
  </head>
  <body id="top">

      <!-- NAVBAR -->
      <header class="site-navbar" id="mynavbarst">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="site-logo col-6">
             <a href="#">
                <h4 style="color:#e7bb2c"> BRIGHTJOB</h4>
              </a></a>
            </div>
            <nav class="mx-auto site-navigation">
              <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                <li class="has-children">
                  <a href="index.php" class="nav-link">Acceuil</a>
                </li>

                <li class="has-children">
                  <a href="#" class="active">Recruteurs</a>
                  <ul class="dropdown">
                    <li>
                      <a href="employer-listing.php" class="active"
                        >Liste des offres</a
                      >
                    </li>
                    <li><a href="job-detail.php">Details des offre</a></li>
                    <li><a href="post-job.php">Publier une offre</a></li>
                  </ul>
                </li>

                <li class="has-children">
                  <a href="#">Candidats</a>
                  <ul class="dropdown">
                    <li>
                      <a href="candidate-listing.php">Listes des Candidats</a>
                    </li>
                    <li>
                      <a href="post-candidat.php">Ajouter Candidat</a>
                    </li>
                    <li>
                      <a href="candidate-single.php">Candidate Detail</a>
                    </li>
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
                  ><span class="mr-2 icon-add"></span>Poster offre</a
                >

                <a href="connexion-recr.php"> <button type="button" class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block">connexion</button> </a>
              </div>
             
            </div>
          </div>
        </div>
      </header>

      <!-- Acceuil -->
      <section
        class="section-hero overlay-2 inner-page bg-image"
        style="background-image: url('hero_1.jpg')"
        id="Acceuil-section"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-white font-weight-bold">Poster une offre </h1>
              
            </div>
          </div>
        </div>
      </section>

      <section class="site-section">
        <div class="container">
          <div class="row align-items-center mb-5">
            <div class="col-lg-8 col-md-9 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <div>
                  <p>
                    Avoir un compte? Si vous n'avez pas de compte, vous pouvez créer
                     un ci-dessous en saisissant votre adresse e-mail. Un mot de passe sera
                     automatiquement envoyé par e-mail.
                  </p>
                </div>
              </div>
            </div>
            
          </div>

          <div class="row mb-5">
            <div class="col-lg-12">
    <form class="p-4 p-md-5 border rounded" method="post" action="fonction.php">
                <h3 class="text-black mb-5 border-bottom pb-2">
                  DIFFUSER UNE OFFRE
                </h3>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="job-title">titre de travail</label>
                      <input
                        type="text"
                        class="form-control"
                        id="job-title"
                        name="job-titre"
                        placeholder="Enterer le travail"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input
                        type="text"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="you@exemple.com"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="job-type">Type de travail</label>
                      <select
                        class="selectpicker border"
                        id="job-type"
                        data-style="btn-black"
                        data-width="100%"
                        data-live-search="true"
                        name="job-type"
                        title="Select Job Type"
                      >
                        <option>Part Time</option>
                        <option>Full Time</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="job-location">ville</label>
                      <input
                        type="text"
                        class="form-control"
                        id="job-location"
                        name="job-location"
                        placeholder="Casablanca"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="experience">Experience</label>
                      <select
                        class="selectpicker border"
                        id="experience"
                        name="experience"
                        data-style="btn-black"
                        data-width="100%"
                        data-live-search="true"
                        title="Experience"
                      >
                        <option>Pas d'experience</option>
                        <option>Moins de 1 an</option>
                        <option>2 ans </option>
                        <option>3ans</option>
                        <option>4ans</option>
                        <option>5+ ans</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="qualification">Niveau d'etude</label>
                      <select
                        class="selectpicker border"
                        id="qualification"
                        name="qualification"
                        data-style="btn-black"
                        data-width="100%"
                        data-live-search="true"
                        title="Choisir le Niveau d'etude"
                      >
                        <option>quelque etude universitaire</option>
                        <option>Licence</option>
                        <option>Master</option>
                        <option>Ingenieurie</option>
                        <option>Doctorat</option>
                       
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Industry">Nom de societe</label>
                      <select
                        class="selectpicker border"
                        id="Industry"
                        name="Industry"
                        data-style="btn-black"
                        data-width="100%"
                        data-live-search="true"
                        title="Select Industry"
                      >
                        <option>Industry1</option>
                        <option>Industry2</option>
                        <option>Industry3</option>
                        <option>Industry4</option>
                        <option>Industr5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="offered-salary">Salaire propose</label>
                      <select
                        class="selectpicker border"
                        id="offered-salary"
                        name="offered-salary"
                        data-style="btn-black"
                        data-width="100%"
                        data-live-search="true"
                        title="Salaire"
                      >
                        <option>5000 - 7000</option>
                        <option>10000 - 103000</option>
                        <option>4000 - 5000</option>
                        <option>2000 - 3000</option>
                        
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="job-category"> Categories</label>
                      <select
                        class="selectpicker border"
                        id="job-category"
                        name="job-category"
                        data-style="btn-black"
                        data-width="100%"
                        data-live-search="true"
                        title=" Categories"
                      >
                        <option>Web Design</option>
                        <option>Web Development</option>
                        <option>Marketing</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="company-website-tw d-block"
                    >Télécharger l'image</label
                  >
                  <br />
                  <input
                    type="file"
                    id="myfile"
                    name="myfile"
                    class="width-100"
                  />
                </div>
                <h3 class="text-black my-5 border-bottom pb-2">
                  Détails sur la societe 
                </h3>

                <div class="row">
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label for="company-name"> Nom de societe</label>
                      <input
                        type="text"
                        class="form-control"
                        id="company-name"
                        name="company-name"
                        placeholder="Nom de societe"
                      />
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label for="company-website">Website (Option)</label>
                      <input
                        type="text"
                        class="form-control"
                        id="company-website"
                        name="company-website"
                        placeholder="https:///"
                      />
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label for="company-tagline"> Adress Email </label>
                      <input
                        type="text"
                        class="form-control"
                        id="email-address"
                        name="email-address"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label for="phone-number">Numéro de téléphone</label>
                      <input
                        type="text"
                        class="form-control"
                        id="phone-number"
                        name="phone-number"
                        placeholder="Numéro de téléphone"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label for="location">ville</label>
                      <select
                        class="selectpicker border"
                        id="location"
                        name="location"
                        data-style="btn-black"
                        data-width="100%"
                        data-live-search="true"
                        title="ville "
                      >
                        <option>partout</option>
                        <option>Casablanca</option>
                        <option>Rabat</option>
                        <option>Settat</option>
                        <option>Tanger</option>
                        <option>kenitra</option>
                        
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label for="city">Adresse</label>
                      <input
                        type="text"
                        class="form-control"
                        id="city"
                        name="city"
                        placeholder="Entrer vos adresse"
                      />
                    </div>
                  </div>
                </div>
                <div class="row align-items-center mb-5">
                <div class="col-lg-4">
                  <label for="job-description">Descrire l'offre</label>
                  <input type="text" name="job-description">
                  <div class="form-group">
                  <label for="company-website-tw d-block"
                    >Télécharger l'image</label
                  >
                  <br />
                  <input
                    type="file"
                    id="myfile"
                    name="myfile"
                    class="width-100"
                  />
                </div>
                <input type="submit" class="theme-btn btn-style-one" value="Poster L'offre" name="btn">
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
    <script src="js/quill.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>
  </body>
</html>
