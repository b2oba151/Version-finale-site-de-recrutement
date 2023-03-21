<?php require 'config_bd.php' ?>
<?php
function afficher_candidats_tous_les_candidats() {
    $host = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "base_de_donnee_site_recrutement";

    $connexion = mysqli_connect($host, $utilisateur, $mot_de_passe, $base_de_donnees);

    if (!$connexion) {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    $sql = "SELECT candidats.nom, candidats.prenom, cv.titre_profession, cv.type_travail, cv.ville FROM candidats JOIN cv ON candidats.id = cv.id_candidat";

    $resultat = mysqli_query($connexion, $sql);

    if (!$resultat) {
        die("La requête a échoué : " . mysqli_error($connexion));
    }

    while ($row = mysqli_fetch_assoc($resultat)) {
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $titre_profession = $row['titre_profession'];
        $type_travail = $row['type_travail'];
        $ville = $row['ville'];

        echo "<ul class='post-job-bx'>";
        echo "<li>";
        echo "<a href='candidate-single.php'>";
        echo "<div class='emp-detail'>";
        echo "<div class='job-post-company'>";
        echo "<span><img src='images/person_1.jpg' /></span>";
        echo "</div>";
        echo "<div class='job-post-info'>";
        echo "<h4>$nom $prenom</h4>";
        echo "<h5>$titre_profession</h5>";
        echo "<ul>";
        echo "<li><span class='icon icon-clock-o'></span> $type_travail</li>";
        echo "<li><span class='icon icon-map-marker'></span>$ville</li>";
        echo "<li><span class='icon icon-money'></span> 12 /mo</li>";
        echo "</ul>";
        echo "</div>";
        echo "</div>";
        echo "<div class='J-open'>";
        echo "<button type='submit' class='theme-btn btn-style-one'>View Profile</button>";
        echo "</div>";
        echo "</a>";
        echo "</li>";
        echo "</ul>";
    }

    mysqli_close($connexion);
}
?>

<?php 
function afficher_competance_et_niveau_candidats(){
  $host = "localhost";
  $utilisateur = "root";
  $mot_de_passe = "";
  $base_de_donnees = "base_de_donnee_site_recrutement";
  $connexion = mysqli_connect($host, $utilisateur, $mot_de_passe, $base_de_donnees);

  $sql = "SELECT c.id, c.nom, c.prenom, GROUP_CONCAT(comp.titre, ' (niveau : ', cc.niveau, ')') AS competences 
          FROM candidats c 
          LEFT JOIN candidats_competences cc ON c.id = cc.id_candidat 
          LEFT JOIN competences comp ON cc.id_competence = comp.id 
          GROUP BY c.id";

  $resultat = mysqli_query($connexion, $sql);

  while ($ligne = mysqli_fetch_assoc($resultat)) {
      echo "Nom : " . $ligne["nom"] . " " . $ligne["prenom"] . "<br>";
      echo "Compétences : " . $ligne["competences"] . "<br><br>";
  }

  mysqli_close($connexion);
}
?>





<?php

function infos_candidat($id){
    $host = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "base_de_donnees_site_recrutement";

    $connexion = mysqli_connect($host, $utilisateur, $mot_de_passe, $base_de_donnees);

    if (!$connexion) {
        die("Connexion à la base de données impossible : " . mysqli_connect_error());
    }

    $sql = "SELECT candidats.nom, candidats.prenom, cv.titre_profession, cv.type_travail, cv.ville, cv.description \n"
        . "FROM candidats \n"
        . "INNER JOIN cv ON candidats.id = cv.id_candidat \n"
        . "WHERE candidats.id = ".$id
        . " LIMIT 1;";
    
    $resultat = mysqli_query($connexion, $sql);

    if (mysqli_num_rows($resultat) > 0) {
        $donnees = mysqli_fetch_assoc($resultat);
        $nom = $donnees["nom"];
        $prenom = $donnees["prenom"];
        $titre_profession = $donnees["titre_profession"];
        $ville = $donnees["ville"];
        $description = $donnees["description"];

        echo '<div class="d-flex align-items-center mb-2">';
        echo '<div class="candidate-image border p-2 mr-3 rounded">';
        echo '<img src="images/person_1.jpg" alt="Image">';
        echo '</div>';
        echo '<div>';
        echo '<h2>' . $nom . ' ' . $prenom . '</h2>';
        echo '<div>';
        echo '<p class="mb-1">' . $titre_profession . '</p>';
        echo '<p class="mb-1"><span class="icon icon-map-marker mr-1"></span>' . $ville . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo "Aucune donnée trouvée.";
    }

    mysqli_close($connexion);
}
?>
 

<?php
function donneee_candidat($id) {
   
    $host = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "base_de_donnee_site_recrutement";

    
    $connexion = mysqli_connect($host, $utilisateur, $mot_de_passe, $base_de_donnees);

    
    if (!$connexion) {
        die("Connexion à la base de données impossible : " . mysqli_connect_error());
    }

    $sql = "SELECT candidats.nom, candidats.prenom, cv.titre_profession, cv.type_travail, cv.ville, cv.description \n"
        . "FROM candidats \n"
        . "INNER JOIN cv ON candidats.id = cv.id_candidat \n"
        . "WHERE candidats.id = " . $id . " \n"
        . "LIMIT 1;";
    $resultat = mysqli_query($connexion, $sql);


    if (mysqli_num_rows($resultat) > 0) {
      
        $donnees = mysqli_fetch_assoc($resultat);

        mysqli_close($connexion);

        return $donnees;
    } else {
        mysqli_close($connexion);

        return array();
    }
}
?>


<?php 
ini_set('display_errors', 1);

function getCandidatCompetences($id_candidat) {
    
    $host = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "base_de_donnee_site_recrutement";
  
    $conn = new mysqli($host, $utilisateur, $mot_de_passe, $base_de_donnees);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  
    
    $sql = "SELECT competences.titre, candidats_competences.niveau
            FROM candidats_competences
            JOIN competences ON candidats_competences.id_competence = competences.id
            WHERE candidats_competences.id_candidat = $id_candidat";
    $result = $conn->query($sql);
  
    $competences = array();
  
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $competences[] = array("titre" => $row["titre"], "niveau" => $row["niveau"]);
      }
    }
  
    $conn->close();
  
    return $competences;
  }

