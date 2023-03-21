


<?php  

  // Connexion à la base de données
  $host = "localhost"; // Hôte de la base de données
  $user = "root"; // Nom d'utilisateur de la base de données
  $password = ""; // Mot de passe de la base de données
  $dbname = "base_de_donnee_site_recrutement"; // Nom de la base de données

  // Connexion à la base de données
  $conn = mysqli_connect($host, $user, $password, $dbname);

  // Vérification de la connexion
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Récupération des données du formulaire
  $email = $_POST['mail'];
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $naissance = $_POST['naissance'];
  $pwd = $_POST['pwd'];
  $specialite = $_POST['specialite'];
  $pays = $_POST['pays'];
  $codeP = $_POST['codeP'];
  $ville = $_POST['ville'];
  $adress = $_POST['adress'];
  $telephone = $_POST['telephone'];
  $formation = $_POST['formation'];

  // Insertion des données dans la table 'profils'
  $sql = "INSERT INTO profils (nom, description) VALUES ('$nom', NULL)";

  if (mysqli_query($conn, $sql)) {
    $profil_id = mysqli_insert_id($conn);

    // Insertion des données dans la table 'candidats'
    $sql = "INSERT INTO candidats (nom, prenom, email, telephone, mot_de_passe, adresse, code_postal, ville, pays,sexe,vous_ete) VALUES ('$nom', '$prenom', '$email', '$telephone', '$pwd', '$adresse', '$codeP', '$ville', '$pays')";

    if (mysqli_query($conn, $sql)) {
      $id_candidat = mysqli_insert_id($conn);

      // Insertion des données dans la table 'utilisateurs'
      $sql = "INSERT INTO utilisateurs (email, mot_de_passe, profil_id, type, id_candidat_ou_recruteur) VALUES ('$email', '$pwd', $profil_id, 'candidat', $id_candidat)";

      if (mysqli_query($conn, $sql)) {
        // Insertion des données dans la table 'recruteurs'
        $sql = "INSERT INTO recruteurs (nom_entreprise, email, mot_de_passe, adresse, code_postal, ville, pays) VALUES ('$nom', '$email', '$pwd', '$adresse', '$codeP', '$ville', '$pays')";

          if (mysqli_query($conn, $sql)) {
            header('Location:index.php');
          } else {
            echo "Erreur : " . mysqli_error($conn);
          }
        } else {
          echo "Erreur : " . mysqli_error($conn);
        }
      }} 
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="inscription-candidat.css" />
  </head>
  <body>
    <a href="index.php" id="symbole">Retour</a>
    <div>
      <form action="candidat.php" method="post">
        <h3 id="head">CRÉATION DE COMPTE</h3>

        <label class="required">Adresse email </label>
        <input type="email" name="mail" required /> <br /><br />

        <label class="required">Prénom </label>
        <input type="text" name="prenom" required /> <br /><br />

        <label class="required">nom </label>
        <input type="text" name="nom" required /> <br /><br />

        <label class="required" class="dat">Date de naissance </label>
        <input id="dat" type="date" name="naissance" required /><br /><br />
        <label class="required" class="dat">mot de passe </label>
        <input id="dat" type="password" name="pwd" required /><br /><br />

        <label class="required" class="etre">Vous êtes </label>
        <select id="etre" name="specialite" required>
          <option></option>
          <option>Étudiant</option>
          <option>Jeune diplômé</option>
          <option>Cadre du secteur privé</option>
          <option>Agent Maîtrise</option></select
        ><br /><br />

        <label class="required">Pays </label>
        <input type="text" name="pays" required /> <br /><br />

        <label class="required">Code postal </label>
        <input type="text" name="codeP" required /> <br /><br />

        <label class="required">Ville </label>
        <input type="text" name="ville" required /> <br /><br />

        <label class="required">Adresse </label>
        <input type="text" name="adress" required /> <br /><br />

        <label class="required">Téléphone </label>
        <input type="tel" name="telephone" required /> <br /><br />

        <label class="required">Civilité </label>
        <input type="radio" name="formation" value="Homme" required />Monsieur
        <input type="radio" name="formation" value="Femme" required />Madame
        <br /><br />

        <h6 id="champ">*Champs obligatoires</h6>

        <input type="reset" value="ANNULER" name="annuler" class="show" />
        <input
          type="submit"
          name="valider"
          value="Inscrire"
          class="marg"
        />
      </form>
    </div>
  </body>
</html>
