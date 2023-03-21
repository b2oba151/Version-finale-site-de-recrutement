<!DOCTYPE html>
<html lang="en">

<head>
  <title> Postulation Candidats Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Projet_3" />
  

  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/quill.snow.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">


  <!-- Main CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- logo -->  
  <link rel="shortcut icon" href="image/logocv.ico" type="image/x-icon/">
  <link rel="icon" href="image/logocv.ico" type="image/x-icon/">

</head>
<body id="top">

    <!-- NAVBAR -->
    <header class="site-navbar" id="mynavbarst">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.php"> <img class="img-responsive"src="image/logocv.ico"  alt="Logo Image"></a></div>

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
                  <a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="about.html">A propos</a></li>
                    <li><a href="connexioncandidat.php"> connecter candidat</a></li>
                    <li><a href="connexion-recr.php">connecter recruteur</a></li>
                  </ul>
                </li>
            </nav>

       <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
        <div class="ml-auto">
          <a href="post-job.php" class="theme-btn btn-style-three border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Postuler Emploi</a>

          <a href="connexioncandidat.php"> <button type="button" class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block">connexion</button> </a>

        </div>
        <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
      </div>

    </div>
  </div>
</header>

<!-- Acceuil -->
<section class="section-hero overlay-2 inner-page bg-image" style="background-image: url('image/hero_1.jpg');" id="Acceuil-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Ajouter un Resume</h1>
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
            <p>C'est mieux de créer un compte pour avoir tous les nouvelles.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-3">
        <a href="#" class="theme-btn btn-style-one btn-md float-right">Se connecter</a>
      </div>
    </div>


