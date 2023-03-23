<?php
session_start(); // démarrer la session

// récupérer les variables de session
$id_offre = $_SESSION['id_offre'];
$id_candidat = $_SESSION['id_candidat'];

// récupérer les autres données de la postulation à partir du formulaire
$date_postulation = $_POST['date_postulation'];
$lettre_motivation = $_POST['lettre_motivation'];

// se connecter à la base de données
$connexion = mysqli_connect('localhost', 'utilisateur', 'mot_de_passe', 'ma_base_de_donnees');

// vérifier la connexion
if (!$connexion) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}

// préparer la requête d'insertion
$sql = "INSERT INTO postulations (id_offre, id_candidat, date_postulation, lettre_motivation) VALUES ('$id_offre', '$id_candidat', '$date_postulation', '$lettre_motivation')";

// exécuter la requête d'insertion
if (mysqli_query($connexion, $sql)) {
    echo "La postulation a été enregistrée avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($connexion);
}

// fermer la connexion à la base de données
mysqli_close($connexion);
?>



/////////////////////////////////////////////////
<?php
session_start();
// récupérer l'ID du candidat depuis $_SESSIONS
$id_candidat = $_SESSION['id_candidat'];

// se connecter à la base de données
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "nom_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// préparer la requête d'insertion pour la table postulations
$id_offre = $_POST['id_offre']; // supposons que l'ID de l'offre soit envoyé via POST
$date_postulation = date('Y-m-d'); // la date de la postulation sera la date d'aujourd'hui
$lettre_motivation = $_POST['lettre_motivation']; // supposons que la lettre de motivation soit envoyée via POST

$stmt = $conn->prepare("INSERT INTO postulations (id_offre, id_candidat, date_postulation, lettre_motivation) VALUES (?, ?, ?, ?)");
$stmt->bind_param("iiss", $id_offre, $id_candidat, $date_postulation, $lettre_motivation);
$stmt->execute();

$postulation_id = $stmt->insert_id; // récupérer l'ID de la postulation nouvellement insérée

// insérer la même candidature dans la table cv
$id_cv = $_POST['id_cv']; // supposons que l'ID du CV soit envoyé via POST
$titre_profession = $_POST['titre_profession']; // supposons que le titre de la profession soit envoyé via POST
$description = $_POST['description']; // supposons que la description soit envoyée via POST
$fichier_cv = $_FILES['fichier_cv']['name']; // supposons que le nom du fichier CV soit envoyé via POST

$stmt = $conn->prepare("INSERT INTO cv (id_candidat, titre_profession, description, fichier_cv, date_creation) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $id_candidat, $titre_profession, $description, $fichier_cv, $date_postulation);
$stmt->execute();

$cv_id = $stmt->insert_id; // récupérer l'ID du CV nouvellement inséré

// insérer la même candidature dans la table candidats_competences
$id_competence = $_POST['id_competence']; // supposons que l'ID de la compétence soit envoyé via POST
$niveau = $_POST['niveau']; // supposons que le niveau de la compétence soit envoyé via POST

$stmt = $conn->prepare("INSERT INTO candidats_competences (id_candidat, id_competence, niveau) VALUES (?, ?, ?)");
$stmt->bind_param("iii", $id_candidat, $id_competence, $niveau);
$stmt->execute();

// insérer la même candidature dans la table formations
$nom_etablissement = $_POST['nom_etablissement']; // supposons que le nom de l'établissement soit envoyé via POST
$description_bref = $_POST['description_bref']; // supposons que la description de la formation soit envoyée via POST
['date_debut']; // supposons que la date de début de la formation soit envoyée via POST
$date_fin = $_POST['date_fin']; // supposons que la date de fin de la formation soit envoyée via POST

$stmt = $conn->prepare("INSERT INTO formations (id_candidat, nom_etablissement, description_bref, date_debut, date_fin) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $id_candidat, $nom_etablissement, $description_bref, $date_debut, $date_fin);
$stmt->execute();

// fermer la connexion à la base de données
$conn->close();

// rediriger le candidat vers une page de confirmation de la candidature
header("Location: confirmation.php");
exit();
?>