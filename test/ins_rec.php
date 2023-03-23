<?php
// Connexion à la base de données
$conn = new mysqli("nom_du_serveur", "nom_d_utilisateur", "mot_de_passe", "nom_de_la_base_de_donnees");

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données: " . $conn->connect_error);
}

// Données du recruteur à insérer
$nom_entreprise = "Nom de l'entreprise";
$email = "email@entreprise.com";
$mot_de_passe = "MotDePasse";
$adresse = "Adresse de l'entreprise";
$code_postal = "12345";
$ville = "Ville";
$pays = "Pays";

// Insertion du recruteur dans la table `recruteurs`
$sql = "INSERT INTO recruteurs (nom_entreprise, email, mot_de_passe, adresse, code_postal, ville, pays)
        VALUES ('$nom_entreprise', '$email', '$mot_de_passe', '$adresse', '$code_postal', '$ville', '$pays')";

if ($conn->query($sql) === TRUE) {
    // Récupération de l'id du recruteur inséré
    $id_recruteur = $conn->insert_id;
    
    // Données de l'utilisateur à insérer
    $email = $email;
    $mot_de_passe = $mot_de_passe;
    $profil_id = 3; // Profil de recruteur
    $type = "recruteur";
    $id_candidat_ou_recruteur = $id_recruteur;
    
    // Insertion de l'utilisateur dans la table `utilisateurs`
    $sql = "INSERT INTO utilisateurs (email, mot_de_passe, profil_id, type, id_candidat_ou_recruteur)
            VALUES ('$email', '$mot_de_passe', '$profil_id', '$type', '$id_candidat_ou_recruteur')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouveau recruteur inséré avec succès!";
    } else {
        echo "Erreur lors de l'insertion de l'utilisateur: " . $conn->error;
    }
} else {
    echo "Erreur lors de l'insertion du recruteur: " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
