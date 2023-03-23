<?php
session_start(); // Démarrer la session

// Connexion à la base de données (remplacer les valeurs entre crochets)
$conn = new mysqli("[serveur]", "[nom_utilisateur]", "[mot_de_passe]", "[nom_base_de_données]");
if ($conn->connect_error) {
  die("La connexion à la base de données a échoué: " . $conn->connect_error);
}

// Récupérer l'ID du recruteur depuis la session
$id_recruteur = $_SESSION['id_recruteur'];

// Préparer la requête d'insertion pour la table "offres_emploi"
$stmt_offre = $conn->prepare("INSERT INTO offres_emploi (id_recruteur, titre, description, date_publication, date_limite, ville_offre, salaire, email_recruteur, type_travail, experience, niveau_etude, nom_industrie, categorie_travail, images, nom_societe, site_internet, numero_telephone, email_entreprise, adresse_entreprise) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt_offre->bind_param("isssssdsssssssssss", $id_recruteur, $titre, $description, $date_publication, $date_limite, $ville_offre, $salaire, $email_recruteur, $type_travail, $experience, $niveau_etude, $nom_industrie, $categorie_travail, $images, $nom_societe, $site_internet, $numero_telephone, $email_entreprise, $adresse_entreprise);

// Assigner les valeurs à insérer
$titre = "Titre de l'offre d'emploi";
$description = "Description de l'offre d'emploi";
$date_publication = "2023-03-19";
$date_limite = "2023-04-19";
$ville_offre = "Paris";
$salaire = 45000.00;
$email_recruteur = "exemple@recruteur.com";
$type_travail = "Temps plein";
$experience = "3-5 ans";
$niveau_etude = "Bac +5";
$nom_industrie = "Informatique";
$categorie_travail = "Développement";
$images = "image.png";
$nom_societe = "Exemple SARL";
$site_internet = "www.exemple.com";
$numero_telephone = "01 23 45 67 89";
$email_entreprise = "contact@exemple.com";
$adresse_entreprise = "123 rue de l'exemple";

// Exécuter la requête d'insertion pour la table "offres_emploi"
if ($stmt_offre->execute()) {
  $id_offre = $stmt_offre->insert_id; // Récupérer l'ID de l'offre insérée
  $stmt_offre->close(); // Fermer la requête d'insertion pour la table "offres_emploi"

  // Préparer la requête d'insertion pour la table "postulations"
  $stmt_postulation = $conn->prepare("INSERT INTO postulations (id_offre, id_candidat, date_postulation, lettre_motivation) VALUES (?, ?, ?, ?)");
  $stmt_postulation->bind_param("iiss", $id_offre, $id_candidat, $date_postulation, $lettre_motivation);
  $stmt_postulation->execute();
  
  if ($stmt_postulation->affected_rows > 0) {
      // La postulation a été enregistrée avec succès
      echo "Postulation enregistrée avec succès !";
  } else {
      // Une erreur s'est produite lors de l'enregistrement de la postulation
      echo "Une erreur s'est produite lors de l'enregistrement de la postulation.";
  }
  
  $stmt_postulation->close();
  $conn->close();
}  