<form action="postcandidat.php" method="post">
    <div class="row mb-5">
      <div class="col-lg-12">
        <div class="resume">
          <label for="company-website-tw d-block"> <strong>Telecharger votre </strong> Resume  </label> 
         
          <input type="file" id="myfile" name="myfile" class="width-100"> 
          <button class="theme-btn btn-style-one btn-md float-left" type="submit" style="margin-top:5px">Telecharger</button><br>
        </div> <br> </form>



        <form action="foncction.php" class="p-4 p-md-5 border rounded" method="post" style="margin-top: 50px">
          <h3 class="text-black mb-5 border-bottom pb-2">Generale Information</h3>

          <div class="row">  
            <div class="col-lg-4 col-md-4">
              <div class="form-group">
                <label for="nom-complet">Nom Complet</label>
                <input type="text" class="form-control" id="nom-complet" name="nom-complet" placeholder="ex: FARHANE Salma">
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email address">
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="form-group">
                <label for="job-profession">Profession </label>
                <input type="text" class="form-control" id="job-profession" name="job-profession" placeholder="ex: Web developer">
              </div>
            </div>
          </div>
          <div class="row">
           <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label for="candidate-age">Age</label>
              <input type="text" class="form-control" id="candidate-age" name="candidate-age" placeholder="20">
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label for="job-Location">Location</label>
              <input type="text" class="form-control" id="job-Location" name="job-Location" placeholder="ex: Casablanca">
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label for="ctp">Catégorie de profils</label>
              <select class="selectpicker border rounded" id="ctp" name="ctp" data-style="btn-black" data-width="100%" data-live-search="true" title="choisir Catégorie de profils">
                <option>Technicien</option>
                <option>Ingénieur</option>
                <option>Formateur</option>
              </select>
            </div>
          </div>


        </div>

        <div class="row">  
         <div class="col-lg-4 col-md-4">
          <div class="form-group">
            <label for="job-type"> Domaine</label>
            <select class="selectpicker border rounded" id="job-type" name="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="choisir type d'emploi">
              <option>ELECTRIQUE</option>
              <option>INDUSTRUELLE</option>
              <option>INFORMATIQUE</option>
              <option>MECANIQUE</option>
              <option>BIOLOGIE</option>
              <option>MATHEMATICS</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="form-group">
            <label for="experience">Experience</label>
            <select class="selectpicker border rounded" id="experience" name="experience" data-style="btn-black" data-width="100%" data-live-search="true" title="Choisir durée d'experience">
              <option>Pas experience</option>
              <option>Moins d'une année</option>
              <option>1 de 2 années</option>
              <option>2 to 4 années</option>
              <option>5 années +</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
         <div class="form-group">
          <label for="skills">Compétences</label>
          <select class="selectpicker border rounded" id="skills[]" name="skills[]" multiple data-style="btn-black" data-width="100%" data-live-search="true" 
          title="Genre de compétences ">
        <option>Créativité </option>
            <option>Travail en équipe </option>
            <option>Gestion de crise</option>
            <option>Leadership</option>
            <option>Empathie</option>
            <option>Proactivité </option>
            <option>Systèmes d'exploitation </option>
            <option>Base De Données  </option>
            <option>Modélisation </option>
            <option>Java </option>
            <option> C++ </option>
            <option> C# </option>
            <option> C </option>
            ?>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="company-website-tw d-block">Telecharger une image</label> <br>
      <input type="file" id="myfile" name="myfile" class="width-100">
    </div>

    <div class="form-group">
      <label for="job-description">Profil Description</label>
      <div class="editor" id="editor-1"></div>
    </div>

    <h3 class="text-black mb-5 mt-5 border-bottom pb-2">Education (optional)</h3>

    <div class="bg-light  p-3 rounded">

     <div class="form-group">
      <label for="school-name">Nom d'universite</label>
      <input type="text" class="form-control" id="school-name" name="school-name" placeholder="Nom universite">
    </div>

    <div class="form-group">
      <label for="qualification">Formation</label>
      <input type="text" class="form-control" id="qualification" name="qualification" placeholder=" Formation">
    </div>

    <div class="form-group">
      <label for="start/end">Debut Date</label>
      <input type="date" class="form-control" id="start" name="start" placeholder="Debut Date">
    </div>

    <div class="form-group">
      <label for="notes">fin Date</label>
      <input type="date" class="form-control" id="end" name="end" placeholder="fin Date">
    </div>

  </div>

  <div class="mt-3 mb-5">
    <button href="#" class="theme-btn btn-style-one">+ ajouter Education</button>
  </div>

  <h3 class="text-black mb-5 mt-5 border-bottom pb-2">Experience (optional)</h3>

  <div class="bg-light rounded p-3">

   <div class="form-group">
    <label for="employer-name">Nom Employer</label>
    <input type="text" class="form-control" id="employer-name" name="employer-name" placeholder="Nom Employer">
  </div>

  <div class="form-group">
    <label for="nom-complet">Titre emploi</label>
    <input type="text" class="form-control" id="nom-complet" placeholder="Titre">
  </div>

  <div class="form-group">
    <label for="start/end">Debut Date</label>
    <input type="date" class="form-control" id="start" placeholder="Debut Date">
  </div>

  <div class="form-group">
    <label for="notes">Fin Date</label>
    <input type="date" class="form-control" id="start" placeholder="fin Date">
  </div>

 </div>
 <div class="mt-3 mb-5">
  <button href="#" class="theme-btn btn-style-one">+ Ajouter Experience</button>
 </div>

<div class="col-lg-4">
<input type="submit" class="theme-btn btn-style-one" value="Poster votre candidature" name="btn">
  </div>

</form>
</div>
</div>
<div class="row align-items-center mb-5">

  
</div>
 </div>
</form>
</section>


<!-- Start Footer Area -->

<footer class="main-footer">
  <div class="container">
    <div class="upper-box">
      <div class="row">
        <!-- Upper column -->
        <div class="upper-column col-lg-3 col-md-12 col-sm-12">
          <div class="footer-logo">
            <figure class="image"><a href="index.php"><img src="image/logocv.ico" class="img-responsive" alt="Logo Image"></a></figure>
          </div>
        </div>

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

   
  </div>

  <!--Footer Bottom-->
  <div class="footer-bottom">
    <div class="container">

      <div class="inner-container clearfix">
       <div class="footer-nav">
        <ul class="clearfix">
         
       </ul>
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