
<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "nom_utilisateur", "mot_de_passe", "base_de_donnees");

// Vérifier si la connexion a réussi
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer les valeurs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $motdepasse = $_POST["motdepasse"];
    $pays = $_POST["pays"];
    $code_postal = $_POST["code_postal"];
    $ville = $_POST["ville"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $specialite = $_POST["specialite"];
    $sexe = $_POST["sexe"];

    // Insérer l'utilisateur dans la table "utilisateurs"
    $sql = "INSERT INTO utilisateurs (email, mot_de_passe, profil_id, type) VALUES ('$email', '$motdepasse', 1, '$specialite')";
    if (mysqli_query($conn, $sql)) {
        $utilisateur_id = mysqli_insert_id($conn);

        // Insérer le candidat dans la table "candidats"
        if ($specialite == "Étudiant" || $specialite == "Jeune diplômé") {
            $sql = "INSERT INTO candidats (nom, prenom, email, telephone, mot_de_passe, adresse, code_postal, ville, pays) VALUES ('$nom', '$prenom', '$email', '$telephone', '$motdepasse', '$adresse', '$code_postal', '$ville', '$pays')";
            if (mysqli_query($conn, $sql)) {
                $candidat_id = mysqli_insert_id($conn);

                // Mettre à jour l'utilisateur avec l'ID du candidat correspondant
                $sql = "UPDATE utilisateurs SET id_candidat_ou_recruteur = $candidat_id WHERE id = $utilisateur_id";
                mysqli_query($conn, $sql);

                echo "Inscription réussie.";
            } else {
                echo "Erreur: " . mysqli_error($conn);
            }
        } else {
            // Insérer le recruteur dans la table "recruteurs"
            $sql = "INSERT INTO recruteurs (nom_entreprise, email, mot_de_passe, adresse, code_postal, ville, pays) VALUES ('$nom', '$email', '$motdepasse', '$adresse', '$code_postal', '$ville', '$pays')";
            if (mysqli_query($conn, $sql)) {
                $recruteur_id = mysqli_insert_id($conn);

                // Mettre à jour l'utilisateur avec l'ID du recruteur correspondant
                $sql = "UPDATE utilisateurs SET id_candidat_ou_recruteur = $recruteur_id WHERE id = $utilisateur_id";
                mysqli_query($conn, $sql);

                echo "Inscription réussie.";
            } else {
                echo "Erreur: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Erreur: " . mysqli_error($conn);
    }

    // Fermer la connexion à la base de données
  }
?>