?>



<?php 
function getFormationsByIdCandidat($idCandidat) {
    
    $host = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "base_de_donnee_site_recrutement";
    $conn = mysqli_connect($host, $utilisateur, $mot_de_passe, $base_de_donnees);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
  
    $sql = $sql = "SELECT * FROM formations WHERE id_cv IN (SELECT id FROM cv WHERE id_candidat = $idCandidat) ORDER BY date_debut DESC";

    $result = mysqli_query($conn, $sql);
  
    $formations = array();
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $formation = array(
          "id" => $row["id"],
          "id_cv" => $row["id_cv"],
          "nom_etablissement" => $row["nom_etablissement"],
          "description_bref" => $row["description_bref"],
          "date_debut" => $row["date_debut"],
          "date_fin" => $row["date_fin"],
          "diplome" => $row["diplome"]
        );
        array_push($formations, $formation);
      }
    }
  

    mysqli_close($conn);
    return $formations;
  }

?>


<?php 
function getOffresEmploiRecruteurs() {
    $host = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "base_de_donnee_site_recrutement";
  
    
    $conn = new mysqli($host, $utilisateur, $mot_de_passe, $base_de_donnees);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  
    $sql = "SELECT recruteurs.id, recruteurs.nom_entreprise,recruteurs.ville,recruteurs.email, recruteurs.email, COUNT(offres_emploi.id) as nb_offres, GROUP_CONCAT(CONCAT(offres_emploi.titre, ' à ', offres_emploi.ville_offre) SEPARATOR '; ') as offres FROM offres_emploi INNER JOIN recruteurs ON offres_emploi.id_recruteur = recruteurs.id GROUP BY recruteurs.id, recruteurs.nom_entreprise, recruteurs.email";
  
    $result = $conn->query($sql);
  
    $offres = array();
  
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $recruteur = array(
          "id" => $row["id"],
          "nom_entreprise" => $row["nom_entreprise"],
          "email" => $row["email"],
          "nb_offres" => $row["nb_offres"],
          "ville" => $row["ville"]
        );
        array_push($offres, $recruteur);
      }
    } else {
    }
  
    $conn->close();
  
    return $offres;
  }
  
