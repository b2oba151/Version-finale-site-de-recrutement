<?php
// Paramètres de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "base";


// Connexion à la base de données MySQL
try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$base", $utilisateur, $motdepasse);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if(isset($_POST['valider'])) {
    $Adresseemail = $_POST['mail'];
    $Prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $Datedenaissance  = $_POST['naissance'];
    $motdepasse = $_POST['pwd'];
    $Vousetes = $_POST['specialite'];
    $Pays = $_POST['pays'];
    $Codepostal = $_POST['codeP'];
    $Ville = $_POST['ville'];
    $Adresse = $_POST['adress'];
    $Telephone  = $_POST['telephone'];
    $Civilite = $_POST['formation'];
    
    $sql="INSERT INTO `candidats`(`email`, `prenom`, `nom`, `date de naissance`, `mot_de_passe`, `profil`, `adresse`, `code_postal`, `ville`, `pays`, `telephone`, `civilite`) 
    VALUES (:Adresseemail, :Prenom, :nom, :Datedenaissance, :motdepasse, :Vousetes, :Adresse, :Codepostal, :Ville, :Pays, :Telephone, :Civilite)";
    $stmt = $bdd->prepare($sql);
  
    $stmt->bindParam(':Adresseemail', $Adresseemail);
    $stmt->bindParam(':Prenom', $Prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':Datedenaissance', $Datedenaissance);
    $stmt->bindParam(':motdepasse', $motdepasse);
    $stmt->bindParam(':Vousetes', $Vousetes);
    $stmt->bindParam(':Pays', $Pays);
    $stmt->bindParam(':Codepostal', $Codepostal);
    $stmt->bindParam(':Ville', $Ville);
    $stmt->bindParam(':Adresse', $Adresse);
    $stmt->bindParam(':Telephone', $Telephone);
    $stmt->bindParam(':Civilite', $Civilite);
    $stmt->execute();
    header("Location: home-candidat.php");
    exit();
}
?>
