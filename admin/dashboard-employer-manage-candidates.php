<?php require '../fonctions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Projet_3 - Dashboard Employer Manage Candidats</title>
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
          <li><a href="dashboard-employer.php"><i class="pe-7s-culture"></i> Dashboard</a></li>
          <li><a href="dashboard-employer-my-profile.html"><i class="pe-7s-user"></i>My Profile</a></li>
          <li class="active"><a href="dashboard-employer-manage-candidates.php"><i class="pe-7s-note2"></i>Manage Candidats</a></li>
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
             <div class="col-md-6 col-sm-12"><h4>Manage Candidats</h4></div>
             <div class="col-md-6 col-sm-12">
               <div class="breadcrumb-nav">
                 <ul>
                   <li><a href="../index.php">Index</a></li>
                   <li><a href="dashboard-employer.php">Dashboard</a></li>
                   <li class="active">Manage Candidats</li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="column col-lg-12">
            <div class="manage-Candidats">

               <div class="invoice-box">

                <div class="col-xxl-6 m-b-30">
                  <div class="card card-statistics h-100 mb-0 jobportal-contant">

                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="openposition" class="table table-borderless table-striped jobportal-table mb-0">
                          <thead>
                            <tr>
                              <th>Candidate Name</th>
                              <th>Job Name</th>
                              <th>Status</th>
                              <th>Action</th>

                            </tr>
                          </thead>
                          <tbody class="text-muted">

         <?php afficher_candidats_tous_les_candidatsDash() ?>
     













                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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