?>



<?php 
function getRecruiterInfo($id_recruteur) {

  $host = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "base_de_donnee_site_recrutement";

  $conn = mysqli_connect($host, $utilisateur, $mot_de_passe, "base_de_donnee_site_recrutement");

  $query = "SELECT offres_emploi.*, COUNT(offres_emploi.id) AS nb_offres,recruteurs.nom_entreprise AS ne,recruteurs.email AS em,recruteurs.adresse AS ad,recruteurs.code_postal AS cp,recruteurs.ville AS vi,recruteurs.pays AS pa,recruteurs.descriptions AS rec_desc FROM offres_emploi 
            INNER JOIN recruteurs ON offres_emploi.id_recruteur = recruteurs.id 
            WHERE recruteurs.id = $id_recruteur
            GROUP BY recruteurs.id";

  $result = mysqli_query($conn, $query);

  $recruiterData = array();

  while ($row = mysqli_fetch_assoc($result)) {
      $recruiterData['nb_offres'] = $row['nb_offres'];
      $recruiterData['offres'] = array();
      $recruiterData['rec_nom_entreprise'] = $row['ne'];
      $recruiterData['rec_email'] = $row['em'];
      $recruiterData['rec_adresse'] = $row['ad'];
      $recruiterData['rec_code_postal'] = $row['cp'];
      $recruiterData['rec_ville'] = $row['vi'];
      $recruiterData['rec_pays'] = $row['pa'];
      $recruiterData['rec_desc'] = $row['rec_desc'];
      $recruiterData['offres'][] = array(
          'id' => $row['id'],
          'titre' => $row['titre'],
          'description' => $row['description'],
          'date_publication' => $row['date_publication'],
          'date_limite' => $row['date_limite'],
          'ville_offre' => $row['ville_offre'],
          'salaire' => $row['salaire'],
          'email_recruteur' => $row['email_recruteur'],
          'type_travail' => $row['type_travail'],
          'experience' => $row['experience'],
          'niveau_etude' => $row['niveau_etude'],
          'nom_industrie' => $row['nom_industrie'],
          'categorie_travail' => $row['categorie_travail'],
          'images' => $row['images'],
          'nom_societe' => $row['nom_societe'],
          'site_internet' => $row['site_internet'],
          'numero_telephone' => $row['numero_telephone'],
          'email_entreprise' => $row['email_entreprise'],
          'adresse_entreprise' => $row['adresse_entreprise']
      );
  }

  
    mysqli_close($conn);
  
    return $recruiterData;
  }

  ?>




<?php 

function getRecruteursAndOffreInfo($offre_id) {
  $host = "localhost";
  $utilisateur = "root";
  $mot_de_passe = "";
  $base_de_donnees = "base_de_donnee_site_recrutement";
  
  $conn = mysqli_connect($host, $utilisateur, $mot_de_passe, $base_de_donnees);
  
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT offres_emploi.*, recruteurs.nom_entreprise AS ne, recruteurs.email AS em, recruteurs.adresse AS ad, recruteurs.code_postal AS cp, recruteurs.ville AS vi, recruteurs.pays AS pa, recruteurs.descriptions AS rec_desc
          FROM offres_emploi
          JOIN recruteurs ON offres_emploi.id_recruteur = recruteurs.id
          WHERE offres_emploi.id = $offre_id";
  
  $result = mysqli_query($conn, $sql);
  
  if(!$result) {
    die("Query failed: " . mysqli_error($conn));
  }
  
  $offre = mysqli_fetch_assoc($result);
  
  mysqli_free_result($result);
  
  mysqli_close($conn);
  
  return $offre;
}
?>  


