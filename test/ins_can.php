<?php
// Connexion à la base de données
$host = 'localhost';
$user = 'utilisateur';
$pass = 'motdepasse';
$dbname = 'ma_base_de_donnees';
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Données du candidat à insérer
$nom = 'Dupont';
$prenom = 'Jean';
$email = 'jean.dupont@example.com';
$telephone = '0123456789';
$mot_de_passe = 'mon_mot_de_passe';
$adresse = '12 rue des Lilas';
$code_postal = '75000';
$ville = 'Paris';
$pays = 'France';

// Insertion du profil du candidat
$sql_profil = "INSERT INTO profils (nom, description) VALUES ('$nom', NULL)";
mysqli_query($conn, $sql_profil);

// Récupération de l'ID du profil inséré
$profil_id = mysqli_insert_id($conn);

// Insertion du candidat
$sql_candidat = "INSERT INTO candidats (nom, prenom, email, telephone, mot_de_passe, adresse, code_postal, ville, pays) 
                 VALUES ('$nom', '$prenom', '$email', '$telephone', '$mot_de_passe', '$adresse', '$code_postal', '$ville', '$pays')";
mysqli_query($conn, $sql_candidat);

// Récupération de l'ID du candidat inséré
$candidat_id = mysqli_insert_id($conn);

// Insertion de l'utilisateur correspondant au candidat
$sql_utilisateur = "INSERT INTO utilisateurs (email, mot_de_passe, profil_id, type, id_candidat_ou_recruteur) 
                    VALUES ('$email', '$mot_de_passe', $profil_id, 'candidat', $candidat_id)";
mysqli_query($conn, $sql_utilisateur);

// Fermeture de la connexion
mysqli_close($conn);
?>
