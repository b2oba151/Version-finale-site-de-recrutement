<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Projet_3 - Dashboard Employer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="../fonts/icomoon/style.css">

	<!-- MAIN CSS --> 
	<link href="css/style.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
</head>

<body>

	<button id="back-to-top-btn"> <span class="icon-keyboard_arrow_up"></span></button>

	<div class="site-wrap">

		<!-- Main Header-->
		<header class="main-header">
			<div class="main-box clearfix">
				<!-- Logo Box -->
				<div class="logo-box">
					<div class="logo"><a href="dashboard-employer.php"><img src="images/l" alt="" title=""></a></div>
				</div>

				<!-- Upper Right-->
				<div class="upper-right">
					<ul class="clearfix">
						<li class="dropdown option-box">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="images/resource/thumb-1.jpg" alt="avatar" class="thumb">Welcom, ADMIN</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="dashboard-employer.php">Dashboard</a>
								<a class="dropdown-item" href="dashboard-employer-my-profile.html">My profile</a>
								<a class="dropdown-item" href="../index.php">Log out</a>
							</div>
						</li>
						
						<li class="nav-toggler">
							<button class="toggler-btn nav-btn"><span class="bar bar-one"></span><span class="bar bar-two"></span><span class="bar bar-three"></span></button>
						</li>
					</ul>
				</div>
			</div>
			<!--End Header Lower-->
		</header>
		<!--End Main Header -->

		<!-- Hidden Bar -->
		<section class="hidden-bar">
			<div class="dashboard-inner">
				<div class="cross-icon"><span class="pe-7s-close-circle"></span></div>
				<ul class="navigation">
					<li class="active"><a href="dashboard-employer.php"><i class="pe-7s-culture"></i> Dashboard</a></li>
					<li><a href="dashboard-employer-my-profile.html"><i class="pe-7s-user"></i>My Profile</a></li>
					<li><a href="dashboard-employer-manage-candidates.php"><i class="pe-7s-note2"></i>Manage Candidats</a></li>
					<li><a href="dashboard-employer-manage-jobs.html"><i class="pe-7s-note2"></i>Manage Jobs</a></li>
					
					<li><a href="../index.php"><i class="pe-7s-back-2"></i>Logout</a></li>
				</ul>
			</div>
		</section>
		<!--End Hidden Bar -->

		<div class="dashboard">
			<div class="container-fluid">
				<div class="content-area">
					<div class="dashboard-content">
						<div class="dashboard-header clearfix">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<h4>Dashboard</h4>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="breadcrumb-nav">
										<ul>
											<li><a href="../index.php">Index</a></li>
											<li class="active">Dashboard</li>
										</ul>
									</div>
								</div>

							</div>
						</div>


						<!-- begin row -->

						<!-- end row -->

						<!-- Start Jobs Area -->
						<div class="site-section content-inner-2">
							<div class="container-fluid">
								<div class="job-resp job-title-bx">
									<div class="mb-4 mt-5">
										<h2>Jobs List</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">


										<ul class="post-job-bx">
										
									
											
											<?php
function getOffresEmploi() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "base_de_donnee_site_recrutement";

  // Connexion à la base de données
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Vérification de la connexion
  if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
  }

  // Requête pour récupérer les informations des offres d'emploi avec les informations des candidats correspondants
  $sql = "SELECT offres_emploi.*, cv.titre_profession, cv.description, cv.fichier_cv, cv.ville, cv.sexe, cv.type_travail, cv.experience FROM offres_emploi INNER JOIN recruteurs ON offres_emploi.id_recruteur = recruteurs.id INNER JOIN utilisateurs ON utilisateurs.id_candidat_ou_recruteur = recruteurs.id INNER JOIN cv ON utilisateurs.id_candidat_ou_recruteur = cv.id_candidat";

  $result = $conn->query($sql);

  $offres_emploi = array();

  // Parcourir les résultats et les ajouter à un tableau
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $offre_emploi = array(
        "id" => $row["id"],
        "id_recruteur" => $row["id_recruteur"],
        "titre" => $row["titre"],
        "description" => $row["description"],
        "date_publication" => $row["date_publication"],
        "date_limite" => $row["date_limite"],
        "ville_offre" => $row["ville_offre"],
        "salaire" => $row["salaire"],
        "email_recruteur" => $row["email_recruteur"],
        "type_travail" => $row["type_travail"],
        "experience" => $row["experience"],
        "niveau_etude" => $row["niveau_etude"],
        "nom_industrie" => $row["nom_industrie"],
        "categorie_travail" => $row["categorie_travail"],
        "images" => $row["images"],
        "nom_societe" => $row["nom_societe"],
        "site_internet" => $row["site_internet"],
        "numero_telephone" => $row["numero_telephone"],
        "email_entreprise" => $row["email_entreprise"],
        "adresse_entreprise" => $row["adresse_entreprise"],
        "titre_profession" => $row["titre_profession"],
        "description_cv" => $row["description"],
        "fichier_cv" => $row["fichier_cv"],
        "ville_cv" => $row["ville"],
        "sexe_cv" => $row["sexe"],
        "type_travail_cv" => $row["type_travail"],
        "experience_cv" => $row["experience"]
      );
      array_push($offres_emploi, $offre_emploi);
    }
  }

  // Fermeture de la connexion à la base de données
  $conn->close();

  return $offres_emploi;
}
?>








<?php $datas=getOffresEmploi(); ?>

<?php foreach($datas as $data) :?>
 <li>
  <a href="../job-detail.php">
   <div class="job-resp m-b30">
    <div class="job-post-company">
     <span><img src="images/logo/icon2.png"/></span>
   </div>
   <div class="job-post-info">
     <h4><?php echo $data['titre'] ?></h4>
     <ul>
      <li><span class="icon icon-map-marker"></span> <?php echo $data['ville_offre'] ?> </li>
      <li><span class="icon icon-filter"></span> <?php echo $data['categorie_travail'] ?> </li>
      <li><span class="icon icon-suitcase"></span> <?php echo $data['type_travail_cv'] ?> </li>
      <li><span class="icon icon-clock-o"></span> date limite : <?php echo $data['date_limite'] ?> </li>
    </ul>
  </div>
</div>
<div class="d-flex">
  <div class="job-time mr-auto">
   <span>Apply Job</span>
 </div>
 <div class="salary-bx">
   <span><?php echo $data['salaire'] ?></span>
 </div>
</div>
<span class="post-like icon icon-heart-o"></span>
</a>
</li>
<?php endforeach; ?>




											
										</ul>








									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<!-- Start Footer Area -->
		<footer class="main-footer">
			<!--Footer Bottom-->
			<div class="footer-bottom">
				<div class="container">

					<div class="inner-container clearfix">
						<div class="footer-nav">
							<ul class="clearfix">
								<li><a href="#">Privacy / Policy</a></li> 
								<li><a href="#">Terms & Conditions</a></li> 
								<li><a href="#">About</a></li> 
								<li><a href="#">Contact</a></li> 
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


	<script src="js/jquery.js"></script> 
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/dropzone.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/script.js"></script>

	<!-- plugins -->
	<script src="js/vendors.js"></script>

	<!-- custom app -->
	<script src="js/app.js"></script>
</body>

</html>