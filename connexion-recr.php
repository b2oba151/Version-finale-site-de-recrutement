<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "motdepassemysql";
    $dbname = "base_de_donnee_site_recrutement";

    $bdd = new mysqli($servername, $username, $password, $dbname);

    if (isset($_POST['submit'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['password']);
            $recupUser = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ? AND mot_de_passe = ?');
            $recupUser->bind_param("ss", $email, $mdp);
            $recupUser->execute();
            $result = $recupUser->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $mdp;
                $_SESSION['id'] = $row['id'];
                $_SESSION['type'] = $row['type'];
                if($row['type'] ==='recruteur') {
                    header('Location: home-recruteur.php');
                    exit;
                } elseif($row['type'] ==='candidat') {
                    header('Location: home-candidat.php');
                    exit;
                }
                
            } else {
                $err= "Votre adresse e-mail ou votre mot de passe est incorrect.";
            }
        } else {
            $err= "Veuillez remplir tous les champs.";
        }
    }
}
?>









<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    
    
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
    <link rel="stylesheet" href="connexion-recruteur.css" />
  </head>
  <body style="
    width: 100%;
    background: linear-gradient(to top , rgba(0,0,0,0.5)100%,rgba(0,0,0,0.5)100%),url(backphoto.png);
    background-position: center;
    background-size: cover;

">
    <div class="container" id="container">
      <div class="form-container login-container">
        <form class="form" method="post">
          <p class="style place">VOUS AVEZ DÉJÀ UN COMPTE ?</p>
          <p class="style">CONNECTEZ-VOUS</p>
          <div class="alert-sm alert-danger"> <?php echo $err ?></div>
          <br />

          <div class="form-group">
          <label class="espace" for="mail">Votre email</label>
          <input type="email" placeholder="Email" required  name="email"/> <br />

          <label class="espace" for="mot de pass">Votre mot de passe</label>
          <input type="password" placeholder="Password" required name="password"/> <br />
          <button type="submit" name="submit"class="submit btn btn-white">SE CONNECTER</button>
          </div>
          <!-- <a href="">Mot de passe oublié?</a> -->
          <!-- <a href=""><input type="submit" name="submit" value="SE CONNECTER" ></a> -->
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-right">
            <h3>
              RECHERCHEZ DES COMPÉTENCES ET TROUVEZ VOS FUTURS COLLABORATEURS
              PARMI PLUS DE 300 000 PROFILS
            </h3>
            <p>
              Chaque mois près de 20 000 nouveaux profils sont publiés sur
              BRIGHTJOBd
            </p>
            <br />
            <br />
            <br />

            <a href="inscription-recr.php"
              ><button class="couleur">CRÉER VOTRE COMPTE</button></a
            >
          </div>
        </div>
      </div>
    </div>
  </body>
</html>