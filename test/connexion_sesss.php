<?php
// Informations de connexion à la base de données
$host = "localhost";
$user = "utilisateur";
$password = "motdepasse";
$dbname = "base_de_donnee_site_recrutement";

// Connexion à la base de données
$conn = new mysqli($host, $user, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les valeurs soumises dans le formulaire
  $email = $_POST["email"];
  $motdepasse = $_POST["motdepasse"];

  // Vérifier si l'email et le mot de passe ont été saisis
  if (empty($email)) {
    $email_error = "Veuillez saisir votre adresse email";
  }
  if (empty($motdepasse)) {
    $motdepasse_error = "Veuillez saisir votre mot de passe";
  }

  // Si les champs ont été saisis, vérifier les informations de connexion
  if (empty($email_error) && empty($motdepasse_error)) {
    // Requête SQL pour récupérer l'utilisateur avec l'email et le mot de passe saisis
    $sql = "SELECT id, email, profil_id, type, id_candidat_ou_recruteur FROM utilisateurs WHERE email='$email' AND mot_de_passe='$motdepasse'";
    $result = $conn->query($sql);

    // Vérifier si l'utilisateur a été trouvé
    if ($result->num_rows == 1) {
      // L'utilisateur a été trouvé, démarrer une session et rediriger vers la page d'accueil
      session_start();
      $row = $result->fetch_assoc();
      $_SESSION["user_id"] = $row["id"];
      $_SESSION["user_email"] = $row["email"];
      $_SESSION["user_profil_id"] = $row["profil_id"];
      $_SESSION["user_type"] = $row["type"];
      $_SESSION["user_id_candidat_ou_recruteur"] = $row["id_candidat_ou_recruteur"];
      header("Location: index-3.php");
    } else {
      // L'utilisateur n'a pas été trouvé, afficher un message d'erreur
      $login_error = "Adresse email ou mot de passe incorrect";
    }
  }
}

// Fermer la connexion à la base de données
$conn->close();
?>

<!-- Afficher le formulaire HTML avec les messages d'erreur si nécessaire -->
<form class="tg-loginform" method="post">
  <fieldset>
    <div class="form-group">
      <input type="text" name="email" class="form-control" placeholder="email">
      <?php if (!empty($email_error)) { echo '<span class="error">' . $email_error . '</span>'; } ?>
    </div>
    <div class="form-group">
      <input type="password" name="motdepasse" class="form-control" placeholder="motdepasse">
      <?php if (!empty($motdepasse_error)) { echo '<span class="error">' . $motdepasse_error . '</span>'; } ?>
    </div>