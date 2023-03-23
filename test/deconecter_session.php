<?php
function deconnecter() {
  // Démarrer la session si elle n'a pas encore été démarrée
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  // Vider les variables de session et détruire la session
  $_SESSION = array();
  session_destroy();

  // Rediriger vers la page de connexion
  header("Location: connexion.php");
  exit;
}
?>





<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["user_id"])) {
  // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
  header("Location: connexion.php");
  exit;
}

// Si l'utilisateur clique sur le bouton de déconnexion
if (isset($_POST["deconnexion"])) {
  // Déconnecter l'utilisateur
  deconnecter();
}
?>

<!-- Afficher le bouton de déconnexion dans le formulaire -->
<form method="post">
  <div class="form-group">
    <button type="submit" name="deconnexion" class="btn btn-default">Déconnexion</button>
  </div>
</form>