<?php 
function getCandidatesListByScore($competences, $categories, $sortOrder) {
    $pdo = new PDO("mysql:host=localhost;dbname=base_de_donnee_site_recrutement", "root", "");
    $sql = "SELECT c.id, c.nom, c.prenom, cv.titre_profession, cv.description, cv.fichier_cv, cv.ville, cv.sexe, cv.type_travail, cv.experience, GROUP_CONCAT(co.titre SEPARATOR ', ') AS competences, COUNT(DISTINCT co.id) AS nb_competences, p.id AS id_offre, o.categorie_travail
    FROM candidats c
    INNER JOIN postulations p ON c.id = p.id_candidat
    INNER JOIN offres_emploi o ON p.id_offre = o.id
    INNER JOIN offres_emploi_competences oc ON o.id = oc.id_offre
    INNER JOIN competences co ON oc.id_competence = co.id
    INNER JOIN cv ON c.id = cv.id_candidat
    WHERE co.titre IN ('" . implode("','", $competences) . "')
    AND o.categorie_travail IN ('" . implode("','", $categories) . "')
    GROUP BY c.id
    ORDER BY nb_competences $sortOrder;";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($result as $row) {
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $titre_profession = $row['titre_profession'];
    $type_travail = $row['type_travail'];
    $ville = $row['ville'];
    $nbrcomp = $row['nb_competences'];
    echo "<ul class='post-job-bx'>";
echo "<li>";
echo "<a href='candidate-single.php'>";
echo "<div class='emp-detail'>";
echo "<div class='job-post-company'>";
echo "<span><img src='images/person_1.jpg' /></span>";
echo "</div>";
echo "<div class='job-post-info'>";
echo "<h4>$nom $prenom</h4>";
echo "<h5>$titre_profession</h5>";
echo "<ul>";
echo "<li><span class='icon icon-clock-o'></span> $type_travail</li>";
echo "<li><span class='icon icon-map-marker'></span>$ville</li>";
echo "<li><span class='icon icon-done'></span>[$nbrcomp compts] compatibles</li>";
echo "</ul>";
echo "</div>";
echo "</div>";
echo "<div class='J-open'>";
echo "<button type='submit' class='theme-btn btn-style-one'>Voir le profil</button>";
echo "</div>";
echo "</a>";
echo "</li>";
echo "</ul>";
    }
}
?>

            



<?php
//session_start();

function connect($email, $mot_de_passe, $pdo) {
    if(empty($email) || empty($mot_de_passe)) {
      return "Veuillez remplir tous les champs";
    }
    
    $stmt = $pdo->prepare("SELECT u.id, u.type, p.nom, p.description FROM utilisateurs u INNER JOIN profils p ON u.profil_id = p.id WHERE u.email = ? AND u.mot_de_passe = ?");
    $stmt->execute([$email, $mot_de_passe]);
   $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$utilisateur) {
      $err="L'email ou le mot de passe est incorrect";
    }elseif($utilisateur['type']=='candidat'){
    
    $_SESSION['user_id'] =$utilisateur['id'];
    $_SESSION['user_type'] =$utilisateur['type'];
    $_SESSION['user_name'] =$utilisateur['nom'];
    $_SESSION['user_description'] =$utilisateur['description'];
    
    header('location:index2.php');
  }elseif($utilisateur['type']=='recruteur'){
    
    $_SESSION['user_id'] =$utilisateur['id'];
    $_SESSION['user_type'] =$utilisateur['type'];
    $_SESSION['user_name'] =$utilisateur['nom'];
    $_SESSION['user_description'] =$utilisateur['description'];
    
    header('location:index3.php');
}
}
?>



<?php

function deconnect() {
    session_start();
    session_unset();
    session_destroy();
    header("Location: candidate-listing.php");
    exit;


}?>


