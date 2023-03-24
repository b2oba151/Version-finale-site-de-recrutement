# Hi 👋
# <p align="center">Projet de Module</p>
  


* [lien pour visualiser la base de donnée](https://dbdiagram.io/d/6414f7c7296d97641d88e00f)
* les fichier de la base de donnee se trouve dans le dossier: *la_base_de__donnee*
* Tous les fonctions utilser pour la dynamisation du site se trouve dans le fichier *foncions.php* 
* les informations de connexions avec la base de donnée sont dans le fichier: *config_bd.php* 
  *  $host = "localhost";
   * $utilisateur = "root";
    * $mot_de_passe = "";
     * $base_de_donnees = "base_de_donnee_site_recrutement";
  
#### Pour une bonne comprehension de la base de donnee voici ci-dessus quelques requettes utiles;et dans *la_base_de__donnee/les_requetes_sql.sql* se trouve d autres requetes.

### <p align="center">affichage de la liste des candidats avec leurs competances et l'id_offre auquel ils on postuler </p>
  
####🧑🏻‍💻 Requete
```sql
SELECT c.id,c.nom, c.prenom, GROUP_CONCAT(co.titre SEPARATOR ', ') AS competences, p.id AS id_offre, o.categorie_travail 
                        FROM candidats c 
                        INNER JOIN postulations p ON c.id = p.id_candidat 
                        INNER JOIN offres_emploi o ON p.id_offre = o.id 
                        INNER JOIN offres_emploi_competences oc ON o.id = oc.id_offre 
                        INNER JOIN competences co ON oc.id_competence = co.id 
                        GROUP BY c.id;
}
```
 
### <p align="center">Requette du score des candidats(exemple cas: recuperer les candiats avec comme competances 'Programmation Python', 'Gestion de Projet' et 'Gestion de projet' comme titre du poste)</p>
  
####🧑🏻‍💻 Requete
```sql
                        SELECT c.id, c.nom, c.prenom, cv.titre_profession, cv.description, cv.fichier_cv, cv.ville, cv.sexe, cv.type_travail, cv.experience, GROUP_CONCAT(co.titre SEPARATOR ', ') AS competences, COUNT(DISTINCT co.id) AS nb_competences, p.id AS id_offre, o.categorie_travail
                        FROM candidats c
                        INNER JOIN postulations p ON c.id = p.id_candidat
                        INNER JOIN offres_emploi o ON p.id_offre = o.id
                        INNER JOIN offres_emploi_competences oc ON o.id = oc.id_offre
                        INNER JOIN competences co ON oc.id_competence = co.id
                        INNER JOIN cv ON c.id = cv.id_candidat
                        WHERE co.titre IN ('Programmation Python', 'Gestion de Projet')
                        AND o.categorie_travail = 'Gestion de projet'
                        GROUP BY c.id
                        ORDER BY nb_competences asc;

```
           

### <p align="center">les experiences du candidat avec id=1</p>
  
####🧑🏻‍💻 Requete
```sql
SELECT nom_societe, poste, nom_employeur, description_bref, date_debut, date_fin 
FROM experiances 
INNER JOIN cv ON experiances.id_cv = cv.id 
INNER JOIN candidats ON cv.id_candidat = candidats.id 
WHERE candidats.id = 1 
ORDER BY date_fin DESC;
```


### <p align="center">les formations du candidat avec id=1</p>
  
  
####🧑🏻‍💻 Requete
```sql
SELECT formations.nom_etablissement, formations.description_bref, formations.diplome, formations.date_debut, formations.date_fin
FROM candidats
JOIN cv ON candidats.id = cv.id_candidat
JOIN formations ON cv.id = formations.id_cv
WHERE candidats.id = 1
ORDER BY formations.date_fin desc;

```






         