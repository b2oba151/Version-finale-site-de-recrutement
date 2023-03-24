# Hi 👋
# <p align="center">Projet de Module</p>
  
base de donnée site de recrutement

* [lien pour visualiser la base de donnée](https://dbdiagram.io/d/6414f7c7296d97641d88e00f)
        

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
}
```
           
       