<?php
function recupererDonneesSession() {
    session_start();
    if (session_status() == PHP_SESSION_ACTIVE) {
        foreach ($_SESSION as $cle => $valeur) {
            ${$cle} = $valeur;
        }
    }
}
?>



<?php
function inscrireUtilisateur($email, $motDePasse, $profilId, $type, $nom = null, $prenom = null, $telephone = null, $adresse = null, $codePostal = null, $ville = null, $pays = null, $nomEntreprise = null) {


    $host = "localhost";
    $utilisateur = "utilisateur";
    $mot_de_passe = "motdepasse";
    $base_de_donnees = "ma_base_de_donnees";
    $conn = new mysqli($host, $utilisateur, $mot_de_passe, $base_de_donnees);
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $sql = "SELECT * FROM profils WHERE id = " . $profilId;
    $result = $conn->query($sql);
    if ($result->num_rows != 1) {
        die("Profil introuvable");
    }

    $sql = "INSERT INTO utilisateurs (email, mot_de_passe, profil_id, type, id_candidat_ou_recruteur) VALUES ('$email', '$motDePasse', $profilId, '$type', NULL)";
    if ($type == "candidat") {
        $sqlCandidat = "INSERT INTO candidats (nom, prenom, email, telephone, mot_de_passe, adresse, code_postal, ville, pays) VALUES ('$nom', '$prenom', '$email', '$telephone', '$motDePasse', '$adresse', '$codePostal', '$ville', '$pays')";
        if ($conn->query($sqlCandidat) === false) {
            die("Erreur d'insertion de candidat : " . $conn->error);
        }
        $idCandidat = $conn->insert_id;
        $sql = "UPDATE utilisateurs SET id_candidat_ou_recruteur = $idCandidat WHERE email = '$email'";
    } elseif ($type == "recruteur") {
        $sqlRecruteur = "INSERT INTO recruteurs (nom_entreprise, email, mot_de_passe, adresse, code_postal, ville, pays) VALUES ('$nomEntreprise', '$email', '$motDePasse', '$adresse', '$codePostal', '$ville', '$pays')";
        if ($conn->query($sqlRecruteur) === false) {
            die("Erreur d'insertion de recruteur : " . $conn->error);
        }
        $idRecruteur = $conn->insert_id;
        $sql = "UPDATE utilisateurs SET id_candidat_ou_recruteur = $idRecruteur WHERE email = '$email'";
    }
    if ($conn->query($sql) === false) {
        die("Erreur d'insertion d'utilisateur : " . $conn->error);
    }

    $conn->close();
}


?>


<?php 
function getCategoriesTravail()
{
  $host = "localhost";
 $utilisateur = "root";
  $mot_de_passe = "";
  $base_de_donnees = "base_de_donnee_site_recrutement";
    $pdo =new PDO("mysql:host=$host;dbname=$base_de_donnees",$utilisateur, $mot_de_passe);
    $query = "SELECT DISTINCT categorie_travail FROM offres_emploi";
    $result = $pdo->query($query);
    $categoriesTravail = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $categoriesTravail[] = $row['categorie_travail'];
    }
    return $categoriesTravail;
}


?>



<?php 
function getTitreProffesion()
{  $host = "localhost";
 $utilisateur = "root";
  $mot_de_passe = "";
  $base_de_donnees = "base_de_donnee_site_recrutement";
    $pdo =new PDO("mysql:host=$host;dbname=$base_de_donnees",$utilisateur, $mot_de_passe);
    $query = "SELECT DISTINCT titre_profession FROM cv";
    $result = $pdo->query($query);
    $Titre = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $Titre[] = $row['titre_profession'];
    }
    return $Titre;
}


?>

