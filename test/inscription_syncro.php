<?php
session_start();
// Connexion à la base de données
$conn = new mysqli("localhost", "utilisateur", "mot_de_passe", "base_de_donnees");

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $motdepasse = $_POST["motdepasse"];
    $dateNaissance = $_POST["dateNaissance"];
    $pays = $_POST["pays"];
    $code_postal = $_POST["code_postal"];
    $ville = $_POST["ville"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $specialite = $_POST["specialite"];

    // Insertion de l'utilisateur dans la table "utilisateurs"
    $sql = "INSERT INTO utilisateurs (email, mot_de_passe, profil_id, type) VALUES ('$email', '$motdepasse', 1, 'candidat')";
    if ($conn->query($sql) === TRUE) {
        $utilisateur_id = $conn->insert_id;
        // Insertion du candidat dans la table "candidats"
        $sql = "INSERT INTO candidats (nom, prenom, email, telephone, mot_de_passe, adresse, code_postal, ville, pays) VALUES ('$nom', '$prenom', '$email', '$telephone', '$motdepasse', '$adresse', '$code_postal', '$ville', '$pays')";
        if ($conn->query($sql) === TRUE) {
            // Stockage des données de l'utilisateur dans la session
            $_SESSION["utilisateur_id"] = $utilisateur_id;
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["email"] = $email;
            $_SESSION["telephone"] = $telephone;
            $_SESSION["adresse"] = $adresse;
            $_SESSION["code_postal"] = $code_postal;
            $_SESSION["ville"] = $ville;
            $_SESSION["pays"] = $pays;
            $_SESSION["specialite"] = $specialite;
            // Redirection vers la page d'accueil
            header("Location: index-3.php");
            exit();
        } else {
            echo "Erreur lors de l'insertion du candidat dans la base de données : " . $conn->error;
        }
    } else {
        echo "Erreur lors de l'insertion de l'utilisateur dans la base de données : " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
}
?>