<?php 
function getcompetances()
{
  $host = "localhost";
 $utilisateur = "root";
  $mot_de_passe = "";
  $base_de_donnees = "base_de_donnee_site_recrutement";

    $pdo = new PDO("mysql:host=$host;dbname=$base_de_donnees",$utilisateur, $mot_de_passe);
    $query = "SELECT titre FROM `competences`;";
    $result = $pdo->query($query);
    $Titre = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $Titre[] = $row['titre'];
    }
    return $Titre;
}


?>


<?php
function reccuperer_candidat_nom_prenom_liste_compeance_postulation_et_category_travail(){

  $host = "localhost";
 $utilisateur = "root";
  $mot_de_passe = "";
  $base_de_donnees = "base_de_donnee_site_recrutement";
  
  $conn = mysqli_connect($host,$utilisateur, $mot_de_passe, $base_de_donnees);
  
  if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
  }
  
  $sql = "SELECT c.nom, c.prenom, GROUP_CONCAT(co.titre SEPARATOR ', ') AS competences, p.id AS id_offre, o.categorie_travail 
          FROM candidats c 
          INNER JOIN postulations p ON c.id = p.id_candidat 
          INNER JOIN offres_emploi o ON p.id_offre = o.id 
          INNER JOIN offres_emploi_competences oc ON o.id = oc.id_offre 
          INNER JOIN competences co ON oc.id_competence = co.id 
          GROUP BY c.id";
  
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "Nom: " . $row["nom"] . "<br>";
      echo "Prénom: " . $row["prenom"] . "<br>";
      echo "Compétences: " . $row["competences"] . "<br>";
      echo "ID offre emploi: " . $row["id_offre"] . "<br>";
      echo "Catégorie: " . $row["categorie_travail"] . "<br><br>\n";
    }
  } else {
    echo "Aucun résultat trouvé.";
  }
  
  mysqli_close($conn);
}
?>

<?php
function getOffresEmploi() {
  $host = "localhost";
  $utilisateur = "root";
  $mot_de_passe = "";
  $base_de_donnees = "base_de_donnee_site_recrutement";

  $conn = new mysqli($host, $utilisateur, $mot_de_passe, $base_de_donnees);

  if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
  }

  $sql = "SELECT offres_emploi.*, cv.titre_profession, cv.description, cv.fichier_cv, cv.ville, cv.sexe, cv.type_travail, cv.experience FROM offres_emploi INNER JOIN recruteurs ON offres_emploi.id_recruteur = recruteurs.id INNER JOIN utilisateurs ON utilisateurs.id_candidat_ou_recruteur = recruteurs.id INNER JOIN cv ON utilisateurs.id_candidat_ou_recruteur = cv.id_candidat";

  $result = $conn->query($sql);

  $offres_emploi = array();

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $offre_emploi = array(
        "id" => $row["id"],
        "id_recruteur" => $row["id_recruteur"],
        "titre" => $row["titre"],
        "description" => $row["description"],
        "date_publication" => $row["date_publication"],
        "date_limite" => $row["date_limite"],
        "ville_offre" => $row["ville_offre"],
        "salaire" => $row["salaire"],
        "email_recruteur" => $row["email_recruteur"],
        "type_travail" => $row["type_travail"],
        "experience" => $row["experience"],
        "niveau_etude" => $row["niveau_etude"],
        "nom_industrie" => $row["nom_industrie"],
        "categorie_travail" => $row["categorie_travail"],
        "images" => $row["images"],
        "nom_societe" => $row["nom_societe"],
        "site_internet" => $row["site_internet"],
        "numero_telephone" => $row["numero_telephone"],
        "email_entreprise" => $row["email_entreprise"],
        "adresse_entreprise" => $row["adresse_entreprise"],
        "titre_profession" => $row["titre_profession"],
        "description_cv" => $row["description"],
        "fichier_cv" => $row["fichier_cv"],
        "ville_cv" => $row["ville"],
        "sexe_cv" => $row["sexe"],
        "type_travail_cv" => $row["type_travail"],
        "experience_cv" => $row["experience"]
      );
      array_push($offres_emploi, $offre_emploi);
    }
  }

  $conn->close();

  return $offres_emploi;
}
?>